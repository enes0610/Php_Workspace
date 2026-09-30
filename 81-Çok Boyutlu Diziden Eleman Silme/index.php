// Çok Boyutlu Diziden Eleman Silme

<?php
$ogrenciler = array(
    array("Ali", 20, "Bilgisayar Müh."),
    array("Ayşe", 22, "Makine Müh."),
    array("Mehmet", 21, "Elektrik-Elektronik Müh.")
);

unset($ogrenciler[1]); // 2. öğrenci (Ayşe) silindi

print_r($ogrenciler);
?>