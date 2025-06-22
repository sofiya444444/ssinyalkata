<?php
// Koneksi ke database
$host = "localhost";
$user = "root";        // ganti kalau username MySQL kamu beda
$pass = "";            // ganti kalau MySQL kamu pakai password
$db   = "sinyalkata"; // GANTI dengan nama database kamu

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil huruf dari request
$huruf = $_POST['huruf'] ?? '';

// Insert ke tabel
$sql = "INSERT INTO data_huruf (huruf) VALUES ('$huruf')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal: " . $conn->error;
}

$conn->close();
?>
