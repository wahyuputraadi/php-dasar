<?php

class PersegiPanjang
{
    public $nilai = 50;
    private $panjang = 20;
    private $lebar = 10;
    protected $alas = 25;





    // function bisa tanpa keyword public
    public function luas()
    {
        $luas = $this->panjang * $this->lebar;
        echo $luas;
    }

    // akses atribut public getAlas
    public function getAlas()
    {
        return $this->alas; //apabila dijalankan dengan return (saat menjalankan wajib echo)
    }
    // Akhir akses atribut public getAlas


    // akses atribut yang private AksesPrivate
    private function aksesPrivate()
    {
        echo "akses private berhasil"; //apabila dijalankan dengan echo (saat menjalankan tidak wajib echo)
    }
    function getAkses($akses) // buka dengan panggil dulu dengan public kemudian berikan kondisi
    {
        if ($akses == 'admin123') {
            $this->aksesPrivate();
        } else {
            echo "akses gagal !";
        }
    }
    // akhir akses atribut yang private AksesPrivate
}

$persegi = new PersegiPanjang();
// echo $persegi->panjang; // tidak bisa langsung memanggil atribut / method yg private (maka, berikan akses public dulu)
// $persergi->nilai();
echo PHP_EOL;
$persegi->luas();
echo PHP_EOL;
echo $persegi->getAlas();
echo PHP_EOL;
$persegi->getAkses('admin123'); // akses 

