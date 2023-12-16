<?php
include 'tugas1.php';

//membuat object dari kelas kendaraan
$mobil = new Kendaraan("Toyota", 4, 200000000, "Merah", 200);
$truck = new Kendaraan("Hino", 8, 900000000, "Hijau", 5000);

//Menggunakan metode set untuk mengubah
//$mobil->set_merk("Honda");

//Menampilkan hasil  menggunakan metode get
echo "Merk: ". $mobil->get_merk().PHP_EOL;
echo "Jumlah roda: " . $mobil->get_roda().PHP_EOL;
echo "Harga: " . $mobil->get_harga().PHP_EOL;
echo "Warna: " . $mobil->get_warna().PHP_EOL;
echo "Torsi: " . $mobil->get_torsi().PHP_EOL;
echo PHP_EOL;
echo "Merk: " . $truck->get_merk().PHP_EOL;
echo "Jumlah roda: " . $truck->get_roda().PHP_EOL;
echo "Harga: " . $truck->get_harga().PHP_EOL;
echo "Warna: " . $truck->get_warna().PHP_EOL;
echo "Torsi: " . $truck->get_torsi().PHP_EOL; 
 
 ?>

 