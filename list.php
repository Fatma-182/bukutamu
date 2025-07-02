<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}
include 'config.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #e8f0ff, #fff);
    }
    .table-container {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    footer {
      text-align: center;
      font-size: 14px;
      color: #888;
      margin-top: 50px;
    }
  </style>
</head>
<body>
<div class="container mt-5">
  <div class="table-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>📋 Daftar Tamu</h2>
      <div>
        <span class="me-3">👤 <?= $_SESSION['user']; ?></span>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-hover align-middle">
        <thead class="table-primary">
          <tr>
            <th>Nama</th>
            <th>Instansi</th>
            <th>Email</th>
            <th>Waktu</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $q = mysqli_query($conn, "SELECT * FROM tamu ORDER BY waktu DESC");
          if (!$q) {
            echo "<tr><td colspan='4'>Query error: " . mysqli_error($conn) . "</td></tr>";
          } else {
            while ($d = mysqli_fetch_array($q)) {
              echo "<tr>
                      <td>{$d['nama']}</td>
                      <td>{$d['instansi']}</td>
                      <td>{$d['email']}</td>
                      <td>{$d['waktu']}</td>
                    </tr>";
            }
          }
          ?>
        </tbody>
      </table>
    </div>

    <a href="index.php" class="btn btn-outline-secondary mt-3">⬅️ Kembali ke Form</a>
  </div>
</div>
<footer>&copy; <?= date('Y'); ?> Buku Tamu Digital • Desain oleh Kamu ✨</footer>
</body>
</html>