// For Döngüsü Continue Break Kullanımı

<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; // 3'ü atlayacak
    }
    if ($i == 5) {
        break; // Döngüyü tamamen durduracak
    }
    echo $i . " ";
}
?>