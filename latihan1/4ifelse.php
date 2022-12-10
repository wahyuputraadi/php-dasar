<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 - (IF ELSE)</title>
</head>

<body>
    <?php
    $nilai_UTS = 100;
    $nilai_UAS = 120;
    $nilai_RATARATA = ($nilai_UTS + $nilai_UAS) / 2;

    // laptopseber
    $t450 = 2900000;
    $t440 = 2800000;
    $harga_jual = 4500000;
    $rata_keuntungan = ($harga_jual - $t450) ;

    if ($rata_keuntungan == 1600000 ) 
    {
        $hasil = "keuntungan kamu adalah Rp 1.600.000" ;
    } else {
       $hasil = "semangat cari cuan";
    }

    // percabangan 2 kondisi
    if ($nilai_RATARATA == 100) {
        // = (sama dengan satu itu artinya memberikan suatu nilai pada variabel) 
        // == (sama dengan double itu artinya membandingkan suatu nilai, bukan memberikan nilai) 
        // === (sama dengan triple itu astinya membandingkan suatu nilai (isinya) daj juga tipe datanya)
        // >= lebih besar sama dengan 
        // <= lebih kecil sama dengan
        // && dan
        $keterangan1 = "LULUS";
    } else { // konsisi selainnya 
        $keterangan1 = "SEMANGAT, BELAJAR LAGI!";
    }

    // Percabangan 3 kondisi
    if ($nilai_RATARATA >= 100){ // KONDISI jika nilainya lebih besar atau sama dengan 100 
        $keterangan2 = "KET 2 : LULUS"; // Ngapain
    } else if ($nilai_RATARATA >= 90 && $nilai_RATARATA <= 99) { // KONDISI rentang 90 - 99
        $keterangan2 = "KET 2 : RATA-RATA"; // Ngapain
    } else { // Kondisi terakhir ketika tidak memenuhi persyaratan sebelumnya
        $keterangan2 = "KET 2 : TIDAK LULUS";
    }

    // login
    $username = "Sydemy";
    $password = "123";
    // kondisi membandingkan nilai dari variabel beserta tipe datanya
    if ($username == "Sydemy" && $password === "123") {
        $success = "Ya";
    } else {
        $success = "Tidak";
    }

    // if else versi 2
    $data = "DATA";
    if ($data == "DATA") :
        $valid = true;
    else :
        $valid = false;
    endif;
    ?>

    <!-- HASIL -->
    <!-- print data -->
    <p>Keterangan 1 : <?= $keterangan1; ?></p>
    <p>Keterangan 2 : <?= $keterangan2; ?></p>
    <p>Apakah Password Benar ? <?= $success ?></p>
    <p>print data : <?= $valid ?></p>
    <p>keuntungan t450 : <?= $hasil ?></p>

</body>

</html>