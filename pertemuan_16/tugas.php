
<?php
class Animals {
    public $nama;
    public $kaki;
    public $jenis;
    public $suara;

    public function __construct($nama, $kaki, $jenis, $suara) {
        $this->nama =$nama;
        $this->kaki =$kaki;
        $this->jenis =$jenis;
        $this->suara =$suara;
    }
    public function intro(){
        echo "Ini adalah hewan {$this->nama} yang memiliki {$this->kaki} jenis hewan ini adalah {$this->jenis} dan bersuara {$this->suara}"; 
    }
}

//kucing
class Kucing extends Animals {
    public function messege(){
        echo PHP_EOL . "Hewan apakah aku ?";
    }   
}
//membuat objek
$kucing = new Kucing("Kucing", "4", "Mamalia", "meong");
$kucing->messege() . PHP_EOL;
$kucing->intro() . PHP_EOL;



//ayam
class ayam extends Animals {
    public function messege(){
        echo "Hewan apakah aku ?";
    }   
}
echo "\n";
//membuat objek
$ayam = new ayam("ayam", "2", "Bertelur", "Kukuruyuk");
$ayam->messege() . PHP_EOL;
$ayam->intro() . PHP_EOL;

?>