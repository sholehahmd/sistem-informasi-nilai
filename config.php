<?php
// Pengaturan koneksi database

// Jika Anda menggunakan layanan hosting PHP seperti Heroku atau 000WebHost, ganti variabel di bawah ini
$host = "localhost";   // Server hosting database, biasanya "localhost" untuk server lokal atau IP hosting
$user = "root";        // Username database (sesuaikan dengan hosting)
$password = "";        // Password database (sesuaikan dengan hosting)
$dbname = "sistem_informasi_nilai"; // Nama database yang Anda buat

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
