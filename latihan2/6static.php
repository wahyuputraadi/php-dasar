<?php

use LaptopSeber as GlobalLaptopSeber;

    class Singa {
        // atribut yang bersifat static 
        public static $kaki = 4;

        // method yang bersifat static
        public static function lari() {
            echo "Singa Berlari"; //apabila dijalankan dengan echo (saat menjalankan tidak wajib echo)
        }

    }

    // Latihan sendiri atribute bersifat static
    class LaptopSeber{
        public static $tipe_laptop = 'Lenovo Thinkpad';

        public static function about(){
            echo "laptop seber adalah laptop seken berkualitas";
        }
    }

    // Akhir Latihan sendiri atribute bersifat static
    echo "Kaki Singa Ada ".  Singa::$kaki; // pemanggilan atribute static pada class Singa
    echo PHP_EOL;
    Singa::lari(); // pemanggilan function static pada class Singa

    // Latihan atribute bersifat static sendiri
    echo PHP_EOL;
    echo "laptop yang kami jual adalah ". LaptopSeber::$tipe_laptop; // pemanggilan class LaptopSeber & $tipe_laptop
    echo PHP_EOL;
    LaptopSeber::about(); // pemanggilan class LaptopSeber & about
?>