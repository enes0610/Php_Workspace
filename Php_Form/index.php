<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>PHP Form İşlemleri</title>
</head>
<body>

<div class="container">
    <h2>Form İşlemleri & Kullanıcı Girişi</h2>

    <?php if(isset($_SESSION['user'])): ?>
        <p>Hoş geldin, <strong><?= $_SESSION['user']['fullname']; ?></strong></p>
        <a href="dashboard.php" class="btn">Panel</a>
        <a href="logout.php" class="btn danger">Çıkış</a>
    <?php else: ?>
        <a href="register.php" class="btn">Kayıt Ol</a>
        <a href="login.php" class="btn">Giriş Yap</a>
    <?php endif; ?>

</div>

</body>
</html>