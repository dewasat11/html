<?php
//variabel matkul
$matakuliah1;
$matakuliah2;
$matakuliah3;
$matakuliah4;
$matakuliah5;

//variabel nilai
$nilai1;
$nilai2;
$nilai3;
$nilai4;
$nilai5;

//Tampilan data
echo "Program mata kuliah\n";
echo "===================\n";

//mata kuliah 1
echo "nama mata kuliah 1 \n";
$matakuliah1 = fgets(STDIN);
echo "Nilai mata kuliah 1 : ", $matakuliah1;
$nilai1 = fgets(STDIN);

//mata kuliah 2
echo "nama mata kuliah 2 \n";
$matakuliah2 = fgets(STDIN);
echo "Nilai mata kuliah 2 : ", $matakuliah2;
$nilai2 = fgets(STDIN);

//mata kuliah 3
echo "nama mata kuliah 3 \n";
$matakuliah3 = fgets(STDIN);
echo "Nilai mata kuliah 3 : ", $matakuliah3;
$nilai3 = fgets(STDIN);

//mata kuliah 4
echo "nama mata kuliah 4 \n";
$matakuliah4 = fgets(STDIN);
echo "Nilai mata kuliah 4 : ", $matakuliah4;
$nilai4 = fgets(STDIN);

//mata kuliah 5
echo "nama mata kuliah 5 \n";
$matakuliah5 = fgets(STDIN);
echo "Nilai mata kuliah 5 : ", $matakuliah5;
$nilai5 = fgets(STDIN);

//tampilan data
echo"Mata Kuliah " , $matakuliah1 , "Bernilai " , $nilai1;
echo"Mata Kuliah " , $matakuliah2 , "Bernilai " , $nilai2;
echo"Mata Kuliah " , $matakuliah3 , "Bernilai " , $nilai3;
echo"Mata Kuliah " , $matakuliah4 , "Bernilai " , $nilai4;
echo"Mata Kuliah " , $matakuliah5 , "Bernilai " , $nilai5;

?>
