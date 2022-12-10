<?php 

class Mobil{
    // property
    public $roda = 4; // property $roda ini memiliki nilai default 4
    public $sepion;

    // method / function
    public function jalan()
    {
        echo "mobil berjalan";
    }

    public function move($move = 'stop')
    {
        // kondisi 
        if($move == 'stop') 
        {
            echo "mobil stop";
        }elseif ($move == 'maju')
        {
            echo "mobil melaju";
        } elseif ($move == 'kanan')
        {
            echo "mobil berbelok ke kanan";
        }elseif ($move == 'kiri')
        {
            echo "mobil berbelok ke kiri";
        } elseif ($move == 'mundur')
        {
            echo "mobil mundur";
        }else{
            echo "mobil tidak tau arah !";
        }
    } 
}

// Latihan property / method / function sendiri
class LaptopSeber {
    public $harga_laptop = 2000000; 

    public function tipe() {
        echo "laptop seber menjual tipe lenovo thinkpad";
    }

    public function tipe_laptop($tipe_laptop = 'lenovo') 
    {
        if($tipe_laptop == 'lenovo')
        {
            echo "Kami Ready Seri Lenovo Thinkpad seri X T L E";
        }elseif ($tipe_laptop == 'dell')
        {
            echo "Kami Ready Seri Dell e7470";
        }elseif ($tipe_laptop == 'macbook')
        {
            echo "Kami Ready Macbook Pro Retina 2017";
        }else{
            echo "Maaf, Kami tidak menjual laptop yang anda cari !";
        }
    }
}
// Akhir Latihan property / method / function sendiri

$mobil1= new Mobil();
$laptop = new LaptopSeber(); // // Latihan object sendiri

$mobil1->jalan(); // mobil berjalan
echo PHP_EOL;
$mobil1->move(); // mobil akan stop (pengaturan default)
echo PHP_EOL;
$mobil1->move('kiri'); // mobil mengarah kekiri
echo PHP_EOL;
$mobil1->move('ke atas'); // tidak ada pada kondisi
echo PHP_EOL;

// latihan sendiri
$laptop->tipe();
echo PHP_EOL;
$laptop->tipe_laptop(); // menampilkan data default 
echo PHP_EOL;
$laptop->tipe_laptop('dell'); // menampilkan data sesuai yang dicari
echo PHP_EOL;
$laptop->tipe_laptop('asus'); // menampilkan data yang tidak ada

//panggil method / property dari class mobil

