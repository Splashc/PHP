<?php
function favo1($favo) {
    $eredivisie= array("Ajax","PSV","Utrecht","Feyenoord","Vitesse","Willem II",
    "NEC","GA Eagles","AZ","Twente","Cambuur","Heerenveen","Heracles","RKC",
     "Groningen","Fortuna","Sparta","PEC");
   
   
   $pos = 1;
   
   foreach ($eredivisie as $club) {
     
     if($club === $favo) {
       return "Je Favorite club $club staat nu op plaats $pos";
     }
   
     $pos ++;
   }
}

echo favo1("Sparta");
?>