// Referans Değer Döndürme

<?php
function &degistir() {
    static $sayi = 10;
    return $sayi;
}

$degisken = &degistir();
$degisken = 20;

echo degistir(); // 20
?>