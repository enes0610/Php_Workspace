// Çok Boyutlu Dizi Yeni Eleman Ekleme

<?php
$ogrenciler = array(
    array("Ali", 20, "Bilgisayar Müh."),
    array("Ayşe", 22, "Makine Müh.")
);

$ogrenciler[] = array("Mehmet", 21, "Elektrik-Elektronik Müh.");

print_r($ogrenciler);
?>