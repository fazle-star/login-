<?php
$host = "localhost"; // Sesuaikan dengan host di TablePlus
$port = "3306";      // Sesuaikan dengan port
$user = "root";      // Sesuaikan dengan username
$pass = "";  // Sesuaikan dengan kata sandi
$db = "perizinan"; // Sesuaikan dengan nama database

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>