<?php

//buat fnction calciusTofarenhait
//rumus(nilai 1 celsius *9/5 +32
//parameter function (int celcius)
//invoke function celciusTofarenhait(12) // print 53,6

function celciusTofarenhait($celcius)
{
    $convertion=($celcius *9/5)+32;

    echo "$celcius celcius = $convertion farenhait";

}
celciusTofarenhait(80);





?>