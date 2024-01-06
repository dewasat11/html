<?php
 //parent class
 abstract class Car {
    public $name;
    public $merk;
    public $harga;

    public function __construct($name, $merk,) {
        $this->name = $name;
        $this->merk = $merk;
        $this->harga = $harga;
    }
    abstract public function intro() : string;
 }

 function set_name($name) {
    $this ->name = $name;
}
function get_name() {
    return $this->name;
}
function set_merk($merk) {
    $this ->merk = $merk;
}
function get_merk() {
    return $this->merk;
}
function set_harga($harga) {
            $this ->harga = $harga;
        }
        function get_harga() {
            return $this->harga;
        }

 //child class

 class Audi extends Car {
    public function intro() : string {
        return "Choose German quality!I'm an $this->name!";
    }
 }
 class Volvo extends Car {
    public function intro() : string {
        return "Proud to be Swedish!I'm a $this->name!";
    }
 }
 class Citroen extends Car {
    public function intro() : string {
        return "French extravagance!I'm an $this->name!";
    }
 }

 //creat objek
 $audi = new audi("Audi");
 echo $audi->intro();
 echo PHP_EOL;

 $volvo = new volvo("volvo");
 echo $volvo->intro();
 echo PHP_EOL;
 
 $citroen = new citroen("citroen");
 echo $citroen->intro();
 echo PHP_EOL;
 ?>