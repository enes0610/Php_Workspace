// Else İf Yapısı

<?php
$not = 85;

if ($not >= 90) {
    echo "Harf notunuz: A";
} elseif ($not >= 80) {
    echo "Harf notunuz: B";
} elseif ($not >= 70) {
    echo "Harf notunuz: C";
} elseif ($not >= 60) {
    echo "Harf notunuz: D";
} else {
    echo "Harf notunuz: F (Kaldınız)";
}
?>