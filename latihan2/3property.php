<?php

class Mobil
{
    // ini adalah property
    public $roda = 4; // property $roda ini memiliki nilai default 4
    public $sepion;
}

// Latihan Sendiri
class LaptopSeber
{
    public $harga_laptop = 2000000; 
}

// namaObject terserah = new namaClass
$mobil = new Mobil();
$mobil2 = new Mobil(); 
$laptop = new LaptopSeber(); // Latihan sendiri

//panggil atribut roda
print($mobil->roda); // bisa print bisa echo
echo PHP_EOL; // enter di PHP
echo $mobil->roda + 2; // mengisikan suatu nilai ke dalam atribut class
echo PHP_EOL;

// Latihan Sendiri
echo $laptop->harga_laptop; // harga normal laptop 
echo PHP_EOL;
echo $laptop->harga_laptop + 500000; // keuntungan laptop 
