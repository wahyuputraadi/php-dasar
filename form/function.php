<?php

// function luas persegi panjang
// function namaFungction($namaVariabel)
function luasPersegiPanjang($panjang, $lebar)
{
    // $namaVariabel yang akan direturn = $namaVariabel * namaVariabel;
    $luas = $panjang * $lebar;
    // return $namaVariabel
    return $luas;
}

// function nilai UTS nilai UAS
function nilai_rata($nilai_uts, $nilai_uas)
{
    $nilai_rata = ($nilai_uts + $nilai_uas) / 2;

    if ($nilai_rata >= 81 && $nilai_rata <= 100) { /// Kondisi  81 - 100
        $keterangan = "A";
        $message = "Excelent";
    } else if ($nilai_rata >= 78 && $nilai_rata <= 80.99) { // KONDISI  78 - 80.99
        $keterangan = "A-";
        $message = "Good";
    } else if ($nilai_rata >= 75 && $nilai_rata <= 77.99) {
        $keterangan = "B+";
        $message = "Not Bad";
    } else if ($nilai_rata < 75) {
        $keterangan = "Tidak Lulus";
        $message = "Kepp Spirit";
    } else {
        $keterangan = "tidak terdefinisi";
        $message = "Undefined";
    }

    // return $keterangan;
    $data = array(
        'nilaiRata' => $nilai_rata,
        'keterangan' => $keterangan,
        'message' => $message,
    );

    return $data;
}
