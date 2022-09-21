<?php 
$tijd = date("H");
echo $tijd, "<br>";
if ($tijd < 6) {
    echo " het is nacht";
} else if ($tijd < 18) {
    echo " Middag";
} else if ($tijd < 23) {
    echo " het is avond";
}
?>