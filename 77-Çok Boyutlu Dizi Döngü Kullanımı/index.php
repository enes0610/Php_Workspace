// Çok Boyutlu Dizi Döngü Kullanımı

<?php
$ogrenciler = array(
    array("Ali", 20, "Bilgisayar Müh."),
    array("Ayşe", 22, "Makine Müh."),
    array("Mehmet", 21, "Elektrik-Elektronik Müh.")
);

foreach ($ogrenciler as $ogrenci) {
    foreach ($ogrenci as $bilgi) {
        echo $bilgi . " ";
    }
    echo "<br>";
}
?>