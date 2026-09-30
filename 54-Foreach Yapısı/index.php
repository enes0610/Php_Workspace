// ForEach Yapısı

<?php
$i = 1;

do {
    if ($i == 3) {
        $i++;
        continue; // 3'ü atlayacak
    }
    if ($i == 5) {
        break; // Döngüyü tamamen durduracak
    }
    echo $i . " ";
    $i++;
} while ($i <= 5);
?>