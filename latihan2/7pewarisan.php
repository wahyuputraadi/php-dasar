<?php 

    // Class Induk (Parents dari pewarisan)
    class Hewan {
        // atribute dari kelas Hewan
        private $jenis ;

        // function untuk inisial
        public function inisial(){
            return "ini adalah class hewan";
        }

        // function setter(untuk memproses suatu nilai dari property)
        public function setJenis($jenis){
            $this->jenis = $jenis;  // kita ubah nilai dari properti $jenis nya
        }

        // function getter(untuk mengambil/menampilkan nilai property yang sudah diubah nilainya dari function setter diatas)
        public function getJenis(){
            return $this->jenis;
        }
    }

    // class kambing // class kambing mewarisi kelas Hewan
    class Kambing extends Hewan {

    }

    // class harimau // class harimau mewarisi kelas Hewan
    class Harimau extends Hewan {

    }

    // class singa // class singa mewarisi kelas Hewan
    class Singa extends Hewan {

    }

    // class Mamalia mewarisi dari Class Hewan
    class Mamalia extends Hewan {

        protected $jumlah_kaki = 4;

        public function berjalan(){
            return "sedang berjalan ... ";
        }
    }

    // ================================================================================================================
    // class Sapi mewarisi dari Class Mamalia
    class Sapi extends Mamalia {
        public function suara(){
            return "bersuara Moooo ...";
        }
    }
    // ================================================================================================================
    
    // membuat object dari suatu class
    $hewan = new Hewan();

    // membuat object dari suatu kelas
    $kambing = new Kambing();
    $kambing2 = new Kambing();
    $harimau = new Harimau();
    $singa = new Singa();
    $sapi = new Sapi(); // Class sapi ini sudah mewarisi Class mamalia -> Hewan

    // panggil function setJenis p ada class hewan yang telah diwarisi oleh masing2 class anaknya
    $kambing->setJenis("Herbivora");
    $harimau->setJenis("Karnivora");
    $singa->setJenis("Karnivora Juga");
    $sapi->setJenis('Mamalia, Herbovora');

    // memanggil function inisial pada class hewan
    echo $hewan->inisial(); //memanggil function inisial
    echo PHP_EOL;
    echo 'kambing adalah hewan' . $kambing->getJenis(); // memanggil function getJenis
    echo PHP_EOL;
    echo 'harimau adalah hewan' . $harimau->getJenis(); 
    echo PHP_EOL;
    echo 'singa adalah hewan' . $singa->getJenis(); // memanggil function getJenis
    echo PHP_EOL;  
    echo $sapi->berjalan();
    echo PHP_EOL;
    echo "Memanggil function berjalan yang ada di class Hewan " . $sapi->berjalan(); // Memanggil function berjalan yang ada pada class hewan
    echo PHP_EOL;
    echo "Memanggil function getJenis yang ada di class Hewan" . $sapi->getJenis(); // Memanggil function getJenis yang ada pada class hewan




?>