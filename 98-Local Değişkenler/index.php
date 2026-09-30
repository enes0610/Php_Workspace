// Local Değişkenler

<?php
function test() {
    $yerel = "Bu sadece fonksiyon içinde geçerli.";
    echo $yerel;
}

test();
// echo $yerel; // HATA! Değişkenin kapsamı dışındayız.
?>