<?php 
$tijd = 5;

$tijd2 = match($tijd) {
    5, 6, 7, 8, 9, 10, 11 => "Ochtend",
    12, 13, 14, 15, 16, 17 => "Middagg",
    18, 19, 20, 21, 22, 23 => "avond",
    24, 0, 1, 2, 3, 4 => "nacht",
    default => "Error",
};
echo $tijd2;
?>