<?php
$naam = "Henk";

echo "De waarden van mijn naam voor de toevoeging: $naam <hr>";

$naam = "Henk";
$naam .= "pietersen";

echo "De waarden na de toevoing: $naam <hr>";
$strlengte = strlen($naam);
echo "De lengte is $strlengte <hr>";
echo str_replace("Henk", "Sven ", $naam);
?>