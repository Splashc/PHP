<?php
$prijs = 160;

if ($prijs > 150 ) {
    echo "De prijs is boven 150 euro komt dus 19 % bij Niewue prijs:" . ($prijs * 1.19); echo "<br>";
} else if ($prijs < 55 ) {
    echo "De prijs is boven 100 euro komt dus 19 % bij" . ($prijs * 1.11); echo $prijs;
} else {
    echo "De prijs is boven 100 euro komt dus 19 % bij" . ($prijs * 1.16); echo $prijs;
}