<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - SMKN 64 Jakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <style>
    /* Modern Login Styling */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: linear-gradient(135deg, rgb(73, 0, 243) 0%, #0b5ed7 50%, #0056b3 100%);
      font-family: 'Inter', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    /* Animated Background */
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="login" width="50" height="50" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="0" cy="0" r="1" fill="rgba(255,255,255,0.05)"/><circle cx="50" cy="0" r="1" fill="rgba(255,255,255,0.05)"/><circle cx="0" cy="50" r="1" fill="rgba(255,255,255,0.05)"/><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23login)"/></svg>');
      opacity: 0.3;
      animation: float 20s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-20px) rotate(1deg); }
    }

    /* Floating Elements */
    .floating-element {
      position: absolute;
      width: 100px;
      height: 100px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      animation: floatElement 6s ease-in-out infinite;
    }

    .floating-element:nth-child(1) {
      top: 10%;
      left: 10%;
      animation-delay: 0s;
    }

    .floating-element:nth-child(2) {
      top: 20%;
      right: 15%;
      animation-delay: 2s;
    }

    .floating-element:nth-child(3) {
      bottom: 20%;
      left: 15%;
      animation-delay: 4s;
    }

    @keyframes floatElement {
      0%, 100% { transform: translateY(0px) scale(1); }
      50% { transform: translateY(-30px) scale(1.1); }
    }

    /* Login Container */
    .login-container {
      position: relative;
      z-index: 10;
      width: 100%;
      max-width: 450px;
      padding: 0 20px;
    }

    .login-box {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-radius: 25px;
      padding: 3rem 2.5rem;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.2);
      position: relative;
      overflow: hidden;
      animation: slideInUp 0.8s ease-out;
    }

    .login-box::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(115, 0, 243, 0.1) 0%, transparent 70%);
      animation: rotate 20s linear infinite;
    }

    @keyframes slideInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes rotate {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    /* Logo Styling */
    .logo-container {
      text-align: center;
      margin-bottom: 2rem;
      position: relative;
      z-index: 2;
    }

    .logo-container img {
      width: 100px;
      height: 100px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
      animation: logoFloat 3s ease-in-out infinite;
    }

    .logo-container img:hover {
      transform: scale(1.1) rotate(5deg);
      box-shadow: 0 15px 40px rgba(115, 0, 243, 0.3);
    }

    @keyframes logoFloat {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
    }

    /* Title Styling */
    .login-title {
      text-align: center;
      margin-bottom: 2.5rem;
      position: relative;
      z-index: 2;
    }

    .login-title h3 {
      font-size: 2rem;
      font-weight: 800;
      background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 0.5rem;
    }

    .login-title p {
      color: #6c757d;
      font-size: 0.95rem;
      margin-bottom: 0;
    }

    /* Form Styling */
    .form-container {
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
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(10px);
    }

    .form-control:focus {
      border-color: rgb(73, 0, 243);
      box-shadow: 0 0 0 0.2rem rgba(115, 0, 243, 0.25);
      background: rgba(255, 255, 255, 0.95);
    }

    .form-label {
      font-weight: 600;
      color: #495057;
    }

    /* Button Styling */
    .login-btn {
      background: linear-gradient(135deg, rgb(73, 0, 243), #0b5ed7);
      color: white;
      border: none;
      padding: 1rem 2rem;
      border-radius: 15px;
      font-weight: 700;
      font-size: 1.1rem;
      transition: all 0.3s ease;
      width: 100%;
      position: relative;
      overflow: hidden;
    }

    .login-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s ease;
    }

    .login-btn:hover::before {
      left: 100%;
    }

    .login-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(115, 0, 243, 0.4);
      color: white;
    }

    .login-btn:active {
      transform: translateY(-1px);
    }

    /* Alert Styling */
    .alert {
      border-radius: 15px;
      border: none;
      font-weight: 500;
      margin-bottom: 1.5rem;
      position: relative;
      z-index: 2;
      animation: slideInDown 0.5s ease-out;
    }

    @keyframes slideInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .alert-danger {
      background: linear-gradient(135deg, #dc3545, #c82333);
      color: white;
    }

    /* Input Icons */
    .input-group {
      position: relative;
    }

    .input-icon {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: #6c757d;
      z-index: 4;
      pointer-events: none;
      font-size: 1.2rem;
      height: 1em;
      line-height: 1;
    }

    .form-control.with-icon {
      padding-left: 3rem;
    }

    .form-floating > .input-icon {
      height: 1em;
      line-height: 1;
    }

    /* Responsive Design */
    @media (max-width: 576px) {
      .login-box {
        padding: 2rem 1.5rem;
        margin: 1rem;
      }
      
      .login-title h3 {
        font-size: 1.75rem;
      }
      
      .logo-container img {
        width: 80px;
        height: 80px;
      }
    }

    /* Loading Animation */
    .loading {
      display: none;
      width: 20px;
      height: 20px;
      border: 2px solid rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      border-top-color: white;
      animation: spin 1s ease-in-out infinite;
      margin-left: 0.5rem;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }
  </style>
</head>
<body>
  
  <!-- Floating Elements -->
  <div class="floating-element"></div>
  <div class="floating-element"></div>
  <div class="floating-element"></div>

  <div class="login-container">
    <div class="login-box">
      <!-- Logo -->
      <div class="logo-container">
        <img src="../assets/image/kl.jpg" alt="Logo SMK Negeri 64">
      </div>

      <!-- Title -->
      <div class="login-title">
        <h3>Login Admin</h3>
        <p>Masuk ke panel administrasi SMK Negeri 64 Jakarta</p>
      </div>

      <!-- Alert Messages -->
      <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger">
          <i class="bi bi-exclamation-triangle me-2"></i>
          <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
      <?php endif; ?>

      <!-- Login Form -->
      <div class="form-container">
        <form action="login_proses.php" method="POST" id="loginForm">
          <div class="form-floating">
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
            <label for="username">Username</label>
          </div>
          
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>
          
          <button type="submit" class="login-btn">
            <span class="btn-text">
              <i class="bi bi-box-arrow-in-right me-2"></i>Login
            </span>
            <span class="loading"></span>
          </button>
        </form>
      </div>
    </div>
  </div>

  <script>
    // Form submission with loading state
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      const btn = this.querySelector('.login-btn');
      const btnText = btn.querySelector('.btn-text');
      const loading = btn.querySelector('.loading');
      
      // Show loading state
      btnText.style.display = 'none';
      loading.style.display = 'inline-block';
      btn.disabled = true;
      
      // Simulate loading (remove this in production)
      setTimeout(() => {
        btnText.style.display = 'inline';
        loading.style.display = 'none';
        btn.disabled = false;
      }, 2000);
    });

    // Add floating effect to form elements
    document.querySelectorAll('.form-control').forEach(input => {
      input.addEventListener('focus', function() {
        this.parentElement.style.transform = 'translateY(-5px)';
      });
      
      input.addEventListener('blur', function() {
        this.parentElement.style.transform = 'translateY(0)';
      });
    });

    // Add ripple effect to button
    document.querySelector('.login-btn').addEventListener('click', function(e) {
      const ripple = document.createElement('span');
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;
      
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = x + 'px';
      ripple.style.top = y + 'px';
      ripple.classList.add('ripple');
      
      this.appendChild(ripple);
      
      setTimeout(() => {
        ripple.remove();
      }, 600);
    });
  </script>
</body>
</html>
