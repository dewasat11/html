<?php

class callself {
    //deklarasi variable konstan
    const konstan = 5;
    const nama = "dewa";

    public static function sendiri (){
        return "Bilangan Konstan = " . self::konstan .  self::nama . PHP_EOL;

    }
}

$call = callself::sendiri();
echo $call;