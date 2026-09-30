<?php
session_start();
require 'db.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
$note = $conn->query("SELECT * FROM notes WHERE id=$id")->fetch_assoc();

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("UPDATE notes SET title=?, content=? WHERE id=?");
    $stmt->bind_param("ssi", $title, $content, $id);
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
    <title>Not Düzenle</title>
</head>

<body>
    <div class="form-container">
        <h2>Not Düzenle</h2>
        <form method="POST">
            <input type="text" name="title" value="<?= $note['title']; ?>" required>
            <textarea name="content" required><?= $note['content']; ?></textarea>
            <button type="submit" name="update">Güncelle</button>
        </form>
        <a href="index.php">Geri Dön</a>
    </div>
</body>

</html>