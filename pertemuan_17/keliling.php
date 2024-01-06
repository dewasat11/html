<?php

class keliling{
    public static function kelilingpersegipanjang($panjang, $lebar) {
        return 2* ($panjang + $lebar);
    }
}

class luas{
    const PI = 3.14;
    public static function luasLingkaran($jarijari) {
        return self::PI* $jarijari**2;
    }
}

$panjang = 15;
$lebar = 10;
$jarijari = 10;

$keliling = keliling::kelilingpersegipanjang($panjang, $lebar);
echo "Keliling persegi panjang adalah " . $keliling . PHP_EOL;

$luasLingkaran = luas::luasLingkaran($jarijari);
echo "Luas lingkaran adalah " . $luasLingkaran . PHP_EOL;