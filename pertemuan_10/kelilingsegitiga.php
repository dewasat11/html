<?php

$sisi1;
$sisi2;
$sisi3;

echo"masukan sisi 1: \n";
$sisi1 = fgets(STDIN);

echo"masukan sisi 2: \n";
$sisi2 = fgets(STDIN);

echo"masukan sisi 3: \n";
$sisi3 = fgets(STDIN);

//rumuskeliling segitiga

$hasil = $sisi1 + $sisi2 + $sisi3;
echo"hasil dari keliling segitiga: ". $hasil;


?>