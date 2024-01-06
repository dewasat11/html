<?php

class greeting {
    //deklarasi metode static
    public static function welcome(){
        return "Hello World!" . PHP_EOL;
    }
}

//manggil static metode
$greeting = greeting::welcome();
echo $greeting;
?>