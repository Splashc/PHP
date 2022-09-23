<?php 
    $uur = date("H");
    $temp = 20;
    $luch = 85;

    if ($uur < 8 || $uur >= 17) {
        echo"Airco uit zetten";
    }
    else if($temp < 20 && $luch <= 85){
        echo"Airco uit zetten";
    }
    else {
        echo"Airco aan zetten";
    }
?>