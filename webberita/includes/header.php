<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Website Berita Sekolah</title>

  <!-- Google Fonts (Modern) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* Modern Header Styling */
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8f9fa;
      overflow-x: hidden;
    }

    /* Ultra Modern Navbar */
    .navbar {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.85)) !important;
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      padding: 1rem 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      transition: all 0.3s ease;
    }

    .navbar::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      animation: shimmer 3s infinite;
    }

    @keyframes shimmer {
      0% { left: -100%; }
      100% { left: 100%; }
    }

    /* Brand Styling */
    .navbar-brand {
      font-weight: 800;
      font-size: 1.8rem;
      background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      display: flex;
      align-items: center;
      gap: 1rem;
      position: relative;
      transition: all 0.3s ease;
    }

    .navbar-brand::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0;
      height: 3px;
      background: linear-gradient(90deg, rgb(73, 0, 243), #0b5ed7);
      transition: width 0.5s ease;
    }

    .navbar-brand:hover::after {
      width: 100%;
    }

    .navbar-brand img {
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
      transition: all 0.4s ease;
      filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
    }

    .navbar-brand:hover img {
      transform: scale(1.1) rotate(5deg);
      box-shadow: 0 8px 25px rgba(115, 0, 243, 0.3);
    }

    /* Navigation Links */
    .navbar-nav {
      gap: 0.5rem;
    }

    .navbar-nav .nav-link {
      position: relative;
      font-weight: 600;
      font-size: 1rem;
      color: #2c3e50 !important;
      padding: 1rem 1.5rem;
      border-radius: 16px;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      margin: 0 0.25rem;
      letter-spacing: 0.5px;
      overflow: hidden;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .navbar-nav .nav-link::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
      transition: left 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      z-index: -1;
    }

    .navbar-nav .nav-link::after {
      content: '';
      position: absolute;
      bottom: 8px;
      left: 50%;
      width: 0;
      height: 3px;
      background: linear-gradient(90deg, #ffc107, #ff6b35);
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      transform: translateX(-50%);
      border-radius: 2px;
      box-shadow: 0 2px 8px rgba(255, 193, 7, 0.4);
    }

    .navbar-nav .nav-link:hover {
      color: #fff !important;
      font-weight: 700;
      transform: translateY(-4px) scale(1.05);
      box-shadow: 0 8px 25px rgba(115, 0, 243, 0.4);
      border-color: rgba(115, 0, 243, 0.3);
    }

    .navbar-nav .nav-link:hover::before {
      left: 0;
    }

    .navbar-nav .nav-link:hover::after {
      width: 70%;
    }

    .navbar-nav .nav-link.active {
      color: #fff !important;
      font-weight: 800;
      box-shadow: 0 12px 35px rgba(115, 0, 243, 0.5);
      border-color: rgba(115, 0, 243, 0.5);
      transform: translateY(-2px);
    }

    .navbar-nav .nav-link.active::before {
      left: 0;
    }

    .navbar-nav .nav-link.active::after {
      width: 90%;
      background: #ffc107;
      box-shadow: 0 4px 15px rgba(255, 193, 7, 0.6);
    }

    /* Mobile Toggler */
    .navbar-toggler {
      border: none;
      padding: 0.75rem;
      border-radius: 12px;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .navbar-toggler:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 15px rgba(115, 0, 243, 0.3);
    }

    .navbar-toggler:focus {
      box-shadow: 0 0 0 0.3rem rgba(115, 0, 243, 0.25);
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(115, 0, 243, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2.5' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      transition: all 0.3s ease;
    }

    .navbar-toggler:hover .navbar-toggler-icon {
      transform: scale(1.1);
    }

    /* Container Styling */
    .container {
      max-width: 1200px;
    }

    main.container {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .navbar {
        padding: 0.75rem 0;
      }
      
      .navbar-brand {
        font-size: 1.4rem;
      }
      
      .navbar-nav .nav-link {
        padding: 0.75rem 1rem;
        margin: 0.25rem 0;
        text-align: center;
      }
      
      .navbar-nav {
        gap: 0.25rem;
        padding: 1rem 0;
      }
    }

    @media (max-width: 576px) {
      .navbar-brand {
        font-size: 1.2rem;
      }
      
      .navbar-brand img {
        height: 35px !important;
      }
    }

    /* Scroll Effect */
    .navbar.scrolled {
      background: rgba(255, 255, 255, 0.98) !important;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    /* Animation for nav items */
    .navbar-nav .nav-item {
      animation: fadeInDown 0.6s ease-out;
    }

    .navbar-nav .nav-item:nth-child(1) { animation-delay: 0.1s; }
    .navbar-nav .nav-item:nth-child(2) { animation-delay: 0.2s; }
    .navbar-nav .nav-item:nth-child(3) { animation-delay: 0.3s; }
    .navbar-nav .nav-item:nth-child(4) { animation-delay: 0.4s; }
    .navbar-nav .nav-item:nth-child(5) { animation-delay: 0.5s; }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Floating effect for brand */
    .navbar-brand {
      animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-5px); }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="/webberita/index.php">
        <img src="/webberita/assets/image/logo.png" alt="Logo SMK Negeri 64" height="45" class="me-3">
        <span>SMK Negeri 64</span>
      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="/webberita/index.php">
              <span class="nav-text">
                <i class="bi bi-house-door me-1"></i>Beranda
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'profil.php' ? 'active' : '' ?>" href="/webberita/profil.php">
              <span class="nav-text">
                <i class="bi bi-building me-1"></i>Profil Sekolah
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'berita.php' ? 'active' : '' ?>" href="/webberita/berita.php">
              <span class="nav-text">
                <i class="bi bi-newspaper me-1"></i>Berita
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'kontak.php' ? 'active' : '' ?>" href="/webberita/kontak.php">
              <span class="nav-text">
                <i class="bi bi-envelope me-1"></i>Kontak
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : '' ?>" href="/webberita/admin/login.php">
              <span class="nav-text">
                <i class="bi bi-person-gear me-1"></i>Admin
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container mt-4">

  <script>
    // Scroll effect for navbar
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Add hover sound effect (optional)
    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
      link.addEventListener('mouseenter', function() {
        // You can add a subtle sound effect here if desired
        this.style.transform = 'translateY(-4px) scale(1.05)';
      });
      
      link.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
      });
    });
  </script>

