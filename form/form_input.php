<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <h1>Data Panjang x Lebar</h1>
                <form action="form_hasil.php" method="post">
                    <div class="mt-3 mb-3">
                        <label for="formGroupExampleInput" class="form-label">Panjang</label>
                        <!-- berikan name pada input -->
                        <input type="number" name="panjang" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Luas Panjang">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Lebar</label>
                           <!-- berikan name pada input -->
                        <input type="number" name="lebar" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Luas Lebar">
                    </div>
                    <div class="mb-3">
                        <!-- ketika di submit maka dia akan ke form_hasil.php -->
                        <button class="btn btn-success" type="submit">Proses</button>
                    </div>
                </form>
            </div>
       </div>
    </div>
</body>

</html>