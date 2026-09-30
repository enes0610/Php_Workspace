<?php
$conn = new mysqli("localhost", "root", "", "php_note");

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>