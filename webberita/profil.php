<?php
include 'includes/koneksi.php';
include 'includes/header.php';
include 'functions.php';
?>

<style>
/* Modern Profile Page Styling */
.profile-hero {
    background: linear-gradient(135deg, rgb(73, 0, 243) 0%, #0b5ed7 50%, #0056b3 100%);
    padding: 6rem 0;
    position: relative;
    overflow: hidden;
}

.profile-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="hex" width="50" height="50" patternUnits="userSpaceOnUse"><polygon points="25,0 50,15 50,35 25,50 0,35 0,15" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23hex)"/></svg>');
    opacity: 0.3;
}

.profile-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: white;
}

.profile-title {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.profile-subtitle {
    font-size: 1.3rem;
    opacity: 0.9;
    margin-bottom: 2rem;
}

/* Timeline Section */
.timeline-section {
    padding: 6rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
}

.timeline-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100px;
    background: linear-gradient(135deg, rgb(73, 0, 243) 0%, #0b5ed7 100%);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 50%);
}

.timeline-card {
    background: white;
    border-radius: 20px;
    padding: 3rem;
    margin-bottom: 3rem;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
}

.timeline-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 100%;
    background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
}

.timeline-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 60px rgba(0,0,0,0.15);
}

.timeline-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 2rem;
    font-size: 2rem;
    color: white;
    position: relative;
}

.timeline-icon.vision {
    background: linear-gradient(135deg, #28a745, #20c997);
}

.timeline-icon.mission {
    background: linear-gradient(135deg, #007bff, #6610f2);
}

.timeline-icon.history {
    background: linear-gradient(135deg, #ffc107, #fd7e14);
}

.timeline-icon.competency {
    background: linear-gradient(135deg, #dc3545, #e83e8c);
}

/* Competency Section */
.competency-section {
    padding: 6rem 0;
    background: white;
}

.competency-card {
    background: linear-gradient(135deg, rgb(73, 0, 243) 0%, #0b5ed7 100%);
    color: white;
    border-radius: 20px;
    padding: 3rem;
    text-align: center;
    margin-bottom: 2rem;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
}

.competency-card::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    animation: rotate 20s linear infinite;
}

.competency-content {
    position: relative;
    z-index: 2;
}

.competency-icon {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    opacity: 0.9;
}

/* Stats Section */
.stats-section {
    padding: 6rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.stat-card {
    background: white;
    border-radius: 20px;
    padding: 2.5rem;
    text-align: center;
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    margin-bottom: 2rem;
}

.stat-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
}

.stat-number {
    font-size: 3rem;
    font-weight: 800;
    color: rgb(73, 0, 243);
    margin-bottom: 1rem;
}

.stat-label {
    font-size: 1.1rem;
    color: #6c757d;
    font-weight: 600;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .profile-title {
        font-size: 2.5rem;
    }
    
    .timeline-card {
        padding: 2rem;
    }
    
    .competency-card {
        padding: 2rem;
    }
    
    .stat-card {
        padding: 2rem;
    }
}
</style>

<!-- Hero Section -->
<section class="profile-hero">
    <div class="container">
        <div class="profile-hero-content">
            <h1 class="profile-title">Profil Sekolah</h1>
            <p class="profile-subtitle">SMK Negeri 64 Jakarta - Sekolah Unggulan Berbasis Teknologi dan Karakter</p>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="timeline-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="timeline-card">
                    <div class="timeline-icon vision">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                    <h3 class="mb-3 fw-bold">Visi</h3>
                    <p class="lead mb-0">Memiliki tamatan yang Berbudi pekerti luhur, Berkarakter, Mandiri, Berprestasi dan Berjiwa Wirausaha.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="timeline-card">
                    <div class="timeline-icon mission">
                        <i class="bi bi-flag-fill"></i>
                    </div>
                    <h3 class="mb-3 fw-bold">Misi</h3>
                    <ul class="mb-0">
            <li>Menyelenggarakan pendidikan berkualitas berbasis teknologi dan karakter.</li>
            <li>Mengembangkan potensi peserta didik secara optimal.</li>
            <li>Meningkatkan kompetensi guru dan tenaga kependidikan.</li>
            <li>Menjalin kerjasama dengan berbagai pihak untuk mendukung kemajuan sekolah.</li>
        </ul>
    </div>
    </div>
</div>

        <div class="row">
            <div class="col-lg-12">
                <div class="timeline-card">
                    <div class="timeline-icon history">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h3 class="mb-3 fw-bold">Sejarah Singkat</h3>
                    <p class="lead mb-4">SMKN 64 Jakarta adalah sekolah kejuruan yang berbasis pada teknologi informasi dengan memiliki 2 (dua) kompetensi unggulan:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="bi bi-code-slash text-white"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">RPL</h5>
                                    <small class="text-muted">Rekayasa Perangkat Lunak</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="bi bi-palette text-white"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">DKV</h5>
                                    <small class="text-muted">Desain Komunikasi Visual</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">Berdiri sejak tahun 2019, SMKN 64 Jakarta merupakan sekolah baru yang ingin menjaring peserta didik lulusan SMP yang memiliki minat dengan kejuruan teknologi dan informasi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Competency Section -->
<section class="competency-section">
    <div class="container">
        <h3 class="text-center text-primary mb-5 fw-bold">Kompetensi Unggulan</h3>
        <div class="row">
            <div class="col-lg-6">
                <div class="competency-card">
                    <div class="competency-content">
                        <div class="competency-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <h4 class="mb-3 fw-bold">RPL (Rekayasa Perangkat Lunak)</h4>
                        <p class="mb-0">Program keahlian yang mempelajari tentang pengembangan perangkat lunak, pemrograman, dan teknologi informasi untuk menghasilkan lulusan yang siap kerja di industri teknologi.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="competency-card">
                    <div class="competency-content">
                        <div class="competency-icon">
                            <i class="bi bi-palette"></i>
                        </div>
                        <h4 class="mb-3 fw-bold">DKV (Desain Komunikasi Visual)</h4>
                        <p class="mb-0">Program keahlian yang mempelajari tentang desain grafis, multimedia, dan komunikasi visual untuk menghasilkan lulusan yang kreatif dan inovatif di bidang desain.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <h3 class="text-center text-primary mb-5 fw-bold">Statistik Sekolah</h3>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Siswa Aktif</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-number">25+</div>
                    <div class="stat-label">Guru Ahli</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Lulusan Kerja</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-number">2</div>
                    <div class="stat-label">Jurusan Unggulan</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
