// Gün Kontrolü Örneği

<?php
$gun = 3;

if ($gun == 1) {
    echo "Pazartesi";
} elseif ($gun == 2) {
    echo "Salı";
} elseif ($gun == 3) {
    echo "Çarşamba";
} elseif ($gun == 4) {
    echo "Perşembe";
} elseif ($gun == 5) {
    echo "Cuma";
} elseif ($gun == 6) {
    echo "Cumartesi";
} elseif ($gun == 7) {
    echo "Pazar";
} else {
    echo "Geçersiz gün numarası!";
}
?>