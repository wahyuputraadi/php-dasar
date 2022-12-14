<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
           
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="1text.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Latihan 1
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="1text.php">Text</a></li>
                            <li><a class="dropdown-item" href="2variabel.php">Variabel</a></li>
                            <li><a class="dropdown-item" href="3operator.php">Operator</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="4ifelse.php">IfElse</a></li>
                            <li><a class="dropdown-item" href="5perulangan.php">Perulangan</a></li>
                            <li><a class="dropdown-item" href="6array.php">Array</a></li>
                            <li><a class="dropdown-item" href="7function.php">Function</a></li>
                            <li><a class="dropdown-item" href="./form/form1.php">form</a></li>


                        </ul>
                    </li>
                   
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

</body>

</html>