<?php
//Program Nilai
//di bwh 60 (e)
//di bwh 70 (d)
//di bwh 80 (c)
//di bwh 90 (b)
//di bwh 100 (a)

echo"Masukan Nilai Anda: \n";
$nilai = trim(fgets(STDIN));

if ($nilai > 100){
    echo"Nilai Tidak Valid!";
} else{
    if ($nilai < 60 ){
        echo"E";
    }
    elseif($nilai < 70){
        echo"D";
    }
    elseif($nilai < 80){
        echo"C";
    }
    elseif($nilai < 90){
        echo"B";
    }
    else{
        echo"A";
    }
}


?>