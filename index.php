<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Buku Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #f5f7fa, #c3cfe2);
    }
    .card-form {
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      padding: 30px;
    }
    .footer {
      text-align: center;
      font-size: 14px;
      color: #777;
      margin-top: 50px;
    }
  </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
  <div class="col-md-6 card-form">
    <h3 class="text-center mb-4 text-primary">📘 Buku Tamu - Seminar Digital 2025</h3>

    <!-- ✅ Notifikasi Sukses -->
    <?php if (isset($_GET['success'])): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        ✅ Data berhasil disimpan! Terima kasih telah mengisi buku tamu.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <form action="simpan.php" method="POST">
      <input type="text" name="nama" class="form-control mb-3" placeholder="👤 Nama Lengkap" required>
      <input type="text" name="instansi" class="form-control mb-3" placeholder="🏢 Instansi / Organisasi">
      <input type="email" name="email" class="form-control mb-3" placeholder="📧 Email">
      <button class="btn btn-primary w-100">✅ Simpan</button>
    </form>
    <a href="list.php" class="btn btn-link mt-3 d-block text-center">Lihat Daftar Tamu</a>
  </div>
</div>
<div class="footer">&copy; <?= date('Y'); ?> Buku Tamu Digital • Desain oleh Kamu ✨</div>

<!-- ✅ Tambahkan JavaScript Bootstrap untuk alert dismissible -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</html>