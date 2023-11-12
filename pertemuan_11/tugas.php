<?php

//function luas
$panjang1;
$lebar1;
function luaspersegipanjang(){
echo"Luas Persegi Panjang\n";
echo"=============\n";
echo "Masukan Panjang: \n";
$panjang1 = fgets(STDIN);

echo "Masukan Lebar: \n";
$lebar1 = fgets(STDIN);

$luas1 = ($panjang1 * $lebar1);
echo "Hasil luas nya adalah: $luas1";
$luas1;
}

//function segitiga
$alas2;
function luassegitiga(){
echo"Luas Segitiga\n";
echo"=============\n";
echo "Masukan Alas: \n";
$alas2 = fgets(STDIN);

$tinggi2;
echo "Masukan Tinggi: \n";
$tinggi2 = fgets(STDIN);

$luas2 = 0.5 * $alas2 * $tinggi2;
echo "Hasil luas nya adalah: $luas2";
$luas2;
}

//funcition luas lingkaran
function luaslingkaran(){
echo"Luas Lingkaran\n";
echo"=============\n";

//deklarasi variabel
$jarijari3;
$hasil3;

//pi 3.14 konstan
define("pi", 3.14);

//luas lingkaran
echo"Masukan jari-jari: ";
$jarijari3 = fgets(STDIN);

//rumus
$hasil3 = pi * ($jarijari3**2);
echo"Hasil luas lingkaran: ". $hasil3;
}

//switch case
    echo"Pilih Program\n";
    echo"1. luas persegi panjang\n";
    echo"2. luas segitiga\n";
    echo"3. luas lingkaran\n";
    echo"=================\n";
$pilihan = trim(fgets(STDIN));
    switch ($pilihan){
        case"1":
            luaspersegipanjang();
            break;
        case"2":
            luassegitiga();
            break;
        case"3":
            luaslingkaran();
        default;
            echo"Pilihan hanya 1 sampai 3 !!!";
        }
    

?>