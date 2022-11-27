<?php 

    class PersegiPanjang{
        private $panjang = 15;
        private $lebar = 10;
        protected $alas = 25;
       


        // function bisa tanpa keyword public
        public function luas() {
            $luas = $this->panjang * $this->lebar;
            echo $luas;
        }

        public function getAlas() {
            return $this->alas;
        }

        private function akses(){
            echo "akses berhasil";
            
        }
         function getAkses($akses){
            if($akses == 'admin123'){
              $this->akses();
            }else {
                echo "akses tidak ditemukan";
            }
                
        }
    }

    $persegi = new PersegiPanjang();

    echo PHP_EOL;
    $persegi->luas();
    echo PHP_EOL;
    // $persergi->getAlas();
    echo PHP_EOL;
    $persergi->getAkses('admin123');


?>