// ForEach Break Continue Kullanımı

<?php
$sayilar = array(1, 2, 3, 4, 5);

foreach ($sayilar as $sayi) {
    if ($sayi == 3) {
        continue; // 3'ü atla
    }
    if ($sayi == 5) {
        break; // Döngüyü durdur
    }
    echo $sayi . " ";
}
?>