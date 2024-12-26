<?php
$host = "localhost"; 
$user = "root";      // Username MySQL Anda
$pass = "";          // Password MySQL Anda (kosong jika default)
$db   = "users"; // Nama database yang dibuat

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
