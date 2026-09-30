<?php
session_start();
require 'db.php';

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}

if(isset($_POST['add'])){
    $title = $_POST['title'];
    $desc  = $_POST['description'];
    $user_id = $_SESSION['user']['id'];

    $stmt = $conn->prepare("INSERT INTO tasks(user_id,title,description) VALUES(?,?,?)");
    $stmt->bind_param("iss", $user_id, $title, $desc);
    $stmt->execute();

    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Görev Ekle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Görev Ekle</h2>

    <form method="POST">
        <input type="text" name="title" placeholder="Görev Başlığı" required>
        <textarea name="description" placeholder="Açıklama"></textarea>
        <button type="submit" name="add">Ekle</button>
    </form>

    <a href="dashboard.php">Geri dön</a>
</div>

</body>
</html>