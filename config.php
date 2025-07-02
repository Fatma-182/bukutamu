<?php
$conn = mysqli_connect("localhost", "root", "", "buku_tamu");
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>