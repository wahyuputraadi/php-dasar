<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6 (Array)</title>
</head>

<body>
    <?php
    // Array => tipe data yg bisa menampung lebih dari 1 nilai
    // Array ada 2 jenis

    // 1. Array index   ing => array memiliki index di dalamnya. index dlm array dimulai dari 0
    // var_dump($buah);
    $buah = ['Anggur', 'Belimbing', 'Mangga', 'Jambu', 'Semangka'];
    $laptop = ['T450', 'T440', 'T430', 'T420'];

    echo "<hr>";
    // untuk mengambil nilai dari pada array, kita harus panggil indexnya
    echo "Ambil nilai Buah yang : " . $buah[0] . "<br>";
    echo "Ambil nilai Buah yang : " . $buah[1] . "<br>";
    echo "Ambil nilai Buah yang : " . $buah[2] . "<br>";

    echo "<hr>";
    // laptopseber
    echo "Ambil nilai Tipe Laptop : " . $laptop[0] . "<br>";
    echo "Ambil nilai Tipe Laptop : " . $laptop[1] . "<br>";
    echo "Ambil nilai Tipe Laptop : " . $laptop[2] . "<br>";
    echo "Ambil nilai Tipe Laptop : " . $laptop[3] . "<br>";

    echo "<hr>";
    // ===================================================================================================================================================
    // menampilkan isi dari array sekaligus, menggunakan foreach (alias)
    foreach ($buah as $b) {
        echo "Ambil nilai Buah yang : " . $b . "<br>";
    }

    echo "<hr>";
    // laptopseber
    foreach ($laptop as $l) {
        echo "Ambil nilai Tipe Laptop : " . $l . "<br>";
    }

    echo "<hr>";
    // ===================================================================================================================================================
    // 2. Array Associative => array yg terdiri dari key dan value 
    $nilai = array(
        //key => value
        'IPA' => 90,
        'IPS' => 85,
        'MTK' => 87
    );

    // untuk mengambil nilai dari array associative, kita panggil key.nya
    echo "Ambil nilai IPA : " .  $nilai['IPA'] . "<br>";
    echo "Ambil nilai IPS : " .  $nilai['IPS'] . "<br>";
    echo "Ambil nilai MTK : " .  $nilai['MTK'] . "<br>";
    echo "<hr>";

    // ===================================================================================================================================================
    // LaptopSeber
    $laptop = array(
        'T450' => 4500000,
        'T440' => 4000000,
        'T430' => 3350000,
        'T420' => 3000000,
    );
    echo "Ambil nilai Tipe Laptop : " . $laptop['T450'] . "<br>";
    echo "Ambil nilai Tipe Laptop : " . $laptop['T440'] . "<br>";
    echo "Ambil nilai Tipe Laptop : " . $laptop['T430'] . "<br>";
    echo "Ambil nilai Tipe Laptop : " . $laptop['T420'] . "<br>";
    echo "<hr>";
    ?>

<!-- =================================================================================================================================================== -->

    <?php
    // untuk menampilkan judul key dan isi valueny dari variabel $nilai, bisa menggunakan foreach
    foreach ($nilai as $key => $n) :  
    ?>

    <!-- disini akan ditampilkan hasil foreach dengan kombinasi tag html -->
    <?= "Key : $key, value : $n " . "<br>" ?>
    <?php
    endforeach;
    ?>

<!-- =================================================================================================================================================== -->

    <!-- Laptop Seber -->
    <hr>
    <?php 
    foreach ($laptop as $key => $l) :
    ?>
    <?= "key : $key, value : $l" . "<br>" ?>
    <?php 
    endforeach;
    ?>


    

</body>

</html>