<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>location.href('login.php')</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo, <?= htmlspecialchars($_SESSION['username']); ?></h2>
    <a href="../actions/logout.php">Logout</a>
</body>
</html>