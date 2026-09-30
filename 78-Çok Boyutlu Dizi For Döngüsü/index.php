// Çok Boyutlu Dizi For Döngüsü

<?php
$ogrenciler = array(
    array("Ali", 20, "Bilgisayar Müh."),
    array("Ayşe", 22, "Makine Müh."),
    array("Mehmet", 21, "Elektrik-Elektronik Müh.")
);

for ($i = 0; $i < count($ogrenciler); $i++) {
    for ($j = 0; $j < count($ogrenciler[$i]); $j++) {
        echo $ogrenciler[$i][$j] . " ";
    }
    echo "<br>";
}
?>