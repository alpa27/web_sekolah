<?php
include 'includes/koneksi.php';
include 'includes/header.php';
?>

<style>
/* Modern News Page Styling */
.news-hero {
    background: linear-gradient(135deg, rgb(73, 0, 243) 0%, #0b5ed7 50%, #0056b3 100%);
    padding: 6rem 0;
    position: relative;
    overflow: hidden;
}

.news-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="news" width="30" height="30" patternUnits="userSpaceOnUse"><circle cx="15" cy="15" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23news)"/></svg>');
    opacity: 0.3;
}

.news-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: white;
}

.news-title {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.news-subtitle {
    font-size: 1.3rem;
    opacity: 0.9;
    margin-bottom: 2rem;
}

/* Filter Section */
.filter-section {
    padding: 3rem 0;
    background: white;
    border-bottom: 1px solid #e9ecef;
}

.filter-btn {
    background: white;
    border: 2px solid #e9ecef;
    color: #6c757d;
    padding: 0.75rem 1.5rem;
    border-radius: 25px;
    margin: 0.25rem;
    transition: all 0.3s ease;
    font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
    background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
    border-color: rgb(73, 0, 243);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(115, 0, 243, 0.3);
}

/* News Grid */
.news-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.news-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    position: relative;
}

.news-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
}

.news-image-container {
    position: relative;
    overflow: hidden;
    height: 250px;
}

.news-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.3s ease;
}

.news-card:hover .news-image {
    transform: scale(1.1);
}

.news-date-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(115, 0, 243, 0.9);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
    backdrop-filter: blur(10px);
}

.news-content {
    padding: 2rem;
}

.news-card-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #2c3e50;
    line-height: 1.4;
}

.news-excerpt {
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.news-meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1.5rem;
}

.news-category {
    background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.75rem;
    font-weight: 600;
}

.news-read-btn {
    background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
    color: white;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
}

.news-read-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(115, 0, 243, 0.3);
    color: white;
}

/* Modal Styling */
.news-modal .modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 25px 50px rgba(0,0,0,0.2);
}

.news-modal .modal-header {
    background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
    color: white;
    border-radius: 20px 20px 0 0;
    border: none;
}

.news-modal .modal-title {
    font-weight: 700;
}

.news-modal .modal-body {
    padding: 2rem;
}

.news-modal .modal-footer {
    border-top: 1px solid #e9ecef;
    padding: 1.5rem 2rem;
}

/* Loading Animation */
.loading-spinner {
    display: none;
    text-align: center;
    padding: 2rem;
}

.spinner {
    width: 40px;
    height: 40px;
    border: 4px solid #f3f3f3;
    border-top: 4px solid rgb(73, 0, 243);
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin: 0 auto;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .news-title {
        font-size: 2.5rem;
    }
    
    .news-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .filter-btn {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
    }
    
    .news-content {
        padding: 1.5rem;
    }
}
</style>

<!-- Hero Section -->
<section class="news-hero">
    <div class="container">
        <div class="news-hero-content">
            <h1 class="news-title">Berita & Informasi</h1>
            <p class="news-subtitle">Ikuti perkembangan terbaru SMK Negeri 64 Jakarta</p>
        </div>
    </div>
</section>

<!-- Filter Section -->

<!-- News Section -->
<section class="news-section">
    <div class="container">
        <div class="loading-spinner" id="loadingSpinner">
            <div class="spinner"></div>
            <p class="mt-3 text-muted">Memuat berita...</p>
        </div>
        
        <div class="news-grid" id="newsGrid">
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY tanggal DESC");

            if ($query && mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    $judul = htmlspecialchars($row['judul']);
                    $tanggal = date('d M Y', strtotime($row['tanggal']));
                    $isi = strip_tags($row['isi']);
                    $ringkasan = substr($isi, 0, 120) . '...';
                    $gambar = !empty($row['gambar']) ? "assets/image/" . htmlspecialchars($row['gambar']) : "assets/image/depan.jpeg";
                    $berita_id = intval($row['id_berita']);
                    
                    // Determine category based on title or content
                    $category = 'Berita';
                    if (stripos($judul, 'prestasi') !== false || stripos($isi, 'prestasi') !== false) {
                        $category = 'Prestasi';
                    } elseif (stripos($judul, 'event') !== false || stripos($judul, 'acara') !== false) {
                        $category = 'Event';
                    } elseif (stripos($judul, 'pengumuman') !== false || stripos($judul, 'info') !== false) {
                        $category = 'Pengumuman';
                    } elseif (stripos($judul, 'akademik') !== false || stripos($judul, 'belajar') !== false) {
                        $category = 'Akademik';
                    }
            ?>
            <div class="news-card" data-category="<?= strtolower($category) ?>">
                <div class="news-image-container">
                    <img src="<?= $gambar ?>" class="news-image" alt="<?= $judul ?>">
                    <div class="news-date-badge">
                        <i class="bi bi-calendar3"></i> <?= $tanggal ?>
                    </div>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-category"><?= $category ?></span>
                        <small class="text-muted">
                            <i class="bi bi-clock"></i> <?= date('H:i', strtotime($row['tanggal'])) ?>
                        </small>
                    </div>
                    <h5 class="news-card-title"><?= $judul ?></h5>
                    <p class="news-excerpt"><?= $ringkasan ?></p>
                    <a href="#" class="news-read-btn" onclick="tampilkanBerita(event, <?= $berita_id ?>)">
                        Baca Selengkapnya <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            <?php
                }
            } else {
                echo '<div class="col-12 text-center"><p class="text-muted">Belum ada berita yang tersedia.</p></div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Modal Detail Berita -->
<div class="modal fade news-modal" id="modalDetailBerita" tabindex="-1" aria-labelledby="modalBeritaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBeritaLabel">Judul Berita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted mb-3" id="modalTanggal"></p>
                <img id="modalGambar" src="" alt="Gambar" class="img-fluid rounded mb-4" style="display: none; max-height: 400px; object-fit: cover;">
                <div id="modalIsiBerita" class="news-content-text"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Script AJAX untuk Modal -->
<script>
function tampilkanBerita(e, id) {
    e.preventDefault();
    
    // Show loading spinner
    document.getElementById('loadingSpinner').style.display = 'block';
    
    fetch('get_berita.php?id=' + id)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('modalBeritaLabel').innerText = data.judul;
                document.getElementById('modalTanggal').innerHTML = '<i class="bi bi-calendar3"></i> ' + data.tanggal;

                const gambar = document.getElementById('modalGambar');
                if (data.gambar) {
                    gambar.src = 'assets/image/' + data.gambar;
                    gambar.style.display = 'block';
                } else {
                    gambar.style.display = 'none';
                }

                document.getElementById('modalIsiBerita').innerHTML = data.isi;

                const modal = new bootstrap.Modal(document.getElementById('modalDetailBerita'));
                modal.show();
            } else {
                alert('Berita tidak ditemukan.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat memuat berita.');
        })
        .finally(() => {
            // Hide loading spinner
            document.getElementById('loadingSpinner').style.display = 'none';
        });
}

// Filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const newsCards = document.querySelectorAll('.news-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            newsCards.forEach(card => {
                const category = card.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeIn 0.5s ease-in';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});

// Add fadeIn animation
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
`;
document.head.appendChild(style);
</script>

<?php include 'includes/footer.php'; ?>
