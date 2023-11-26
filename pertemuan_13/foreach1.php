<?php

$buah = ["Leci", "Mangga", "Durian", "Nangka", "Melon" ];

foreach ($buah as $index => $nama_buah) {
    if($index === 0) {
        echo $nama_buah . PHP_EOL;

        break;
    }
}

?>
