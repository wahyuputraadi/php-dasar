<?php 

    class Singa {
        // atribut yang bersifat static 
        public static $kaki = 4;

        // method yang bersifat static
        public static function lari() {
            echo "Singa Berlari";
        }

    }

    // pemanggilan atribute static pada class Singa
    echo "Kaki Singa Ada ".  Singa::$kaki;

    echo PHP_EOL;

    // pemanggilan function static pada class Singa
    Singa::lari();

?>