// Switch Case Default

<?php
$seviye = "orta";

switch ($seviye) {
    case "başlangıç":
        echo "Seviyeniz: Başlangıç";
        break;
    case "orta":
        echo "Seviyeniz: Orta";
        break;
    case "ileri":
        echo "Seviyeniz: İleri";
        break;
    default:
        echo "Geçersiz seviye!";
}
?>