// Tek Boyutlu Diziden Eleman Silme

<?php
$sebzeler = ["Domates", "Biber", "Patlıcan"];
unset($sebzeler[1]); // 1. indeks (Biber) silindi

print_r($sebzeler);
?>