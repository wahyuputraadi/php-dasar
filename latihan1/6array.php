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

    // untuk mengambil nilai dari pada array, kita harus panggil indexnya
    echo "Ambil nilai Buah yang : " . $buah[0] . "<br>";
    echo "Ambil nilai Buah yang : " . $buah[1] . "<br>";
    echo "Ambil nilai Buah yang : " . $buah[2] . "<br>";

    echo "<hr>";
    // ===================================================================================================================================================
    // menampilkan isi dari array sekaligus, menggunakan foreach (alias)
    foreach ($buah as $b) {
        echo "Ambil nilai Buah yang : " . $b . "<br>";
    }

    // 2. Array Associative => array yg terdiri dari key dan value
    $nilai = array(
        //key => value
        'IPA' => 90, 'IPS' => 85, 'MTK' => 87
    );
    echo "<br>";
    // untuk mengambil nilai dari array associative, kita panggil key.nya
    echo "Ambil nilai IPA : " .  $nilai['IPA'] . "<br>";
    echo "Ambil nilai IPS : " .  $nilai['IPS'] . "<br>";
    echo "Ambil nilai MTK : " .  $nilai['MTK'] . "<br>";
    echo "<hr>";

    ?>

    <?php
    // untuk menampilkan judul key dan isi valueny dari variabel $nilai, bisa menggunakan foreach
    foreach ($nilai as $key => $n) :
    ?>
        <!-- disini akan ditampilkan hasil foreach dengan kombinasi tag html -->
        <?= "Key : $key, value : $n " . "<br>" ?>
    <?php
    endforeach;
    ?>

</body>

</html>