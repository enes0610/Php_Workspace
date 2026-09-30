// Yaş Kontrolü Örneği

<?php
$age = 25;

if ($age < 18) {
    echo "Reşit değilsiniz.";
} elseif ($age >= 18 && $age < 30) {
    echo "Gençsiniz.";
} elseif ($age >= 30 && $age < 50) {
    echo "Orta yaşlısınız.";
} else {
    echo "Yaşlısınız.";
}
?>