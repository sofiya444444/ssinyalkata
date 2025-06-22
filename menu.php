<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Halaman Gerakan - SinyalKata</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #ffffff;
      color: #000;
      line-height: 1.6;
    }

    .header {
      background: linear-gradient(135deg, #CDB6E4, #A78BCA);
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .logo {
      display: flex;
      align-items: center;
      font-weight: bold;
      font-size: 1.5rem;
      color: #2c2250;
    }

    .logo img {
      height: 36px;
      margin-right: 12px;
    }

    .nav-menu {
      display: flex;
      gap: 1.8rem;
      align-items: center;
    }

    .nav-menu a {
      text-decoration: none;
      font-weight: 600;
      color: #2c2250;
      transition: all 0.3s ease;
      padding: 0.3rem 0.5rem;
      border-radius: 5px;
    }

    .nav-menu a:hover {
      background-color: rgba(255, 255, 255, 0.3);
    }

    .nav-menu .info-btn {
      background-color: white;
      padding: 0.5rem 1.5rem;
      border-radius: 25px;
      border: none;
      font-weight: 600;
      color: #1B1FAF;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .nav-menu .info-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
      background-color: #f0f0ff;
    }

    .content {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 3rem 2rem;
      gap: 3rem;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
    }

    .card {
      width: 380px;
      text-align: center;
      margin-bottom: 2rem;
      transition: transform 0.3s ease;
      border-radius: 15px;
      overflow: hidden;
      background: white;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .card-img-container {
      width: 100%;
      height: 240px;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      position: relative;
    }

    .card-img-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .card:hover .card-img-container img {
      transform: scale(1.05);
    }

    .card .btn {
      background-color: #1B1FAF;
      color: white;
      padding: 1rem;
      font-size: 1.2rem;
      font-weight: bold;
      border: none;
      width: 100%;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .card .btn:hover {
      background-color: #0E1160;
    }

    .card .btn.blue {
      background-color: #5A64F3;
    }

    .card .btn.blue:hover {
      background-color: #3d46d1;
    }

    .card .desc {
      padding: 1.5rem;
      color: #444;
      font-size: 1.1rem;
      background: white;
    }

    .section-title {
      text-align: center;
      margin: 2rem auto 1rem;
      font-size: 2.2rem;
      color: #2c2250;
      max-width: 800px;
      padding: 0 1rem;
    }

    .section-subtitle {
      text-align: center;
      color: #666;
      margin-bottom: 3rem;
      max-width: 800px;
      margin: 0 auto 3rem;
      padding: 0 1rem;
      font-size: 1.1rem;
    }

    @media (max-width: 768px) {
      .content {
        flex-direction: column;
        align-items: center;
        padding: 2rem 1rem;
        gap: 2rem;
      }
      
      .header {
        padding: 1rem;
        justify-content: center;
      }
      
      .nav-menu {
        margin-top: 1rem;
      }
      
      .card {
        width: 100%;
        max-width: 400px;
      }
    }
  </style>
</head>
<body>

  <header class="header">
    <div class="logo">
      <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20ZM14.59 8.59L16 10L12 14L8 10L9.41 8.59L12 11.17L14.59 8.59Z" fill="#2c2250"/>
      </svg>
      SinyalKata
    </div>
    <div class="nav-menu">
      <a href="index.php">Home</a>
      <a href="menu.php">Menu</a>
      <a href="informasi.php"><button class="info-btn">Information</button></a>
    </div>
  </header>

  <h1 class="section-title">Gerakan Bahasa Isyarat</h1>
  <p class="section-subtitle">Temukan alat dan fitur untuk membuat dan mencoba gerakan bahasa isyarat</p>

  <section class="content">
    <!-- Buat Gerakan -->
    <div class="card">
      <div class="card-img-container">
        <svg width="240" height="240" viewBox="0 0 240 240" xmlns="http://www.w3.org/2000/svg">
          <rect width="240" height="240" fill="#f0f0ff" />
          <circle cx="120" cy="100" r="30" fill="#5A64F3" opacity="0.8" />
          <path d="M90,140 L150,140 L150,190 C150,205 135,220 120,220 C105,220 90,205 90,190 L90,140 Z" fill="#CDB6E4" />
          <circle cx="80" cy="80" r="10" fill="#333" />
          <circle cx="160" cy="80" r="10" fill="#333" />
          <path d="M100,110 Q120,130 140,110" stroke="#333" stroke-width="3" fill="none" />
        </svg>
      </div>
      <a href="gerakan.php">
        <button class="btn">Buat Gerakan</button>
      </a>
      <div class="desc">
        Ciptakan sesuatu yang baru, sesuaikan kebutuhanmu, dan jadikan aksesibilitas lebih mudah.
      </div>
    </div>

    <!-- Coba Gerakan -->
    <div class="card">
      <div class="card-img-container">
        <svg width="240" height="240" viewBox="0 0 240 240" xmlns="http://www.w3.org/2000/svg">
          <rect width="240" height="240" fill="#f0f0ff" />
          <circle cx="120" cy="100" r="40" fill="#CDB6E4" opacity="0.8" />
          <path d="M80,140 L160,140 L160,190 C160,205 145,220 120,220 C95,220 80,205 80,190 L80,140 Z" fill="#5A64F3" />
          <circle cx="90" cy="80" r="15" fill="#333" />
          <circle cx="150" cy="80" r="15" fill="#333" />
          <path d="M80,120 Q120,140 160,120" stroke="#333" stroke-width="4" fill="none" />
          <rect x="100" y="160" width="40" height="30" rx="5" fill="#1B1FAF" />
        </svg>
      </div>
      <a href="kamera_otomatis.php">
        <button class="btn blue">Coba Gerakan</button>
      </a>
      <div class="desc">
        Jelajahi, uji, dan rasakan pengalaman inklusif yang telah kami sediakan untukmu.
      </div>
    </div>
  </section>

</body>
</html>