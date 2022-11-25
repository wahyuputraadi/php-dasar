<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_hasil</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<!-- Menerima inputan dari form_input.php -->
<!-- Sesuaikan method yang dipakai dari form_input.php -->

<?php
// Nilai panjang & lebar yang diterima dari function form_input.php, sesuaikan methodnya dengan method form pengirim
// $VariabelDariFunction =  $_namaMethod['namaDariInputForm'];
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];

// untuk perhitungan luasnya, kita menggunakan function luasPersegiPanjang($panjang, $lebar) yg ada di file function.php
// sesuaikan lokasi function = include '../1text.php'; => dll
include 'function.php';
// masukkan file function.php ke dalam file yg membutuhkan (form_hasil.php)
// $namaVariabel = $VariabelDariFunction($namaVariabelDariFunction, $namaVariabelDariFunction );
$luas = luasPersegiPanjang($panjang, $lebar);

?>

<body>
    <!-- Panggil & tampilkan menggunakan html -->
    <div class="container mt-5">
       <div class="row justify-content-center">
        <div class="col-lg-6 ">
            <h1>Hasil Penjumlahan</h1>
            <table class="table table-bordered table-striped mt-3">
                <tr>
                    <td>Panjang</td>
                    <td>:</td>
                    <td><?php echo $panjang ?></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td><?php echo $lebar ?></td>
                </tr>
                <tr>
                    <td>Total luas</td>
                    <td>:</td>
                    <td><?php echo $luas ?></td>
                </tr>
            </table>
        </div>
       </div>
    </div>




</body>

</html>