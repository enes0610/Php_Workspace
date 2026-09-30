// Varsayılan Parametre Değeri

<?php
function selam($isim = "Misafir") {
    echo "Merhaba, $isim!";
}

selam(); // Merhaba, Misafir!
selam("Ahmet"); // Merhaba, Ahmet!
?>