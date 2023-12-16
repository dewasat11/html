
    <?php

    //class
    class Kendaraan {
        //Properties
        public $merk;
        public $roda;
        public $harga;
        public $warna;
        public $torsi;
    
       //constructor
       public function __construct($merk, $roda, $harga, $warna, $torsi){
        $this->merk = $merk;
        $this->roda = $roda;
        $this->harga = $harga;
        $this->warna = $warna;
        $this->torsi = $torsi;
       }
       
        //aksi methods
        function set_merk($merk) {
            $this ->merk = $merk;
        }
        function get_merk() {
            return $this->merk;
        }
        function set_roda($roda) {
            $this->roda = $roda;
        }
        function get_roda() {
            return $this->roda;
        }
        function set_harga($harga) {
            $this->harga = $harga;
        }
        function get_harga() {
            return $this->harga;
        }
        function set_warna($warna) {
            $this->warna = $warna;
        }
        function get_warna() {
            return $this->warna;
        }
        function set_torsi($torsi) {
            $this->torsi = $torsi;
        }
        function get_torsi() {
            return $this->torsi;
        }
    }