<?php
$cijfer = 7.9;
echo "Je cijfer is ", $cijfer, "<br>";
if ($cijfer < 3){ 
    echo "Je hebt en SLecht";
} elseif ($cijfer < 5.5) {
    echo "Je hebt Onvoldeonde!";
} elseif ($cijfer < 7.5) {
    echo "Je hebt Voldoende!";
} elseif ($cijfer > 7.5) {
    echo "Je hebt Goed!";
}
?>