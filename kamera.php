<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Deteksi Gerakan</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      text-align: center;
      padding: 2rem;
    }
    h1 {
      color: #4B0082;
    }
    .button-container {
      margin-top: 50px;
    }
    button {
      padding: 1rem 2rem;
      margin: 1rem;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      background-color: #1A1280;
      color: white;
      cursor: pointer;
    }
    video {
      width: 60%;
      max-width: 500px;
      border-radius: 20px;
      margin-top: 2rem;
    }
  </style>
</head>
<body>

  <h1 id="judul-huruf">Huruf: </h1>
  <video id="video" autoplay></video>

  <div class="button-container">
    <button onclick="simpanData()">SIMPAN</button>
    <button onclick="history.back()">KEMBALI</button>
  </div>

  <script>
    // Ambil huruf dari URL
    const params = new URLSearchParams(window.location.search);
    const huruf = params.get('huruf') || '';
    document.getElementById("judul-huruf").innerText += huruf;
  
    // Aktifkan kamera
    const video = document.getElementById('video');
    navigator.mediaDevices.getUserMedia({ video: true })
      .then(stream => {
        video.srcObject = stream;
      })
      .catch(err => {
        alert('Tidak bisa mengakses kamera: ' + err.message);
      });
  
    // Kirim huruf ke server saat tombol SIMPAN diklik
    function simpanData() {
        console.log("Huruf yang akan dikirim:", huruf);
      fetch('simpan.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'huruf=' + huruf
      })
      .then(response => response.text())
      .then(data => {
        alert(data); // tampilkan pesan dari PHP
      })
      .catch(error => {
        alert('Gagal menyimpan data: ' + error);
      });
    }
  </script>
  

</body>
</html>
