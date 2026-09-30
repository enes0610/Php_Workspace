<?php
require 'db.php';

if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users(fullname,email,password) VALUES(?,?,?)");
    $stmt->bind_param("sss", $fullname, $email, $password);

    if ($stmt->execute()) {
        header("Location: login.php?registered=1");
        exit;
    } else {
        $error = "Email zaten kayıtlı!";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Kayıt Ol</title>
</head>

<body>
    <div class="form-container">
        <h2>Kayıt Ol</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <input type="text" name="fullname" placeholder="Ad Soyad" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Şifre" required>
            <button type="submit" name="register">Kayıt Ol</button>
        </form>
        <a href="login.php">Zaten hesabım var</a>
    </div>
</body>

</html>