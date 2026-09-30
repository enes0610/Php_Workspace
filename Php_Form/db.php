<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "php_form";

$conn = new mysqli($host, $user, $pass, $dbname);

if($conn->connect_error){
    die("Bağlantı Hatası: " . $conn->connect_error);
}
?>