<?php
//mobil
trait NyalakanMesin {
    public function nyalakanmesin(){
        echo"Nyalakan Mesin\n";
    }
}

trait KecepatanAwal {
    public function kecepatanawal($nilai){
        $this->nilai= $nilai;
        echo"kecepatan awal kendaraan {$this->nilai} km\n";
    }
}

trait Kecepatan {
    public function kecepatan($nilai){
        $this->nilai= $nilai;
        echo"kecepatan mobil sekarang {$this->nilai} km\n";
    }
}

trait MatikanMesin {
    public function matikanmesin(){
        echo"Matikan Mesin\n";
    }
}


//motor
trait NyalakanMesin2 {
    public function nyalakanmesin2(){
        echo"Nyalakan Mesin\n";
    }
}

trait KecepatanAwal2 {
    public function kecepatanawal2($nilai2){
        $this->nilai2= $nilai2;
        echo"kecepatan awal kendaraan {$this->nilai2} km\n";
    }
}

trait Kecepatan2 {
    public function kecepatan2($nilai2){
        $this->nilai2= $nilai2;
        echo"kecepatan motor sekarang {$this->nilai2} km\n";
    }
}

trait MatikanMesin2 {
    public function matikanmesin2(){
        echo"Matikan Mesin\n";
    }
}
class Mobil {
    use MatikanMesin, kecepatan, kecepatanawal, NyalakanMesin;
}
class Motor {
    use MatikanMesin2, kecepatan2, kecepatanawal2, NyalakanMesin2;
}
$mobil = new Mobil();
$mobil->nyalakanmesin();
$mobil->kecepatanawal(10);
$mobil->kecepatan(50);
$mobil->matikanmesin();

$motor = new Motor();
$motor->nyalakanmesin2();
$motor->kecepatanawal2(20);
$motor->kecepatan2(70);
$motor->matikanmesin2();

