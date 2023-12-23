<?php

class Mobil {
    private $warna;
    private $merk;

    public function __construct($warna, $merk){
        $this->warna=$warna;
        $this->merk=$merk;
    }
    function setwarna ($warna) {
        $this->warna = $warna;
    }
    function getwarna () {
        return $this->warna;
    }
    function setmerk ($merk) {
        $this->merk = $merk;
    }
    function getmerk () {
        return $this->merk;
    }
}

$mobil = new Mobil("Merah", "Toyota");
echo "Merk Mobil :" . $mobil->getmerk() . " Memiliki Warna " . $mobil->getwarna() . PHP_EOL;
?>