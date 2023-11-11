<?php

echo"Luas Lingkaran\n";
echo"=============\n";

//deklarasi variabel
//jari jari
$jarijari;
$hasil;
//pi 3.14
//v konstan
define("pi", 3.14);

//luas lingkaran
echo"Masukan jari-jari: ";
$jarijari = fgets(STDIN);

//rumus
$hasil = pi * ($jarijari**2);
echo"Hasilcluas lingkaran: ". $hasil;




?>