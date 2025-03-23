<?php
$host = "localhost"; // Ganti jika database ada di server lain
$user = "root"; // Ganti dengan username database MySQL kamu
$pass = ""; // Isi password MySQL kamu jika ada
$dbname = "sistem_login"; // Nama database yang sudah dibuat

// Membuat koneksi ke MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
