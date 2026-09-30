<?php
session_start();
require 'db.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_SESSION['user']['id'];

    $stmt = $conn->prepare("INSERT INTO notes(user_id,title,content) VALUES(?,?,?)");
    $stmt->bind_param("iss", $user_id, $title, $content);
    $stmt->execute();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Not Ekle</title>
</head>

<body>
    <div class="form-container">
        <h2>Not Ekle</h2>
        <form method="POST">
            <input type="text" name="title" placeholder="Başlık" required>
            <textarea name="content" placeholder="İçerik" required></textarea>
            <button type="submit" name="add">Ekle</button>
        </form>
        <a href="index.php">Geri Dön</a>
    </div>
</body>

</html>