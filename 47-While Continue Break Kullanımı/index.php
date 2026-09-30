// While Döngüsü Continue Break Kullanımı

<?php
$i = 1;

while ($i <= 5) {
    if ($i == 3) {
        $i++;
        continue; // 3'ü atlayacak
    }
    if ($i == 5) {
        break; // Döngüyü tamamen durduracak
    }
    echo $i . " ";
    $i++;
}
?>