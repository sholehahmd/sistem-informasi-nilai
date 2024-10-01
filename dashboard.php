<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard Sistem Informasi Nilai</h1>
    <ul>
        <li><a href="siswa.php">Data Siswa</a></li>
        <li><a href="guru.php">Data Guru</a></li>
        <li><a href="mata-pelajaran.php">Data Mata Pelajaran</a></li>
        <li><a href="nilai.php">Data Nilai</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
