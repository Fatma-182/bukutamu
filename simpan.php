<?php
include 'config.php';

// Cek apakah form sudah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data dari form
  $nama     = htmlspecialchars(trim($_POST['nama']));
  $instansi = htmlspecialchars(trim($_POST['instansi']));
  $email    = htmlspecialchars(trim($_POST['email']));

  // Simpan ke database
  $query = "INSERT INTO tamu (nama, instansi, email) 
            VALUES ('$nama', '$instansi', '$email')";

  $hasil = mysqli_query($conn, $query);

  // Cek apakah berhasil
  if ($hasil) {
    // Redirect kembali ke form dengan notifikasi
    header("Location: index.php?success=1");
  } else {
    // Tampilkan error jika gagal
    echo "Gagal menyimpan data: " . mysqli_error($conn);
  }
} else {
  // Akses langsung tanpa POST
  echo "Akses tidak sah!";
}
?>