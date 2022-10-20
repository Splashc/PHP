



























































<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 27-9-2022
 * Time: 13:56
 * chr()
 * ord()
 * str_split()
 *
 */
    $wachtwoord="Abcd3!efg";
    $lengte=strlen($wachtwoord);
    $letters=str_split($wachtwoord);
    $specialCar=0;
    $hoofdletter=0;
    $cijfer=0;
    echo $wachtwoord;
    print_r($letters);
    echo "<br>";
    if ($lengte >= 8)
    {
        for($index=0;$index<$lengte;$index++)
        {
            echo $letters[$index]."<br>";
            if(ord($letters[$index])>32 && ord($letters[$index])<43 )
            {
                $specialCar=1;

            }
            if(ord($letters[$index])>64 && ord($letters[$index])<91 )
                        {
                $hoofdletter=1;

            }
            if(ord($letters[$index])>47 && ord($letters[$index])<58 )
            {
                $cijfer=1;

            }
        }
        $som=$specialCar+$hoofdletter+$cijfer;
        if ($som==3)
        {
            echo "Wachtwoord is goed";
        }
        else
        {
            echo "wachtwoord is fout";
        }
    }
    else
    {
        echo "Wachtwoord niet lang genoeg, onjuist";
    }
 ?>