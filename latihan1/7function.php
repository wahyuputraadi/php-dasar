<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 7 (Function / Method)</title>
</head>

<body>
    <?php
    // Function => kelompok script yg berupa instruksi2 (fungsi yg kita buat)
    /*  
        1. function tanpa menerima parameter / inputan
        function namaFunctionKita() {
        }

        2. function yg menerima parameter / inputan
        function namaFunctionKita(parameter) {
        }
    */
    // ===================================================================================================================================================
    function cetakHello()
    {
        // script yg dijalankan
        echo "Halloooo";
    }

    function getData()
    {
        return "Data berhasil diget"; // jika menggunakan return saat panggil wajib menggunakan echo
    }

    // laptopseber
    function cetakLaptop()
    {
        echo "Hallo LaptopSeber"; //jika menggunakan echo saat panggil tidak wajib menggunakan echo
    }

    // ===================================================================================================================================================
    function luasSegitiga($alas, $tinggi)
    {
        // proses hitung luas
        $luas = $alas * $tinggi / 2;

        // biar hasil perhitungan di function ini bisa dipakai, maka kita return hasilnya
        return $luas;
    }

    // ===================================================================================================================================================
    // laptopseber
    function hargaJual($harga_t420, $margin)
    {
        $keuntungan = ($harga_t420 + $margin) - $harga_t420;
        return $keuntungan;
    }

    // ===================================================================================================================================================
    function pesan($waktu, $nama)
    {
        echo "Selamat $waktu , <br>";
        echo "Perkenalkan, nama saya $nama, <br>";
    }

    pesan("siang", "wahyu putra adi");
    // cara panggil function => cetakHallo()

    function laptopSeber($nama, $promo)
    {
        echo "selamat datang $nama, <br>";
        echo "kode promo hari ini adalah $promo, <br>";
    }

    laptopSeber("wahyu putra adi", "sebermania");



    ?>

    <!-- diluar php panggil pada template-->
    <h1>Panggil function cetakHello() : <?= cetakHello(); ?></h1>
    <p>Panggil function getData() : <?= getData() . " Terimakasih"; ?> </p>
    <h5>Panggil function luasSegitiga($alas, $tinggi) <?= luasSegitiga(20, 35) ?> </h5>

    <!-- Laptopseber -->
    <h1>Panggil function hello pada cetakHello : <?= cetakLaptop(); ?></h1>
    <h2>Keuntungan Laptop T420 adalah : <?= hargaJual(2900000, 1000000) ?></h2>

    

</body>

</html>