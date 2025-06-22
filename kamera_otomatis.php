<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Deteksi Gerakan Otomatis</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      text-align: center;
      padding: 2rem;
    }
    h1 {
      color: #4B0082;
      margin-bottom: 1rem;
    }
    #prediksi {
      font-size: 2rem;
      font-weight: bold;
      margin-top: 1rem;
      color: #1B1FAF;
    }
    video {
      width: 70%;
      max-width: 500px;
      border-radius: 20px;
      margin-top: 2rem;
    }
    button {
      margin-top: 2rem;
      padding: 0.75rem 1.5rem;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      background-color: #1B1FAF;
      color: white;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <h1>Deteksi Gerakan Tangan</h1>
  <video id="video" autoplay></video>
  <div id="prediksi">Menunggu gerakan...</div>
  <button onclick="history.back()">Kembali</button>

  <script>
    const video = document.getElementById('video');
    const prediksi = document.getElementById('prediksi');

    // Aktifkan kamera
    navigator.mediaDevices.getUserMedia({ video: true })
      .then(stream => {
        video.srcObject = stream;
      })
      .catch(err => {
        alert('Tidak bisa mengakses kamera: ' + err.message);
      });

    // Simulasi deteksi otomatis (ganti ini dengan model ML asli)
    function mulaiDeteksi() {
      // Di sini kamu bisa pakai TensorFlow.js, OpenCV.js, atau panggil API
      const hurufContoh = ['A', 'B', 'C', 'D', 'E'];
      const huruf = hurufContoh[Math.floor(Math.random() * hurufContoh.length)];
      prediksi.innerText = `Huruf terdeteksi: ${huruf}`;
    }

    // Panggil mulaiDeteksi setiap 2 detik
    setInterval(mulaiDeteksi, 2000);
  </script>

</body>
</html>
