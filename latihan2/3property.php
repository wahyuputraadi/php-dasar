<?php 

class Mobil{
    // ini adalah property
    public $roda = 4; // property $roda ini memiliki nilai default 4
    public $sepion;
}

// namaObject terserah = new namaClass
$mobil = new Mobil();
$mobil2 = new Mobil();

//panggil atribut roda
print($mobil->roda);
echo PHP_EOL; // enter di PHP
$mobil->sepion = $mobil->roda;
$mobil->sepion = $mobil->roda + 2; // mengisikan suatu nilai ke dalam atribut class
echo $mobil->sepion;

?>