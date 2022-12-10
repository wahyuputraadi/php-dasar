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
    public function getAlas(){
        return $this->alas; //apabila dijalankan dengan return (saat menjalankan wajib echo)
    }
    // Akhir akses atribut public getAlas


    // akses atribut yang private AksesPrivate
    private function aksesPrivate() {
        echo "akses private berhasil"; //apabila dijalankan dengan echo (saat menjalankan tidak wajib echo)
    }
    function getAkses($akses) // buka dengan panggil dulu dengan public kemudian berikan kondisi
    {
        if ($akses == 'admin123') 
        {
            $this->aksesPrivate();
        } else {
            echo "akses gagal !";
        }
    }
    // akhir akses atribut yang private AksesPrivate
}

// Latihan Property / Method / Function / Visibility Sendiri
class LaptopSeber{
    public $harga_laptop = 5000000;
    public $keuntungan_laptop = 500000;
    private $modal = 4500000;
    protected $distributor = 'technoca';

    // public
    function total_harga()
    { 
        $total_harga = $this->harga_laptop + $this->keuntungan_laptop;
        echo $total_harga;
    }

    // private
    public function openModal()
    {
        return $this->modal;
    }

    // private function
    private function loginBerhasil()
    {
        echo "Login Berhasil";
    }
    public function getAkses($akses)
    {
        if($akses == "admin")
        {
            echo $this->loginBerhasil();
        }else{
            echo "akses gagal !";
        }
    }

    // protector
    public function seller()
    {
        return $this->distributor;
    }
}
// Akhir Latihan Property / Method / Function / Visibility Sendiri

$persegi = new PersegiPanjang();
$laptop = new LaptopSeber();
// echo $persegi->panjang; // tidak bisa langsung memanggil atribut / method yg private (maka, berikan akses public dulu)
// $persergi->nilai();
echo PHP_EOL;
$persegi->luas();
echo PHP_EOL;
echo $persegi->getAlas();
echo PHP_EOL;
$persegi->getAkses('admin123'); // akses 

// Latihan Property / Method / Function / Visibility Sendiri
echo PHP_EOL;
$laptop->total_harga();
echo PHP_EOL;
echo $laptop->openModal();
echo PHP_EOL;
$laptop->getAkses('admin'); // akses private berhasil
echo PHP_EOL;
$laptop->getAkses('admin123'); // akses private gagal
echo PHP_EOL;
echo $laptop->seller(); // akses protected distributor

