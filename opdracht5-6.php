<?php

$dagen = array('Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag');

function toondagen($dagenarray) {
    $returnstring = "";
        foreach ($dagenarray as $dag) {
        $returnstring .= "Dag: " . $dag . "<br>";
 }
 return $returnstring;
}

echo toondagen($dagen);
?>