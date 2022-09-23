<?php
$leeftijd = 16;
$stempas = False;
if($leeftijd > 16) {
    echo "je mag examen doen"; 
} else {
    echo "je mag nog geen examn doen";
}
if($leeftijd >= 18) {
    if(!$stempas) {
        echo "Je mag niet stemmen stem pas";
    } else {
        echo "je mag stemmen"; 
    }
}
else {
    echo "je mag niet stemmnen";
}
?>