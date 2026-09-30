<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Panel</title>
</head>
<body>

<div class="container">
    <h2>Hoş Geldin, <?= $_SESSION['user']['fullname']; ?>!</h2>

    <p>Burası sadece giriş yapan kullanıcıların görebileceği bir paneldir.</p>

    <a href="logout.php" class="btn danger">Çıkış Yap</a>
</div>

</body>
</html>