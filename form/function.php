<?php

// function luas persegi panjang
function luasPersegiPanjang($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return $luas;
}

// function nilai UTS nilai UAS
function nilaiRataRata($nilai_uts, $nilai_uas)
{
    $nilai_RATARATA = ($nilai_uts + $nilai_uas) / 2;

    if ($nilai_RATARATA >= 81 && $nilai_RATARATA <= 100) { // KONDISI jika nilainya lebih besar atau sama dengan 100 
        $keterangan = "A";
        $message = "Excelent";
    } else if ($nilai_RATARATA >= 78 && $nilai_RATARATA <= 80.99) { // KONDISI rentang 90 - 99
        $keterangan = "A-";
        $message = "Good";
    } else if ($nilai_RATARATA >= 75 && $nilai_RATARATA <= 77.99) {
        $keterangan = "B+";
        $message = "Not Bad";
    } else if ($nilai_RATARATA < 75) {
        $keterangan = "Tidak Lulus";
        $message = "Kepp Spirit";
    } else {
        $keterangan = "tidak terdefinisi";
        $message = "Undefined";
    }

    // return $keterangan;
    $data = array(
        'nilaiRata' => $nilai_RATARATA,
        'keterangan' => $keterangan,
        'message' => $message,
    );

    return $data;
}
