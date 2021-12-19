<?php
$radar = "Radar";
$malam = "Malam";
$kasur = "Kasur ini rusak";
$ibu = "Ibu Ratna antar ubi";
$malas = "Malas";
$makan = "Makan nasi goreng";
$balonku = "Balonku ada lima";
// Kasur ini rusak       # --> palindrome
// Ibu Ratna antar ubi   # --> palindrome
// Malas                 # --> not palindrome
// Makan nasi goreng     # --> not palindrome
// Balonku ada lima      # --> not palindrome

$reverse = strrev($radar);
$reverse = strrev($malam);
$reverse = strrev($kasur);
$reverse = strrev($ibu);
$reverse = strrev($malas);
$reverse = strrev($makan);
$reverse = strrev($balonku);
if ($radar == $reverse && $malam == $reverse && $kasur == $reverse && $ibu == $reverse && $malas == $reverse && $makan == $reverse && $balonku == $reverse) {
    echo '<br> ' . $radar . '  is a palindrome';
    echo '<br> ' . $malam . '  is a palindrome';
    echo '<br> ' . $kasur . '  is a palindrome';
    echo '<br> ' . $ibu . '  is a palindrome';
    echo '<br> ' . $malas . '  is a palindrome';
    echo '<br> ' . $makan . '  is a palindrome';
    echo '<br> ' . $balonku . '  is a palindrome';
} else {
    echo '<br>' . $radar . ' is not a palindrome';
    echo '<br>' . $malam . ' is not a palindrome';
    echo '<br>' . $kasur . ' is not a palindrome';
    echo '<br>' . $ibu . ' is not a palindrome';
    echo '<br>' . $malas . ' is not a palindrome';
    echo '<br>' . $makan . ' is not a palindrome';
    echo '<br>' . $balonku . ' is not a palindrome';
}
