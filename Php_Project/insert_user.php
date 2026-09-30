<?php

include 'connect.php';

    // Kullanıcı Bilgisi
    $name = 'Enes';
    $surname = 'Oğuz';
    $email = "enesmail@mail.com";

    // SQL Sorgu
    $sql = "INSERT INTO users(name, surname, email) VALUES('$name', '$surname', '$email')";
    
    // SQL Sorguyu Çalıştır
    if($conn->query($sql) === TRUE) {
        echo "Yeni Kullanıcı Eklendi ";
    } else {
        echo "Hata: " . $sql . "<br>" .$conn->error;
    }

    // Bağlantıyı Bitir
    $conn->close();

?>