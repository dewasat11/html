<?php

class perkenalan{
    public static function welcome($nama,$umur,$alamat){
        return" Halo perkenalkan nama saya {$nama} Umur saya {$umur} Alamat saya di {$alamat}" . PHP_EOL; 
    }
}

$perkenalan = perkenalan::welcome("Dewa S.", "21", "Beji");

echo $perkenalan;