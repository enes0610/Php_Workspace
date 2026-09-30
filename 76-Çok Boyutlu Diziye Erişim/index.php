// Çok Boyutlu Diziye Erişim

<?php
$ogrenciler = array(
    array("Ali", 20, "Bilgisayar Müh."),
    array("Ayşe", 22, "Makine Müh."),
    array("Mehmet", 21, "Elektrik-Elektronik Müh.")
);

echo $ogrenciler[0][0]; // Ali
echo $ogrenciler[1][2]; // Makine Müh.
echo $ogrenciler[2][1]; // 21
?>