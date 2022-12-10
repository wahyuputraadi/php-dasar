<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <?php
    $title = "Latihan 3 (Operator)";
    // variabel
    $a = 7;
    $b = 3;
    // laptopseber
    $modal_x230 = 1700000;
    $keuntungan = 1000000;

    //operator (kolaborasi dengan nama variabel)
    $a + $b;
    $penjumlahan = $a + $b;
    $pengurangan = $a - $b;
    $perkalian = $a * $b;
    $pembagian = $a / $b;
    $sisa_bagi = $a % $b;
    $pangkat =  $a ** $b;

    // laptopseber
    $omset = $modal_x230 + $keuntungan;
    echo $omset;

    ?>

    <h1>Hasil dari Penjumlahan <?= $a ?> + <?= $b ?> </h1>
    <!-- versi variabel satu satu -->
    <p>hasil dari <b>penjumlahan</b> <?= $a ?> + <?= $b ?> = <?= $penjumlahan ?> </p>
    <!-- varsi variabel menggunakan string "" -->
    <p>hasil dari <b>penjumlahan</b> <?= "$a +  $b = $penjumlahan " ?> </p>
    <!-- versi variabel menggunakan concep '' -->
    <p>hasil dari <b>penjumlahan</b> <?= $a . '+' . $b . '=' . $penjumlahan; ?> </p>
    <hr>
    <p>hasil dari <b>pengurangan</b> <?= $a ?> - <?= $b ?> = <?= $pengurangan ?> </p>
    <hr>
    <p>hasil dari <b>perkalian</b> <?= $a ?> * <?= $b ?> = <?= $perkalian ?> </p>
    <hr>
    <p>hasil dari <b>pembagian</b> <?= $a ?> / <?= $b ?> = <?= $pembagian ?> </p>
    <hr>
    <p>hasil dari <b>sisa_bagi</b> <?= $a ?> % <?= $b ?> = <?= $sisa_bagi ?> </p>
    <hr>
    <p>hasil dari <b>pangkat</b> <?= $a ?> ** <?= $b ?> = <?= $pangkat ?> </p>
    <!-- laptop seber -->
    <hr>
    <p>jumlah omset laptopseber pada produk x230 adalah : <?= $omset ?></p>


</body>

</html>