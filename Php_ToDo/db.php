<?php
$conn = new mysqli("localhost", "root", "", "php_todo");

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>