<?php
function writemsg(int $lengte, int $breedte, int $hoogte)
{
    return $lengte * $breedte * $hoogte;
}
echo writemsg(13, 120, 120)
?>