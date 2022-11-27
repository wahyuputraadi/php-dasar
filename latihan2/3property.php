<?php 

class Mobil{
    // property
    public $roda = 4; // property $roda ini memiliki nilai default 4
    public $sepion;
}

// namaObject terserah = new namaClass
$mobil = new Mobil();
$mobil2 = new Mobil();

//panggil atribut roda
print($mobil->roda);
echo PHP_EOL;
$mobil->sepion = $mobil->roda + 2;
echo $mobil->sepion;

?>