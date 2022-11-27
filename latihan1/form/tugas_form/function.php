<?php

function hitungTotal($nama_pelanggan, $paket_hotel, $jumlah_malam)
{
    if($paket_hotel == 'Hotel Amariz'){
        $harga_satuan = 250000;
        $total_harga = $harga_satuan * $jumlah_malam;
    }elseif($paket_hotel == 'Hotel Butiq'){
        $harga_satuan = 350000;
        $total_harga = $harga_satuan * $jumlah_malam;
    }elseif($paket_hotel ='Hotel Wyndem'){
        $harga_satuan = 225000;
        $total_harga = $harga_satuan * $jumlah_malam;
    }

    $data = [
      'nama_pelanggan' => $nama_pelanggan,
      'paket_hotel' => $paket_hotel,
      'jumlah_malam' => $jumlah_malam,
      'harga_satuan' => $harga_satuan,
      'total_harga' => $total_harga,
    ];

    return $data;
    
}

?>