<?php
$arrayWaardes = array(999, 128, 1056);

echo "De eerste waarde is: " . $arrayWaardes[0] . "<br>";
echo "De tweede waarde is: " . $arrayWaardes[1] . "<br>";
echo "De deerde waarde is: " . $arrayWaardes[2] . "<br>";
echo "<hr>";
sort($arrayWaardes);
echo "De eerste waarde is: " . $arrayWaardes[0] . "<br>";
echo "De tweede waarde is: " . $arrayWaardes[1] . "<br>";
echo "De deerde waarde is: " . $arrayWaardes[2] . "<br>";
echo "<hr>";
arsort($arrayWaardes);
array_push($arrayWaardes, "75");
echo "De eerste waarde is: " . $arrayWaardes[0] . "<br>";
echo "De tweede waarde is: " . $arrayWaardes[1] . "<br>";
echo "De deerde waarde is: " . $arrayWaardes[2] . "<br>";
echo "De deerde waarde is: " . $arrayWaardes[3] . "<br>";
?>