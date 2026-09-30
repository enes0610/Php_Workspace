// Çok Boyutlu Dizi Eleman Güncelleme

<?php
$ogrenciler = array(
    array("Ali", 20, "Bilgisayar Müh."),
    array("Ayşe", 22, "Makine Müh.")
);

$ogrenciler[0][1] = 21; // Ali'nin yaşını güncelle

print_r($ogrenciler);
?>