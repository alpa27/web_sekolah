<?php
session_start();
if (!isset($_SESSION['id_admin'])) {
    header("Location: admin/login.php");
    exit;
}
include 'includes/koneksi.php';

// Proses Tambah Berita
if (isset($_POST['tambah'])) {
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $isi = mysqli_real_escape_string($koneksi, $_POST['isi']);
    $gambar = '';
    
    // Upload gambar jika ada
    if (!empty($_FILES['gambar']['name'])) {
        $target_dir = "assets/image/";
        $file_extension = strtolower(pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION));
        $new_filename = time() . '_' . uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_filename;
        
        // Cek apakah file adalah gambar
        $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($file_extension, $allowed_types) && move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $gambar = $new_filename;
        }
    }
    
    $sql = "INSERT INTO berita (judul, isi, gambar, tanggal) VALUES ('$judul', '$isi', '$gambar', NOW())";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: beritaadmin.php?success=tambah");
    } else {
        header("Location: beritaadmin.php?error=tambah");
    }
    exit;
}

// Proses Edit Berita
if (isset($_POST['edit'])) {
    $id = intval($_POST['id']);
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $isi = mysqli_real_escape_string($koneksi, $_POST['isi']);
    
    // Ambil data berita lama
    $query = mysqli_query($koneksi, "SELECT gambar FROM berita WHERE id = $id");
    $berita = mysqli_fetch_assoc($query);
    $gambar = $berita['gambar'];
    
    // Upload gambar baru jika ada
    if (!empty($_FILES['gambar']['name'])) {
        $target_dir = "assets/image/";
        $file_extension = strtolower(pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION));
        $new_filename = time() . '_' . uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_filename;
        
        $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($file_extension, $allowed_types) && move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            // Hapus gambar lama jika ada
            if (!empty($gambar) && file_exists($target_dir . $gambar)) {
                unlink($target_dir . $gambar);
            }
            $gambar = $new_filename;
        }
    }
    
    $sql = "UPDATE berita SET judul='$judul', isi='$isi', gambar='$gambar' WHERE id=$id";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: beritaadmin.php?success=edit");
    } else {
        header("Location: beritaadmin.php?error=edit");
    }
    exit;
}

// Proses Hapus Berita
if (isset($_GET['hapus'])) {
    $id = intval($_GET['hapus']);
    
    // Ambil nama file gambar
    $query = mysqli_query($koneksi, "SELECT gambar FROM berita WHERE id = $id");
    $berita = mysqli_fetch_assoc($query);
    
    // Hapus file gambar jika ada
    if (!empty($berita['gambar'])) {
        $file_path = "assets/image/" . $berita['gambar'];
        if (file_exists($file_path)) {
            unlink($file_path);
        }
    }
    
    $sql = "DELETE FROM berita WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: beritaadmin.php?success=hapus");
    } else {
        header("Location: beritaadmin.php?error=hapus");
    }
    exit;
}

// Jika tidak ada operasi yang valid
header("Location: beritaadmin.php");
exit;
?> 