<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user']['id'];
$notes = $conn->query("SELECT * FROM notes WHERE user_id=$user_id ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Notlarım</title>
</head>

<body>
    <div class="container">
        <h2>Notlarım</h2>
        <a href="add_note.php" class="btn">+ Not Ekle</a>
        <a href="logout.php" class="btn danger" style="float:right;">Çıkış Yap</a>

        <table>
            <tr>
                <th>Başlık</th>
                <th>İçerik</th>
                <th>Tarih</th>
                <th>İşlem</th>
            </tr>
            <?php while ($note = $notes->fetch_assoc()): ?>
                <tr>
                    <td><?= $note['title']; ?></td>
                    <td><?= $note['content']; ?></td>
                    <td><?= $note['created_at']; ?></td>
                    <td>
                        <a href="edit_note.php?id=<?= $note['id']; ?>">Düzenle</a> |
                        <a href="delete_note.php?id=<?= $note['id']; ?>" onclick="return confirm('Silinsin mi?');">Sil</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>