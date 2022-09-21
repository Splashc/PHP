<?php
    $dag = date("l");
    echo "$dag <br>";
    
    switch($dag) {
        case "Monday" : echo "Het is maandag"; break;
        case "Thursday" : echo "Het is donderdag"; break;
        case "Tuesday" : echo "Het is dinsdag"; break;
        default : echo "Deze dag ken ik niet"; break;
    }
?>