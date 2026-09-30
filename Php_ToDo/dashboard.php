<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
require 'db.php';

$user_id = $_SESSION['user']['id'];
$tasks = $conn->query("SELECT * FROM tasks WHERE user_id=$user_id ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Görevlerim</title>
</head>
<body>

<div class="container">
    <h2>Görevlerim</h2>
    <a href="add_task.php" class="btn">Görev Ekle</a>
    <a href="logout.php" class="btn danger">Çıkış Yap</a>

    <table>
        <tr>
            <th>Başlık</th>
            <th>Durum</th>
            <th>Tarih</th>
            <th>İşlem</th>
        </tr>

        <?php while($t = $tasks->fetch_assoc()): ?>
        <tr>
            <td><?= $t['title']; ?></td>
            <td><?= $t['status']; ?></td>
            <td><?= $t['created_at']; ?></td>
            <td>
                <a href="edit_task.php?id=<?= $t['id']; ?>">Düzenle</a> |
                <a href="delete_task.php?id=<?= $t['id']; ?>" onclick="return confirm('Silinsin mi?');">Sil</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

</body>
</html>