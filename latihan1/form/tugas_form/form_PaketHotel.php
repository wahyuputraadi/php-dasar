<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Paket Hotel</title>


    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>


<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 shadow p-5">
                <!-- kalo di form menggunakan action untuk berpindah kehalaman lain, mengguanakan method post -->
                <h1>Pilih Paket Hotel</h1>
                <form method="post">
                    <div class="mt-3 mb-3">
                        <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                        <!-- berikan name pada input -->
                        <input type="name" name="nama_pelanggan" class="form-control" id="nama_pelanggan" placeholder="Masukkan Nama Pelanggan">
                    </div>
                    <div class="mb-3">
                        <label for="paket_hotel" class="form-label">Paket Hotel</label>
                        <select name="paket_hotel" class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="Hotel Amariz">Hotel Amariz</option>
                            <option value="Hotel Butiq">Hotel Butiq</option>
                            <option value="Hotel Wyndem">Hotel Wyndem</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_malam" class="form-label">Jumlah Malam</label>
                        <!-- berikan name pada input -->
                        <input type="number" name="jumlah_malam" class="form-control" id="jumlah_malam" placeholder="Masukkan Jumlah Malam">
                    </div>
                    <div class="mb-3">
                        <!-- ketika di submit maka dia akan ke form_hasil.php -->
                        <button class="btn btn-success" name="submit" type="submit">Proses</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- AKSI SAAT BUTTON diklik -->

    <?php
    //  $_POST['nameOfInputan'] => mengambil name dari inputan dengan method POST (sesuai method yg ada pada form) 
    // kondisi ketika button dengan name submit diklik 
    include 'function.php';
    if (isset($_POST['submit'])) {
        // siapkan wadah untuk nampung nilai/isi dari tiap inputan form yg kita isi
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $paket_hotel = $_POST['paket_hotel'];
        $jumlah_malam = $_POST['jumlah_malam'];

        $hasil = hitungTotal($nama_pelanggan, $paket_hotel, $jumlah_malam);
    ?>
        <!-- hasil ditampilkan pada template -->
        <!-- hasil inputan yg kita tampilkan menggunakan tag html biar lebih mudah stylingnya -->
        <!-- kita apit tag html ini di dalam script PHP saat aksi2 tertentu -->
        <!-- saat inputan form terisi dan button diklik, maka akan menampilkan tabel yg berisi data sesuai yg diinputkan pd form -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <h1>Output</h1>
                    <table class="table table-bordered table-striped mt-3">
                        <tr>
                            <td>Nama Pelanggan</td>
                            <td>:</td>
                            <td><?php echo $nama_pelanggan ?></td>
                        </tr>
                        <tr>
                            <td>Paket Hotel</td>
                            <td>:</td>
                            <td><?php echo $paket_hotel ?></td>
                        </tr>
                        <tr>
                            <td>Harga Satuan</td>
                            <td>:</td>
                            <td><?php echo $hasil['harga_satuan'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Malam</td>
                            <td>:</td>
                            <td><?php echo $jumlah_malam ?></td>
                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td>:</td>
                            <td><?php echo $hasil['total_harga'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</body>

</html>