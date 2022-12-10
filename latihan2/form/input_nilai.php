<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <!-- kalo di form menggunakan action untuk berpindah kehalaman lain -->
        <h1>Data Nilai Siswa</h1>
        <form action="" method="post">
            <div class="mt-3 mb-3">
                <label for="formGroupExampleInput" class="form-label">Nilai UTS</label>
                <input type="number" name="nilai_uts" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nilai UTS Siswa" required>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nilai UAS</label>
                <input type="number" name="nilai_uas" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Nilai UAS Siswa" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" name="proses" type="submit">Proses</button>
            </div>
        </form>
        <!-- aksi setelah button proses di klik -->
        <?php

        if (isset($_POST['proses'])) {
            include 'class/NilaiMahasiswa.php';
            $nilai_mahasiswa = new nilaiMahasiswa;

            $nilai_uas = $_POST["nilai_uas"];
            $nilai_uts = $_POST["nilai_uts"];

            $hasil = $nilai_mahasiswa->nilai_rata($nilai_uas, $nilai_uts);
        }
        ?>

        <table class="table table-bordered">
            <tr>
                <td>Nilai Uas</td>
                <td>:</td>
                <td><?= $nilai_uas ?></td>
            </tr>
            <tr>
                <td>Nilai_uts</td>
                <td>:</td>
                <td><?= $nilai_uts ?></td>
            </tr>
            <tr>
                <td>Nilai Rata Rata</td>
                <td>:</td>
                <td><?= $hasil['nilaiRata']  ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><?= $hasil['keterangan'] ?></td>
            </tr>
            <tr>
                <td>Predikat</td>
                <td>:</td>
                <td><?= $hasil['predikat'] ?></td>
            </tr>
        </table>
    </div>
</body>

</html>