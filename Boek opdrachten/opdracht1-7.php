<?php 
$geld = 1020;
$iphone = 1000;

$verschil = $iphone - $geld;

if($verschil > 250) {
    echo "Je kan beter en bijbaantje nemen je hebt nog: €" . $verschil . " nodig";
} else if (($verschil <= 250) && ($verschil > 0)) {
    echo "Je hebt bijna genoeg geld! je hebt nog: €" . $verschil . " nodig";
} else {
    echo "Je hebt genoeg geld en je hebt nog €" . ($verschil * -1) . " Over voor een hoesje";
}
?>
