<?php

include 'connect.php';

// SQL sorgusu
$sql = "SELECT id, name, surname, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Kullanıcıları listele
    while ($row = $result->fetch_assoc()) {
        echo "<br>"; "<br>";
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["surname"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Hiç kullanıcı bulunamadı.";
}

// Bağlantıyı kapat
$conn->close();

?>