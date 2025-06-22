<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pilih Alfabet & Angka</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffffff;
      text-align: center;
      padding: 2rem;
    }

    .header {
      background-color: #CDB6E4;
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

    .nav-buttons a {
      margin-left: 1rem;
      text-decoration: none;
      color: black;
      font-weight: bold;
      padding: 0.5rem 1rem;
      border-radius: 15px;
    }

    .nav-buttons .info {
      background-color: white;
    }

    h1 {
      font-size: 1.8rem;
      color: #3b2f73;
      margin: 2rem 0;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.1);
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(60px, 1fr));
      gap: 1rem;
      max-width: 600px;
      margin: auto;
    }

    .grid a {
      display: inline-block;
      background-color: #3B49F5;
      color: white;
      font-weight: bold;
      padding: 1rem;
      border-radius: 12px;
      font-size: 1.2rem;
      text-decoration: none;
      transition: background 0.3s;
      box-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }

    .grid a:hover {
      background-color: #2f3cd4;
    }
  </style>
</head>
<body>

  <div class="header">
    <div class="logo">
      <img src="logo.png" alt="Logo" />
      SinyalKata
    </div>
    <div class="nav-buttons">
      <a href="index.php">Home</a>
      <a href="menu.php">Menu</a>
      <a href="informasi.php" class="info">Information</a>
    </div>
  </div>

  <h1>Pilih Alfabet & Angka</h1>

  <div class="grid">
    <!-- Huruf A-Z -->
    <a href="kamera.php?huruf=A">A</a>
    <a href="kamera.php?huruf=B">B</a>
    <a href="kamera.php?huruf=C">C</a>
    <a href="kamera.php?huruf=D">D</a>
    <a href="kamera.php?huruf=E">E</a>
    <a href="kamera.php?huruf=F">F</a>
    <a href="kamera.php?huruf=G">G</a>
    <a href="kamera.php?huruf=H">H</a>
    <a href="kamera.php?huruf=I">I</a>
    <a href="kamera.php?huruf=J">J</a>
    <a href="kamera.php?huruf=K">K</a>
    <a href="kamera.php?huruf=L">L</a>
    <a href="kamera.php?huruf=M">M</a>
    <a href="kamera.php?huruf=N">N</a>
    <a href="kamera.php?huruf=O">O</a>
    <a href="kamera.php?huruf=P">P</a>
    <a href="kamera.php?huruf=Q">Q</a>
    <a href="kamera.php?huruf=R">R</a>
    <a href="kamera.php?huruf=S">S</a>
    <a href="kamera.php?huruf=T">T</a>
    <a href="kamera.php?huruf=U">U</a>
    <a href="kamera.php?huruf=V">V</a>
    <a href="kamera.php?huruf=W">W</a>
    <a href="kamera.php?huruf=X">X</a>
    <a href="kamera.php?huruf=Y">Y</a>
    <a href="kamera.php?huruf=Z">Z</a>
  
    <!-- Angka 0-9 -->
    <a href="kamera.php?huruf=0">0</a>
    <a href="kamera.php?huruf=1">1</a>
    <a href="kamera.php?huruf=2">2</a>
    <a href="kamera.php?huruf=3">3</a>
    <a href="kamera.php?huruf=4">4</a>
    <a href="kamera.php?huruf=5">5</a>
    <a href="kamera.php?huruf=6">6</a>
    <a href="kamera.php?huruf=7">7</a>
    <a href="kamera.php?huruf=8">8</a>
    <a href="kamera.php?huruf=9">9</a>
  </div>

  <div style="margin-top: 2rem;">
    <a href="lihat_data.php" style="
      display: inline-block;
      background-color: #6a5acd;
      color: white;
      padding: 1rem 2rem;
      text-decoration: none;
      font-weight: bold;
      border-radius: 12px;
      box-shadow: 2px 2px 4px rgba(0,0,0,0.1);
      transition: background 0.3s;
    ">Lihat Data</a>
  </div>  

</body>
</html>
