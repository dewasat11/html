<?php
$panjang;
$lebar;

//functionluas
function luaspersegipanjang(){
echo "Panjang\n";
$panjang = fgets(STDIN);

echo "Lebar\n";
$lebar = fgets(STDIN);

$luas = ($panjang * $lebar);
echo "Hasil luas nya adalah: $luas";
$luas;
}


//function kelilingpersegipanajang
function kelilingpersegipanjang(){
echo"Masukan panjang: \n";
$panjang = fgets(STDIN);

echo"Masukan lebar: \n";
$lebar = fgets(STDIN);

$hasil = 2 * ($panjang + $lebar);
echo"hasil keliling persegi panjang: " . $hasil;
}

//luaspersegipanjang();
kelilingpersegipanjang();

?>
