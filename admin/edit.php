<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../login.php");
    exit;
}

$page = $_GET['page'];
$file_path = "../pages/$page.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_content = $_POST['content'];
    file_put_contents($file_path, $new_content);
    echo "<p>Konten halaman $page berhasil diperbarui!</p>";
}

$content = file_get_contents($file_path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Halaman</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="edit-container">
        <h2>Edit Halaman <?php echo ucfirst($page); ?></h2>
        <form method="POST">
            <textarea name="content" rows="20"><?php echo htmlspecialchars($content); ?></textarea>
            <button type="submit">Simpan Perubahan</button>
        </form>
        <a href="dashboard.php">Kembali ke Dashboard</a>
    </div>
</body>
</html>
