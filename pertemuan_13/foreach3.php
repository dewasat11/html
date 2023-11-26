<?php

//insiasi array
$barang = [
    "nama" => "Laptop",
    "harga" => 8000000,
    "merk" => "Asus",
    "diskon" => 10
];

foreach ($barang as $key => $value) {
    echo strtoupper($key). ": $value\n";
    //ucfirst
}