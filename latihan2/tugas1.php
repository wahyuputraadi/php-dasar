<?php 

class Mahasiswa{
    public $keterangan;
    public $pesan;
    
    public function nilai($nilai_uts, $nilai_uas) {

        $nilai_mahasiswa = ($nilai_uts + $nilai_uas) / 2;

        if ($nilai_mahasiswa >= 81 && $nilai_mahasiswa <= 100) { /// Kondisi  81 - 100
            $this->keterangan = "A";
            $this->pesan = "Excelent";
            echo  $this->keterangan;
            echo  $this->pesan;
        } else if ($nilai_mahasiswa >= 78 && $nilai_mahasiswa <= 80.99) { // KONDISI  78 - 80.99
            $this->keterangan = "A-";
            $this->pesan = "Good";
            echo  $this->keterangan;
            echo  $this->pesan;
        } else if ($nilai_mahasiswa >= 75 && $nilai_mahasiswa <= 77.99) {
            $this->keterangan = "B+";
            $this->pesan = "Not Bad";
            echo  $this->keterangan;
            echo  $this->pesan;
        } else if ($nilai_mahasiswa < 75) {
            $this->keterangan = "Tidak Lulus";
            $this->pesan = "Kepp Spirit";
            echo  $this->keterangan;
            echo  $this->pesan;
        } else {
            $this->keterangan = "tidak terdefinisi";
            $this->pesan = "Undefined";
            echo  $this->keterangan;
            echo  $this->pesan;
        }
    }
}

$mahasiwa1 = new Mahasiswa;
PHP_EOL;
$mahasiwa1->nilai(78,  80);
PHP_EOL;



?>