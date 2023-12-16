<?php
class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name =$name;
        $this->color =$color;
    }
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
}

//strawberry
class Strawberry extends Fruit {
    public function messege(){
        echo "Am i a fruit or a berry ?";
    }   
}
//membuat objek
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->messege();
$strawberry->intro();
?>