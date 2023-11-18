

<?php
   
  echo"Masukan Angka Bilangan: \n"; 
  echo"==> " ;
  $angka = trim (fgets(STDIN));
  
   // angka numuric
    if (is_numeric($angka)) {
        // Rumus ganjil genap
        if ($angka % 2 == 0) { //% = modulus 
            echo "$angka adalah angka genap.";
        } else {
            echo "$angka adalah angka ganjil.";
        }
    } else {
        echo "Masukkan harus berupa angka.";
    }
?>