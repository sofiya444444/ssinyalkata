<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SinyalKata</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #ffffff;
      color: #000;
    }

    .header {
      background-color: #CDB6E4; /* Warna ungu pastel */
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      display: flex;
      align-items: center;
      font-weight: bold;
      font-size: 1.2rem;
    }

    .logo img {
      height: 24px;
      margin-right: 10px;
    }

    .info-button {
      background-color: white;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-weight: 500;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .info-button:hover {
      background-color: #f0f0f0;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .container-custom {
      padding: 4rem 1rem;
    }

    .text-area h4 {
      color: #6B46C1;
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    .text-area h1 {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 1.5rem;
      line-height: 1.3;
    }

    .text-area p {
      margin-bottom: 2rem;
      line-height: 1.7;
      font-size: 1.1rem;
      color: #444;
    }

    .start-button {
      background-color: #3B49F5;
      color: white;
      padding: 0.75rem 1.75rem;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      font-size: 1.1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 6px rgba(59, 73, 245, 0.3);
    }

    .start-button:hover {
      background-color: #2a38e0;
      transform: translateY(-3px);
      box-shadow: 0 6px 12px rgba(59, 73, 245, 0.4);
    }

    .image-area img {
      width: 100%;
      max-width: 500px;
      height: auto;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .feature-section {
      background-color: #f8f9fa;
      padding: 4rem 0;
      margin-top: 3rem;
    }

    .feature-card {
      background: white;
      border-radius: 15px;
      padding: 2rem;
      text-align: center;
      height: 100%;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .feature-card i {
      font-size: 2.5rem;
      color: #6B46C1;
      margin-bottom: 1.5rem;
    }

    .feature-card h3 {
      color: #3B49F5;
      margin-bottom: 1rem;
    }

    .footer {
      background-color: #333;
      color: white;
      padding: 3rem 0 1.5rem;
    }

    .footer h5 {
      color: #CDB6E4;
      margin-bottom: 1.5rem;
    }

    .footer a {
      color: #ddd;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .footer a:hover {
      color: white;
      text-decoration: underline;
    }

    .social-icons a {
      display: inline-block;
      width: 40px;
      height: 40px;
      background: #444;
      border-radius: 50%;
      text-align: center;
      line-height: 40px;
      margin-right: 10px;
      transition: all 0.3s ease;
    }

    .social-icons a:hover {
      background: #6B46C1;
      transform: translateY(-5px);
    }

    @media (max-width: 768px) {
      .text-area {
        text-align: center;
        margin-bottom: 2rem;
      }
      
      .text-area h1 {
        font-size: 2rem;
      }
      
      .image-area {
        text-align: center;
      }
    }
  </style>
</head>
<body>

  <header class="header">
    <div class="logo">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#6B46C1" viewBox="0 0 24 24">
        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
      </svg>
      SinyalKata
    </div>
    <a href="informasi.php">
      <button class="info-button">Information</button>
    </a>
  </header>

  <div class="container container-custom">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <div class="text-area">
          <h4>Halo!<br> <strong>Selamat Datang di SinyalKata</strong></h4>
          <h1>Bersama, Kita Wujudkan Aksesibilitas untuk Semua</h1>
          <p>Di sini, kami menyediakan dukungan untuk belajar bahasa isyarat bagi penyandang disabilitas agar dapat berdaya dan mandiri. Dengan teknologi terkini, kami hadir untuk mempermudah komunikasi dan pembelajaran.</p>
          <a href="menu.php">
            <button class="start-button">Ayo Mulai Sekarang</button>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="image-area">
          <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?q=80&w=500&auto=format&fit=crop" alt="Ilustrasi Komunikasi Inklusif" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <section class="feature-section">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col-12">
          <h2 class="mb-3">Kenapa Memilih SinyalKata?</h2>
          <p class="lead">Kami menyediakan solusi terbaik untuk pembelajaran bahasa isyarat</p>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="feature-card">
            <i class="bi bi-people-fill"></i>
            <h3>Aksesibel</h3>
            <p>Desain yang ramah untuk semua kalangan, termasuk penyandang disabilitas dengan berbagai kebutuhan khusus.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature-card">
            <i class="bi bi-lightbulb-fill"></i>
            <h3>Inovatif</h3>
            <p>Teknologi AI terkini untuk mengenali gerakan bahasa isyarat dengan akurasi tinggi dan respons cepat.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature-card">
            <i class="bi bi-heart-fill"></i>
            <h3>Gratis</h3>
            <p>Layanan sepenuhnya gratis demi mendukung kesetaraan akses pendidikan untuk semua orang.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <h5>Tentang SinyalKata</h5>
          <p>Platform pembelajaran bahasa isyarat untuk menciptakan komunikasi inklusif dan aksesibel bagi semua kalangan.</p>
          <div class="social-icons mt-3">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-4">
          <h5>Menu</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="index.php">Home</a></li>
            <li class="mb-2"><a href="menu.php">Menu</a></li>
            <li class="mb-2"><a href="gerakan.php">Buat Gerakan</a></li>
            <li class="mb-2"><a href="kamera_otomatis.php">Coba Gerakan</a></li>
            <li class="mb-2"><a href="informasi.php">Informasi</a></li>
          </ul>
        </div>
      
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
       
      </div>
      <hr class="mt-4 mb-4">
      <div class="row">
        <div class="col-12 text-center">
          <p class="mb-0">&copy; 2025 SinyalKata. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS dengan Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</body>
</html>