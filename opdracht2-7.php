<?php
// 404 verkeerde input
$getal = 44;
echo $getal;
if ($getal < 0) {
    echo "Error 404";
} elseif ($getal <= 10){
    echo "<br> Het getal ligt tussen de 0 en de 10";
} elseif ($getal >= 10&&$getal <= 20){
    echo "<br> Het getal ligt tussen de 10 en 20";
} elseif ($getal >= 20&&$getal <= 30){
    echo "<br> Het getal ligt tussen de 20 en 30";
} else {
    echo "<br> Error 404";
}
?>