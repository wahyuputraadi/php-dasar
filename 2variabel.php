<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 - (Variabel)</title>
</head>

<body>
    <?php
    // Membuat Variabel
    $nama_lengkap = "Wahyu Putra Adi Wibowo"; // tipe data String
    $nim = 142013; // Tipe data Integer
    $nilai = 97.5; // Tipe data double
    $lulus = true; // Tipe data boolean (true / false)
    $lulus2 = "true";
    // gettype($variabelnya) => adalah fungsi dari php untuk mengecek tipe data
    ?>

    <!-- memanggil variabel -->
    <h1>Selamat Datang, <?php echo $nama_lengkap ?></h1>
    <p>Tipe data dari variabel $nama_lengkap adalah <?php echo gettype($nama_lengkap) ?></p>
    <hr>
    <p>NIM : <?php echo $nim ?></p>
    <p>Tipe data dari variabel $nim <?php gettype($nim) ?></p>
    <hr>
    <p>Nilai : <?php echo $nilai ?></p>
    <p>Tipe data dari variabel $nilai <?php echo gettype($nilai) ?></p>
    <hr>
    <p>Lulus : <?php echo $lulus ?></p>
    <p>Tipe data dari variabel $lulus <?php echo gettype($lulus) ?></p>
    <hr>
    <p>Lulus2 : <?php echo $lulus2 ?></p>
    <p>Tipe data dari variabel $lulus2 <?php echo gettype($lulus2) ?></p>
    <hr>

</body>

</html>