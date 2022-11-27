<?php 

class Mahasiswa{
    public $keterangan = "";
    public $message = "";
    
    public function nilai($nilai_uts, $nilai_uas) {

        $nilai_mahasiswa = ($nilai_uts + $nilai_uas) / 2;

        if ($nilai_mahasiswa >= 81 && $nilai_mahasiswa <= 100) { /// Kondisi  81 - 100
            $this->keterangan = "A";
            $this->message = "Excelent";
            echo  $this->keterangan;
            echo  $this->message;
        } else if ($nilai_mahasiswa >= 78 && $nilai_mahasiswa <= 80.99) { // KONDISI  78 - 80.99
            $this->keterangan = "A-";
            $this->message = "Good";
            echo  $this->keterangan;
            echo  $this->message;
        } else if ($nilai_mahasiswa >= 75 && $nilai_mahasiswa <= 77.99) {
            $this->keterangan = "B+";
            $this->message = "Not Bad";
            echo  $this->keterangan;
            echo  $this->message;
        } else if ($nilai_mahasiswa < 75) {
            $this->keterangan = "Tidak Lulus";
            $this->message = "Kepp Spirit";
            echo  $this->keterangan;
            echo  $this->message;
        } else {
            $this->keterangan = "tidak terdefinisi";
            $this->message = "Undefined";
            echo  $this->keterangan;
            echo  $this->message;
        }
    }
}

$mahasiwa1 = new Mahasiswa;
PHP_EOL;
$mahasiwa1->nilai(100, 90);
PHP_EOL;



?>