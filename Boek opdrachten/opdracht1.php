<?php 

echo date("l j F Y"), "<br>";
echo date("z"), "<br>";
echo date("l w"), "<br>";
echo date("F t"), "<br>";
$lol = date("L");
if ($lol = 0) {
    echo date("Y"), " is geen schikkel jaar";
} if ($lol = 1) {
    echo date("Y"), " is wel schikkel jaar";
}
?>