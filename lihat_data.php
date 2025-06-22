<?php
$koneksi = new mysqli("localhost", "root", "", "sinyalkata");
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

$query = "SELECT * FROM data_huruf ORDER BY waktu DESC";
$result = $koneksi->query($query);
if (!$result) {
  die("Query error: " . $koneksi->error);
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Huruf</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9f9ff;
      color: #333;
      padding: 2rem;
    }

    h1 {
      text-align: center;
      color: #4B0082;
      margin-bottom: 2rem;
    }

    table {
      width: 90%;
      margin: 0 auto;
      border-collapse: collapse;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 1rem;
      border-bottom: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color: #CDB6E4;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f1f1f1;
    }

    a.back-btn {
      display: inline-block;
      margin: 2rem auto;
      text-align: center;
      padding: 0.8rem 1.5rem;
      background-color: #6a5acd;
      color: white;
      text-decoration: none;
      font-weight: bold;
      border-radius: 10px;
      transition: background 0.3s;
    }

    a.back-btn:hover {
      background-color: #5a4db3;
    }

    .center {
      text-align: center;
    }
  </style>
</head>
<body>

  <h1>Data Huruf yang Tersimpan</h1>

  <table>
    <tr>
      <th>No</th>
      <th>Huruf</th>
      <th>Waktu</th>
    </tr>
    <?php
    $no = 1;
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $no++ . "</td>";
      echo "<td>" . htmlspecialchars($row['huruf']) . "</td>";
      echo "<td>" . $row['waktu'] . "</td>";
      echo "</tr>";
    }
    ?>
  </table>

  <div class="center">
    <a class="back-btn" href="menu.php">← Kembali ke Menu</a>
  </div>

</body>
</html>
