// Global Değişkenler

<?php
$globalDegisken = "Ben her yerde varım!";

function test() {
    global $globalDegisken; // Global değişkeni içeri al
    echo $globalDegisken;
}

test();
?>