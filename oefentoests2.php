<?php
echo "Studievetraging kosten <br>";

$lesgeld = 1168;
$salaris = 2500;

for ($i=1; $i < 13; $i++) { 
    echo "Na " . $i . " Maanden scheelt het je €" . $lesgeld+($i*$salaris) . "<br>";
}


echo "Studievetraging kosten <br>";

$lesgeld = 1168;
$salaris = 2500;
$maanden = 10;


for ($b=1; $b <= $maanden; $b++) { 
    $kosten = $lesgeld + ($b * $salaris);
    echo "Na $b Maanden Scheeld het het je $kosten & euro";
}
?>