<?php

echo"Silahkan input nilai: \n";
echo"=====================\n";

$nilaimahasiswa = trim (fgets(STDIN));

if ($nilaimahasiswa <60){
echo"Tidak Lulus";
} else{
    echo"Anda Lulus";
}

?>