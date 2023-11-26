<?php

$buah = ["Leci", "Mangga", "Durian", "Nangka", "Melon" ];

//Menampilkan paling depan
$elemendepan = $buah[0];
echo "Nama paling depan :  $elemendepan \n";

//Menampilkan paling tengah
$indekstengah = (count($buah) -1) /2;
$elementengah = $buah[$indekstengah];
echo "Nama paling tengah :  $elementengah \n";

//Menampilkan paling belakang
$elemenbelakang = $buah[count($buah) -1];
echo "Nama paling belakang :  $elemenbelakang \n";
?>
