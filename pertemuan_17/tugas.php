<?php

//deklarasi interface
interface Burung {
   public function suara();
   public function gerak();
   public function jenis();
   public function berkaki();
}

class Kenari implements Burung {
   public function suara () {
      echo  "kiw-kiw-kiw\n";
   }

   public function berkaki (){
      echo "dua\n";
   }
   
   public function gerak () {
      echo "terbang\n";
   }
   
   public function jenis () {
      echo "telur\n";
   }

   
}

//deklarasi objek
$Kenari = new kenari();
$Kenari->suara();
$Kenari->jenis();
$Kenari->gerak();
$Kenari->berkaki();
 ?>