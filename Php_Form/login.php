<?php
session_start();
require 'db.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 1){
        $user = $result->fetch_assoc();

        if(password_verify($password, $user['password'])){
            $_SESSION['user'] = $user;
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Şifre hatalı!";
        }
    } else {
        $error = "Email bulunamadı!";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Giriş Yap</title>
</head>
<body>

<div class="form-container">
    <h2>Kullanıcı Girişi</h2>

    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
    <?php if(isset($_GET['success'])) echo "<p class='success'>Kayıt başarılı! Giriş yapabilirsiniz.</p>"; ?>

    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Şifre" required>
        <button type="submit" name="login">Giriş Yap</button>
    </form>

    <a href="register.php">Hesabım yok</a>
</div>

</body>
</html>