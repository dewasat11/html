<?php
// Menghitung luas persegi panjang
function luasPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}
$luas = luasPersegiPanjang($panjang, $lebar);

echo "panjang\n";
$panjang = fgets(STDIN);
echo "lebar\n";
$lebar = fgets(STDIN);
echo "Luas:\n";
$luas = ($panjang * $lebar);
?>