<?php

//variabel
$panjang;
$lebar;

//data
echo"Masukan panjang: \n";
$panjang = fgets(STDIN);

echo"Masukan lebar: \n";
$lebar = fgets(STDIN);

//rumus
$hasil = 2 * ($panjang + $lebar);
echo"hasil keliling persegi panjang: " . $hasil;


?>
