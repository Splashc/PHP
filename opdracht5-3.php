<?php
function writemsg(int $temp)
{
    if ($temp > 28) {
        return "Het is $temp graden" . "<br>Pak de koelbox maar we gaan naar het strand";
    }elseif ($temp <28) {
        
        return "Nee laat maar";
    }
}
echo writemsg(29)
?>