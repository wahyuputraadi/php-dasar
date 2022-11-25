<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>

</body>
<!-- LEBIH AMAN KARENA DATA TIDAK TAMPIL URL PADA BROWSER -->
<!-- Pengiriman Data PHP menggunakan METHOD POST -->
<div class="container">
    <form method="post">
        <div class="row mb-3 mt-5">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                   <!-- Memberikan name pada form -->
                <input type="email" name="email" class="form-control" id="inputEmail3" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                   <!-- Memberikan name pada form -->
                <input type="password" name="password" class="form-control" id="inputPassword3" required>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <!-- Memberikan name & checked default pada form -->
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Laki-laki" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <!-- Memberikan name default pada form -->
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Perempuan">
                    <label class="form-check-label" for="gridRadios2">
                        Perempuan
                    </label>
                </div>
            </div>
        </fieldset>
        <!-- Memberikan name submit pada form -->
        <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
    </form>

    <!-- Aksi Button di klik -->

    <?php
        // $_POST['nameOfInputan'] => mengambil name dari inputan dengan method GET (sesuai method yang ada pada form)

        // kondisi ketika button dengan name submit diklik
        if (isset($_POST['submit'])) {
            // siapkan wadah untuk menampung isi dari tiap inputan form yang kita isi
            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            $jenis_kelamin = $_POST['jenis_kelamin'];

            // echo "Email : $email  <br>";
            // echo "Password : $password <br>";
            // echo "Jenis Kelamin : $jenis_kelamin <br>";

        ?>
        
        <!-- hasil inputan yg kita tampilkan menggunakan tag html biar lebih mudah stylingnya -->
        <!-- kita apit tag html ini di dalam script PHP saat aksi2 tertentu -->
        <!-- saat inputan form terisi dan button diklik, maka akan menampilkan tabel yg berisi data sesuai yg diinputkan pd form -->
        <h1 class="mt-5">Data User</h1>
        <table class="table table-bordered">
            <tr>
                <td>email</td>
                <td>:</td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><?php echo $password ?></td>
            </tr>
            <tr>
                <td>email</td>
                <td>:</td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td>jenis_kelamin</td>
                <td>:</td>
                <td><?php echo $jenis_kelamin ?></td>
            </tr>
        </table>

    <?php
    }
    ?>


</div>

</html>