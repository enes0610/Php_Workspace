// ForEach Dizi Değeri Güncelleme

<?php
$notlar = array(50, 60, 70);

foreach ($notlar as &$not) {
    $not += 10; // Notlara 10 ekleyelim
}

print_r($notlar);
?>