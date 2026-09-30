<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Görev Takip Sistemi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Görev Takip Sistemi</h2>

    <?php if(isset($_SESSION['user'])): ?>
        <p>Hoş geldin, <b><?= $_SESSION['user']['fullname']; ?></b></p>
        <a href="dashboard.php" class="btn">Görevlerim</a>
        <a href="logout.php" class="btn danger">Çıkış</a>
    <?php else: ?>
        <a href="login.php" class="btn">Giriş Yap</a>
        <a href="register.php" class="btn">Kayıt Ol</a>
    <?php endif; ?>
</div>

</body>
</html>