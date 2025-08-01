<?php include 'includes/header.php'; 
include 'functions.php';?>

<style>
/* Modern Hero Section */
.hero-section {
    background: linear-gradient(135deg, rgb(73, 0, 243) 0%, #0b5ed7 50%, #0056b3 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.3;
}

.hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: white;
}

.hero-title {
    font-size: 4rem;
    font-weight: 800;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    animation: fadeInUp 1s ease-out;
}

.hero-subtitle {
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    opacity: 0.9;
    animation: fadeInUp 1s ease-out 0.2s both;
}

.hero-description {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    opacity: 0.8;
    animation: fadeInUp 1s ease-out 0.4s both;
}

.hero-btn {
    animation: fadeInUp 1s ease-out 0.6s both;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Modern About Section */
.about-section {
    padding: 6rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
}

.about-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100px;
    background: linear-gradient(135deg, rgb(73, 0, 243) 0%, #0b5ed7 100%);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 50%);
}

.about-card {
    background: white;
    border-radius: 20px;
    padding: 3rem;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    transform: translateY(0);
    transition: all 0.3s ease;
}

.about-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 60px rgba(0,0,0,0.15);
}

.about-image {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

.about-image:hover {
    transform: scale(1.05);
}

/* Vision Mission Section */
.vision-mission {
    padding: 6rem 0;
    background: white;
}

.vm-card {
    background: linear-gradient(135deg, rgb(73, 0, 243) 0%, #0b5ed7 100%);
    color: white;
    border-radius: 20px;
    padding: 2.5rem;
    margin-bottom: 2rem;
    position: relative;
    overflow: hidden;
}

.vm-card::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    animation: rotate 20s linear infinite;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.vm-content {
    position: relative;
    z-index: 2;
}

/* News Section */
.news-section {
    padding: 6rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.news-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    height: 100%;
}

.news-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
}

.news-image {
    height: 250px;
    object-fit: cover;
    transition: all 0.3s ease;
}

.news-card:hover .news-image {
    transform: scale(1.1);
}

.news-content {
    padding: 2rem;
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, rgb(73, 0, 243) 0%, #0b5ed7 100%);
    padding: 4rem 0;
    position: relative;
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
}

.cta-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.5rem;
    }
    
    .about-card {
        padding: 2rem;
    }
    
    .vm-card {
        padding: 2rem;
    }
}
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Selamat Datang di</h1>
            <h2 class="hero-subtitle">SMK Negeri 64 Jakarta</h2>
            <p class="hero-description">Sekolah Unggulan Berbasis Teknologi dan Karakter</p>
            <a href="profil.php" class="btn btn-light btn-lg hero-btn">Lihat Profil Sekolah</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="about-image">
                    <img src="assets/image/foto1.jpg" alt="Gedung Sekolah" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-card">
                    <h3 class="mb-4 text-primary fw-bold">Identitas SMKN 64 Jakarta</h3>
                    <p class="lead mb-4">
                        SMKN 64 Jakarta adalah sekolah kejuruan yang berbasis pada teknologi informasi dengan memiliki 2 (dua) kompetensi unggulan:
                    </p>
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-code-slash text-white"></i>
                                </div>
                                <span class="fw-semibold">RPL</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-palette text-white"></i>
                                </div>
                                <span class="fw-semibold">DKV</span>
                            </div>
                        </div>
                    </div>
                    <p class="mb-4">
                        Berdiri sejak tahun 2019, SMKN 64 Jakarta merupakan sekolah baru yang ingin menjaring peserta didik lulusan SMP yang memiliki minat dengan kejuruan teknologi dan informasi.
                    </p>
                    <p class="mb-4">
                        Kami berkomitmen mencetak lulusan yang siap kerja, memiliki etos kerja tinggi, dan berakhlak mulia.
                    </p>
                    <a href="profil.php" class="btn btn-primary btn-lg">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Mission Section -->
<section class="vision-mission">
    <div class="container">
        <h3 class="text-center text-primary mb-5 fw-bold">Visi & Misi Sekolah</h3>
        <div class="row">
            <div class="col-lg-6">
                <div class="vm-card">
                    <div class="vm-content">
                        <h5 class="fw-bold mb-3">Visi</h5>
                        <p class="mb-0">Memiliki tamatan yang Berbudi pekerti luhur, Berkarakter, Mandiri, Berprestasi dan Berjiwa Wirausaha</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vm-card">
                    <div class="vm-content">
                        <h5 class="fw-bold mb-3">Misi</h5>
                        <ul class="mb-0">
                            <li>Mengimplementasikan 5S (Senyum, Sapa, Salam, Sopan dan Santun).</li>
                            <li>Membangun peserta didik menjadi seseorang yang memiliki sikap profesional</li>
                            <li>Mengarahkan peserta didik untuk meningkatkan potensi dan keahlian diri melalui pelatihan di dalam maupun di luar lingkungan sekolah</li>
                            <li>Menyiapkan tamatan agar mendapatkan prestasi juara di tingkat nasional dengan pelatihan di setiap kompetensi.</li>
                            <li>Mengarahkan peserta didik mempunyai jiwa wirausaha melalui pelajaran kewirausahaan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="container">
        <h3 class="text-center text-primary mb-5 fw-bold">Berita Terbaru</h3>
        <?php
        include 'includes/koneksi.php';
        // Ambil 3 berita terbaru
        $data = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY tanggal DESC LIMIT 3");
        
        if (!$data) {
            echo '<div class="alert alert-danger">Error: ' . mysqli_error($koneksi) . '</div>';
        }
        
        if ($data && mysqli_num_rows($data) > 0) {
            echo '<div class="row">';
            while ($row = mysqli_fetch_assoc($data)) {
                $judul = htmlspecialchars($row['judul']);
                $tanggal = date('d M Y', strtotime($row['tanggal']));
                $isi = strip_tags($row['isi']);
                $ringkasan = substr($isi, 0, 100) . '...';
                $gambar = !empty($row['gambar']) ? "assets/image/" . htmlspecialchars($row['gambar']) : "assets/image/foto1.jpg";
                $berita_id = isset($row['id']) ? intval($row['id']) : 0;
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-card">
                        <div class="overflow-hidden">
                            <img src="<?= $gambar ?>" class="news-image w-100" alt="<?= $judul ?>">
                        </div>
                        <div class="news-content">
                            <h5 class="card-title fw-bold"><?= $judul ?></h5>
                            <p class="text-muted mb-3"><i class="bi bi-calendar3"></i> <?= $tanggal ?></p>
                            <p class="card-text"><?= $ringkasan ?></p>
                            <?php if ($berita_id > 0): ?>
                                <a href="berita.php?id=<?= $berita_id ?>" class="btn btn-primary">Baca Selengkapnya</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            echo '</div>';
            echo '<div class="text-center mt-5">';
            echo '<a href="berita.php" class="btn btn-outline-primary btn-lg">Lihat Semua Berita</a>';
            echo '</div>';
        } else {
            echo '<div class="text-center">';
            if (!$data) {
                echo '<p class="text-muted">Error: Gagal mengambil data berita.</p>';
            } else {
                echo '<p class="text-muted">Belum ada berita yang tersedia.</p>';
            }
            echo '</div>';
        }
        ?>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h4 class="mb-4 fw-bold">Tertarik Bergabung dengan SMK Negeri 64 Jakarta?</h4>
            <p class="mb-4">Bergabunglah dengan kami dan wujudkan masa depan cemerlang di dunia teknologi!</p>
            <a href="kontak.php" class="btn btn-light btn-lg">Hubungi Kami</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
