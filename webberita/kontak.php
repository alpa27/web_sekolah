<?php
include 'includes/koneksi.php';
include 'includes/header.php';
?>

<style>
/* Modern Contact Page Styling */
.contact-hero {
    background: linear-gradient(135deg, rgb(73, 0, 243) 0%, #0b5ed7 50%, #0056b3 100%);
    padding: 6rem 0;
    position: relative;
    overflow: hidden;
}

.contact-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="contact" width="40" height="40" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23contact)"/></svg>');
    opacity: 0.3;
}

.contact-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: white;
}

.contact-title {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.contact-subtitle {
    font-size: 1.3rem;
    opacity: 0.9;
    margin-bottom: 2rem;
}

/* Contact Info Section */
.contact-info-section {
    padding: 6rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
}

.contact-info-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100px;
    background: linear-gradient(135deg, rgb(73, 0, 243) 0%, #0b5ed7 100%);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 50%);
}

.contact-card {
    background: white;
    border-radius: 20px;
    padding: 3rem;
    margin-bottom: 2rem;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.contact-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 100%;
    background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
}

.contact-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 60px rgba(0,0,0,0.15);
}

.contact-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 2rem;
    font-size: 2rem;
    color: white;
    background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
}

.contact-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 2rem;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 15px;
    transition: all 0.3s ease;
}

.contact-item:hover {
    background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
    color: white;
    transform: translateX(10px);
}

.contact-item-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1.5rem;
    background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
    color: white;
    flex-shrink: 0;
}

.contact-item-content h5 {
    margin-bottom: 0.5rem;
    font-weight: 700;
}

.contact-item-content p {
    margin-bottom: 0;
    opacity: 0.9;
}

/* Form Section */
.contact-form-section {
    padding: 6rem 0;
    background: white;
}

.form-card {
    background: white;
    border-radius: 20px;
    padding: 3rem;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    position: relative;
    overflow: hidden;
}

.form-card::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(115, 0, 243, 0.05) 0%, transparent 70%);
    animation: rotate 20s linear infinite;
}

.form-content {
    position: relative;
    z-index: 2;
}

.form-floating {
    margin-bottom: 1.5rem;
}

.form-control {
    border-radius: 15px;
    border: 2px solid #e9ecef;
    padding: 1rem 1.25rem;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: rgb(73, 0, 243);
    box-shadow: 0 0 0 0.2rem rgba(115, 0, 243, 0.25);
}

.form-label {
    font-weight: 600;
    color: #495057;
}

.submit-btn {
    background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 25px;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    width: 100%;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(115, 0, 243, 0.3);
    color: white;
}

/* Map Section */
.map-section {
    padding: 6rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.map-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.map-header {
    background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
    color: white;
    padding: 2rem;
    text-align: center;
}

.map-header h4 {
    margin-bottom: 0;
    font-weight: 700;
}

.map-container {
    padding: 0;
}

.map-iframe {
    width: 100%;
    height: 400px;
    border: none;
    border-radius: 0 0 20px 20px;
}

/* Social Media Section */
.social-section {
    padding: 4rem 0;
    background: white;
}

.social-card {
    background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
    color: white;
    border-radius: 20px;
    padding: 3rem;
    text-align: center;
    margin-bottom: 2rem;
    position: relative;
    overflow: hidden;
}

.social-card::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    animation: rotate 20s linear infinite;
}

.social-content {
    position: relative;
    z-index: 2;
}

.social-icon {
    font-size: 3rem;
    margin-bottom: 1.5rem;
    opacity: 0.9;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 2rem;
}

.social-link {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.social-link:hover {
    background: rgba(255,255,255,0.3);
    transform: translateY(-3px);
    color: white;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .contact-title {
        font-size: 2.5rem;
    }
    
    .contact-card {
        padding: 2rem;
    }
    
    .form-card {
        padding: 2rem;
    }
    
    .contact-item {
        padding: 1rem;
    }
    
    .contact-item-icon {
        width: 40px;
        height: 40px;
        margin-right: 1rem;
    }
}
</style>

<!-- Hero Section -->
<section class="contact-hero">
    <div class="container">
        <div class="contact-hero-content">
            <h1 class="contact-title">Hubungi Kami</h1>
            <p class="contact-subtitle">Kami siap membantu dan menjawab pertanyaan Anda</p>
        </div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="contact-info-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-info-circle"></i>
                    </div>
                    <h4 class="mb-4 fw-bold text-primary">Informasi Kontak</h4>
                    
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="contact-item-content">
                            <h5>Alamat</h5>
                            <p>Jl. Mpok Nori, RT.9/RW.3, Bambu Apus, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13890</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="contact-item-content">
                            <h5>Telepon</h5>
                            <p>08978891895 (Hilal)<br>081212001521 (Agus)</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="contact-item-content">
                            <h5>Email</h5>
                            <p>info@smkn64-jkt.sch.id<br>info.smkn64jkt@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div class="contact-item-content">
                            <h5>Jam Operasional</h5>
                            <p>Senin - Jumat: 07:00 - 15:00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="form-card">
                    <div class="form-content">
                        <h4 class="mb-4 fw-bold text-primary">Kirim Pesan</h4>
                        <form id="contactForm">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                                <label for="nama">Nama Lengkap</label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Email" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subjek" placeholder="Subjek" required>
                                <label for="subjek">Subjek</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="pesan" placeholder="Pesan" style="height: 120px" required></textarea>
                                <label for="pesan">Pesan</label>
                            </div>
                            <button type="submit" class="submit-btn">
                                <i class="bi bi-send me-2"></i>Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Media Section -->
<section class="social-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="social-card">
                    <div class="social-content">
                        <div class="social-icon">
                            <i class="bi bi-share"></i>
                        </div>
                        <h4 class="mb-3 fw-bold">Ikuti Kami di Media Sosial</h4>
                        <p class="mb-0">Dapatkan informasi terbaru dan terhubung dengan komunitas SMK Negeri 64 Jakarta</p>
                        
                        <div class="social-links">
                            <a href="#" class="social-link">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="bi bi-youtube"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="bi bi-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="container">
        <div class="map-card">
            <div class="map-header">
                <h4><i class="bi bi-geo-alt me-2"></i>Lokasi Kami</h4>
            </div>
            <div class="map-container">
                <iframe class="map-iframe" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6666666666667!2d106.9!3d-6.2!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMDAuMCJTIDEwNsKwNTQnMDAuMCJF!5e0!3m2!1sen!2sid!4v1234567890" 
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = {
        nama: document.getElementById('nama').value,
        email: document.getElementById('email').value,
        subjek: document.getElementById('subjek').value,
        pesan: document.getElementById('pesan').value
    };
    
    // Show success message (you can replace this with actual form submission)
    alert('Terima kasih! Pesan Anda telah terkirim. Kami akan segera menghubungi Anda.');
    
    // Reset form
    this.reset();
});
</script>

<?php include 'includes/footer.php'; ?>
