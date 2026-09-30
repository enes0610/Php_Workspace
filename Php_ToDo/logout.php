<?php
session_start();   // Oturumu başlat

session_unset();   // Tüm oturum verilerini temizle
session_destroy(); // Oturumu tamamen yok et

header("Location: login.php"); // Giriş sayfasına yönlendir
exit;
?>