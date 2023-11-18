<?php
// fungsi menghitung tunjangan anak
function hitungtunjangananak($jumlahanak) {

    // Tunjangan per anak
    $tunjanganperanak = 500000;

    // Batas maksimal anak yang dihitung (maksimal 5 anak)
    $batasanak = 5;

    // Jika jumlah anak lebih dari 5, hanya dihitung tunjangan untuk 5 anak
    if ($jumlahanak > $batasanak){
        $jumlahanak = $batasanak;
    }

    // Hitung tunjangan anak
    $tunjanganAnak = $jumlahanak * $tunjanganperanak;

    return $tunjanganAnak;
}

// Meminta input dari pengguna
echo"Masukkan Nama: ";
$nama = trim(fgets(STDIN));

echo"Masukkan Gaji: ";
$gaji = trim(fgets(STDIN));
echo"Masukan jumlah anak: ";
$jumlahanak = trim(fgets(STDIN));

// Memanggil fungsi untuk menghitung tunjangan anak
$tunjanganAnak = hitungtunjangananak($jumlahanak);

$hasil= $gaji+$tunjanganAnak;

// Menampilkan hasil
echo PHP_EOL; // Memberi spasi
echo "Hasil Perhitungan" . PHP_EOL;
echo "Nama: $nama" . PHP_EOL;
echo "Gaji: $gaji" . PHP_EOL;
echo "Jumlah Anak: $jumlahanak" . PHP_EOL;
echo "Tunjangan anak: $tunjanganAnak" . PHP_EOL;
echo "Total gaji: $hasil" . PHP_EOL;

// MEnentukan apakah mendapatkan tunjangana lebih dari 5 anak
if ($jumlahanak > 5){
    echo "Catatan: Tunjangan hanya dihitung untuk 5 anak." . PHP_EOL;
}

?>