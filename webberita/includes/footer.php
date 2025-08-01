<footer class="bg-dark text-white mt-5" style="width:100vw; margin-left:calc(-50vw + 50%); margin-right:calc(-50vw + 50%); padding:0;">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-12 bg-primary-dark py-5">
                <div class="container">
                    <div class="row justify-content-center align-items-start">
                        <!-- Profil Sekolah & Sosmed -->
                        <div class="col-lg-4 mb-4 mb-lg-0 text-center text-lg-start">
                            <h3 class="mb-1 fw-bold">SMK Negeri 64 Jakarta</h3>
                            <p class="mb-3 text-light">Sekolah Unggulan Berbasis Teknologi dan Karakter. Menghasilkan lulusan berkualitas dan siap kerja di era digital dengan kompetensi unggul dalam teknologi informasi dan komunikasi.</p>
                            <div class="d-flex justify-content-center justify-content-lg-start gap-3 mb-3">
                                <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-youtube"></i></a>
                                <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-envelope"></i></a>
                            </div>
                        </div>
                        <!-- Statistik Sekolah Tengah -->
                        <div class="col-lg-4 mb-4 mb-lg-0 d-flex flex-column align-items-center">
                            <h6 class="text-warning fw-bold mb-3">Statistik Sekolah</h6>
                            <div class="row w-100 text-center justify-content-center">
                                <div class="col-6 col-md-6 mb-3">
                                    <div class="bg-primary rounded p-3">
                                        <h4 class="text-white mb-1 fw-bold">500+</h4>
                                        <small class="text-light">Siswa Aktif</small>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 mb-3">
                                    <div class="bg-success rounded p-3">
                                        <h4 class="text-white mb-1 fw-bold">95%</h4>
                                        <small class="text-light">Lulusan Kerja</small>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 mb-3">
                                    <div class="bg-warning rounded p-3">
                                        <h4 class="text-dark mb-1 fw-bold">25+</h4>
                                        <small class="text-dark">Guru Ahli</small>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 mb-3">
                                    <div class="bg-info rounded p-3">
                                        <h4 class="text-white mb-1 fw-bold">2</h4>
                                        <small class="text-light">Jurusan</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Link Cepat & Kontak -->
                        <div class="col-lg-4 text-center text-lg-start">
                            <h6 class="text-warning fw-bold mb-3">Link Cepat</h6>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><a href="/webberita/index.php" class="text-light text-decoration-none hover-warning">Beranda</a></li>
                                <li class="mb-2"><a href="/webberita/profil.php" class="text-light text-decoration-none hover-warning">Profil Sekolah</a></li>
                                <li class="mb-2"><a href="/webberita/berita.php" class="text-light text-decoration-none hover-warning">Berita</a></li>
                                <li class="mb-2"><a href="/webberita/kontak.php" class="text-light text-decoration-none hover-warning">Kontak</a></li>
                                <li class="mb-2"><a href="admin/login.php" class="text-light text-decoration-none hover-warning">Admin</a></li>
                            </ul>
                            <h6 class="text-warning fw-bold mb-3">Kontak Kami</h6>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <i class="bi bi-geo-alt-fill text-warning me-3"></i>
                                    <span class="text-light">Jl. Raya Jakarta No. 64, Jakarta Pusat, DKI Jakarta</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <i class="bi bi-telephone-fill text-warning me-3"></i>
                                    <span class="text-light">(021) 1234-5678</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <i class="bi bi-envelope-fill text-warning me-3"></i>
                                    <span class="text-light">info@smkn64jakarta.sch.id</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <i class="bi bi-clock-fill text-warning me-3"></i>
                                    <span class="text-light">Senin - Jumat: 07:00 - 15:00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bagian Bawah Footer -->
        <div class="row g-0">
            <div class="col-12 bg-black py-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p class="mb-0 text-white">&copy; <?= date("Y") ?> SMK Negeri 64 Jakarta. All rights reserved.</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <small class="text-white">Website SMKN 64 Jakarta | Pendidikan Indonesia</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
.bg-primary-dark {
    background: linear-gradient(135deg,rgb(73, 0, 243) 0%, #0b5ed7 100%);
}

.hover-warning:hover {
    color: #ffc107 !important;
    transition: color 0.3s ease;
}

.card.border-warning {
    border: 1px solid #ffc107 !important;
    transition: all 0.3s ease;
}

.card.border-warning:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(255, 193, 7, 0.3);
}

.btn-outline-light:hover {
    background-color: #ffc107;
    border-color: #ffc107;
    color: #000;
}
</style>

<!-- Bootstrap JS (wajib untuk navbar toggle) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
