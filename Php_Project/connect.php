<?php
    // Veritabanı Bağlantısı
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test_mysql';

    // Bağlantı
    $conn = new mysqli($host, $username, $password, $database);

    // Bağlantı Kontrolü
    if($conn-> connect_error) {
        die("Bağlantı Hatası: " . $conn-> connect_error);
    }
    echo "Bağlantı Başarılı ";
    echo "<br>";
?>