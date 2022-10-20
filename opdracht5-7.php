<?php
$dobeelsteen = array('Dobbelsteen 1: ', 'Dobbelsteen 2: ', 'Dobbelsteen 3: ', 'Dobbelsteen 4: ', 'Dobbelsteen 5: ', 'Dobbelsteen 6: ');

function rollDice() {
    return rand(1,6);
}

function rollDices($aantal){
    $returnString = "";
    for ($i=1; $i <= $aantal; $i++) { 
        $returnString .= "Doobelsteen $i: " . rollDice() . "<br>";
    }

    return $returnString;
}

echo rollDices(8);
?>