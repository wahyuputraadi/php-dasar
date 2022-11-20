<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_hasil_nilai</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <?php

    // nilai panjang yang diterima dari form_input.php, sesuaikan methodnya dengan method form pengirim
    $nilai_uts = $_POST['nilai_uts'];
    // nilai lebar yang diterima dari form_input.php, sesuaikan methodnya dengan method form pengirim
    $nilai_uas = $_POST['nilai_uas'];

    // untuk luas kita menggunakan function luasPersegiPanjang($panjang * $lebar) yang ada di file function.php
    // masukkan file function.php ke dalam file yang membutuhkan
    // sesuaikan lokasi function
    // include '../1text.php'; => dll
    include 'function.php';
    $hasil = nilaiRataRata($nilai_uts, $nilai_uas);

    ?>
</head>
<!-- Menerima inputan dari form_input.php -->
<!-- Sesuaikan method yang dipakai dari form_input.php -->

<body>

    <div class="container mt-5">
        <table class="table table-bordered table-striped">
            <tr>
                <td>nilai uts</td>
                <td>:</td>
                <td><?php echo $nilai_uts ?></td>
            </tr>
            <tr>
                <td>nilai uas</td>
                <td>:</td>
                <td><?php echo $nilai_uas ?></td>
            </tr>
            <tr>
                <td>nilai rata-rata</td>
                <td>:</td>
                <td><?php echo $hasil['nilaiRata'] ?></td>
            </tr>
            <tr>
                <td>nilai keterangan</td>
                <td>:</td>
                <td><?php echo $hasil['keterangan'] ?></td>
            </tr>
            <tr>
                <td>nilai message</td>
                <td>:</td>
                <td><?php echo $hasil['message'] ?></td>
            </tr>
        </table>
    </div>

</body>

</html>