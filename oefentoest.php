<?php
 $eredivisie= array("Ajax","PSV","Utrecht","Feyenoord","Vitesse","Willem II",
 "NEC","GA Eagles","AZ","Twente","Cambuur","Heerenveen","Heracles","RKC",
  "Groningen","Fortuna","Sparta","PEC");


$pos = 1;
$favo = "AZ";

foreach ($eredivisie as $club) {
  
  if($club === $favo) {
    echo "Je Favorite club $club staat nu op plaats $pos";
  }

  $pos ++;
}
?>