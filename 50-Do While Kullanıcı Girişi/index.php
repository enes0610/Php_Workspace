// Do While Kullanıcı Girişi

<?php
$dogru_sifre = "1234";
$giris = "";

do {
    echo "Şifre kontrol ediliyor...<br>";
    $giris = "1234"; // Simülasyon için doğru şifre girildi.
} while ($giris != $dogru_sifre);

echo "Giriş başarılı!";
?>