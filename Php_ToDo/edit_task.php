<?php
session_start();
require 'db.php';

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
$task = $conn->query("SELECT * FROM tasks WHERE id=$id")->fetch_assoc();

if(isset($_POST['update'])){
    $title = $_POST['title'];
    $desc  = $_POST['description'];
    $status = $_POST['status'];

    $stmt = $conn->prepare("UPDATE tasks SET title=?, description=?, status=? WHERE id=?");
    $stmt->bind_param("sssi", $title, $desc, $status, $id);
    $stmt->execute();

    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Görev Düzenle</title>
</head>
<body>

<div class="form-container">
    <h2>Görevi Düzenle</h2>

    <form method="POST">
        <input type="text" name="title" value="<?= $task['title']; ?>" required>
        <textarea name="description"><?= $task['description']; ?></textarea>

        <select name="status">
            <option <?= $task['status']=="Bekliyor" ? "selected":""; ?>>Bekliyor</option>
            <option <?= $task['status']=="Devam Ediyor" ? "selected":""; ?>>Devam Ediyor</option>
            <option <?= $task['status']=="Tamamlandı" ? "selected":""; ?>>Tamamlandı</option>
        </select>

        <button type="submit" name="update">Güncelle</button>
    </form>

    <a href="dashboard.php">Geri dön</a>
</div>

</body>
</html>