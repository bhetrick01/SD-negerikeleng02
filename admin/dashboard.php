<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Selamat datang, Admin!</h1>
        <ul>
            <li><a href="edit.php?page=home">Edit Halaman Home</a></li>
            <li><a href="edit.php?page=profil">Edit Halaman Profil</a></li>
            <li><a href="edit.php?page=data">Edit Halaman Data</a></li>
            <li><a href="edit.php?page=galeri">Edit Halaman Galeri</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</body>
</html>
