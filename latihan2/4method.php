<?php 

class Mobil{
    // property
    public $roda = 4; // property $roda ini memiliki nilai default 4
    public $sepion;

    // method / function
    public function jalan(){
        echo "mobil berjalan";
    }

    public function move($move = 'stop'){
        // kondisi 
        if($move == 'stop') {
            echo "mobil stop";
        }elseif ($move == 'maju'){
            echo "mobil melaju";
        } elseif ($move == 'kanan') {
            echo "mobil berbelok ke kanan";
        }elseif ($move == 'kiri'){
            echo "mobil berbelok ke kiri";
        }
    } 
}

$mobil1= new Mobil();

$mobil1->jalan();
echo PHP_EOL;
$mobil1->move();
echo PHP_EOL;
$mobil1->move('maju');





//panggil method / property dari class mobil

