<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {
  $u = $_POST['username'];
  $p = md5($_POST['password']);
  $cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$u' AND password='$p'");
  if (mysqli_num_rows($cek) > 0) {
    $_SESSION['user'] = $u;
    header("Location: list.php");
  } else {
    $error = "Login gagal! Username atau password salah.";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #f6f9ff, #dfefff);
    }
    .card-login {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      padding: 30px;
    }
    .footer {
      text-align: center;
      font-size: 13px;
      color: #999;
      margin-top: 30px;
    }
  </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
  <div class="col-md-5 card-login">
    <h3 class="text-center text-primary mb-4">🔐 Login Admin Buku Tamu</h3>
    <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <form method="POST">
      <input type="text" name="username" class="form-control mb-3" placeholder="👤 Username" required>
      <input type="password" name="password" class="form-control mb-3" placeholder="🔑 Password" required>
      <button name="login" class="btn btn-primary w-100">Login</button>
    </form>
    <a href="index.php" class="btn btn-link mt-3 w-100 text-center">⬅️ Kembali ke Form Tamu</a>
  </div>
</div>
<div class="footer">&copy; <?= date('Y'); ?> Login Admin Buku Tamu • Desain kamu ✨</div>
</body>
</html>