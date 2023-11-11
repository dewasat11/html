<?php

$alas;
$tinggi;
$hasil;

//function segitiga
function luassegitiga(){
    echo"Masukan alas\n";
    $alas = fgets(STDIN);

    echo"Masukan tinggi\n";
    $tinggi = fgets(STDIN);

    $hasil = 0.5 * $alas * $tinggi;
    echo"luas segitiga adalah " . $hasil;
}

luassegitiga();
?>