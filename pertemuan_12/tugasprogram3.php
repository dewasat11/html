<?php
// fungsi menghitung tunjangan anak
function hitungtunjangananak($jumlahAnak, $masaKerja) {

    // Tunjangan per anak
    $tunjanganPerAnak = 500000;

    // Batas maksimal anak yang dihitung (maksimal 5 anak)
    $batasAnak = 5;

    // Masa kerja minuman untuk mendapatkan tunjangan
    $masaKerjaMinimum = 2;

    // inisialisasi tunjangan anak
    $tunjanganAnak = 0;
    
    // Jika masa kerja kurang darimasa kerja minimum, tidap dapat tunjangan 
    if ($masaKerja < $masaKerjaMinimum){
        return $tunjanganAnak;
    }

    // Jika jumlah anak lebih dari 5, hanya hitung tunjangan untuk 5 anak
    $jumlahAnak = min($jumlahAnak, $batasAnak);

    //hitung tunjangan anak
    $tunjanganAnak = $jumlahAnak * $tunjanganPerAnak;
    return $tunjanganAnak;
}

// Meminta input dari pengguna
echo"Masukkan Nama: ";
$nama = trim(fgets(STDIN));

echo"Masukkan Gaji: ";
$gaji = trim(fgets(STDIN));

echo"Masukan jumlah anak: ";
$jumlahAnak = trim(fgets(STDIN));

echo"Masukan masa kerja: ";
$masaKerja = trim(fgets(STDIN));

// Memanggil fungsi untuk menghitung tunjangan anak
$tunjanganAnak = hitungtunjangananak($jumlahAnak, $masaKerja);

$total= $gaji+$tunjanganAnak;

// Menampilkan hasil
//echo PHP_EOL; // Memberi spasi
//echo "Hasil Perhitungan" . PHP_EOL;
//echo "Nama: $nama" . PHP_EOL;
//echo "Gaji: $gaji" . PHP_EOL;
//echo "Jumlah Anak: $jumlahanak" . PHP_EOL;
//echo "Tunjangan anak: $tunjanganAnak" . PHP_EOL;
//echo "Total gaji: $hasil" . PHP_EOL;

echo "Karyawan bernama $nama memperoleh gaji pokok sebesar $gaji dengan tunjangan $tunjanganAnak dan total yang diterima sebesar $total" . PHP_EOL;

if ($tunjanganAnak > 0){
    echo "Tunjangan Anak: $tunjanganAnak" . PHP_EOL;
} else {
    echo "Tidak mendapatkan tunjangan anak karena masa kerja kurang dari 2 tahun." . PHP_EOL;
}

?>
