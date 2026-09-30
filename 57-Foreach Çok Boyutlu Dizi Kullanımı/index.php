// ForEach Çok Boyutlu Dizi Kullanımı

<?php
$ogrenciler = array(
    array("isim" => "Ali", "not" => 85),
    array("isim" => "Ayşe", "not" => 90),
    array("isim" => "Mehmet", "not" => 78)
);

foreach ($ogrenciler as $ogrenci) {
    foreach ($ogrenci as $anahtar => $deger) {
        echo "$anahtar: $deger ";
    }
    echo "<br>";
}
?>