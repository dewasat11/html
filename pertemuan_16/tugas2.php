<?php
 //parent class
 abstract class Car {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro() : string;
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