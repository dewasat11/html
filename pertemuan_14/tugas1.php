<?php

//insiasi array
$barang = [
    "Laptop" => [
        "harga" => 8000000,
        "merk" => "Asus",
        "diskon" => 10
    ],
    "Smartphone" => [
        "harga" => 4000000,
        "merk" => "Samsung",
        "diskon" => 5
    ],
    "Kamera" => [
        "harga" => 12000000,
        "merk" => "Canon",
        "diskon" => 8
    ]
    
];
  
foreach ($barang as $key => $Detail_Barang) {
    echo "Nama Barang : $key\n";
    echo "Merek : " . $Detail_Barang["merk"] . PHP_EOL;
    echo "Harga : " . $Detail_Barang["harga"]. PHP_EOL;
    echo "Diskon : " .$Detail_Barang["diskon"] . PHP_EOL;
    // echo "\n";
}
//echo $barang["LAPTOP"]["merk"] . PHP_EOL; //OUTPUT ASUS
//echo $barang["LAPTOP"]["harga"] . PHP_EOL;
//echo $barang["Kamera]["harga"];

//echo $barang["Smartphone"]["merk"] . PHP_EOL; //OUTPUT ASUS
//echo $barang["Smartphone"]["harga"] . PHP_EOL;
//echo $barang["Smartphone"]["diskon"];
