<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 (Perulangan)</title>
</head>

<body>
    <?php
    // looping FOR => perulangan yg diketahui nilai akhirnya
    /*
        for($nilaiawal; $variabel <= $batasan; $variabel++ ){
            script menampilkan atau melakukan apa sebanyak perulangan yang disetting
    }
    */
    // increment (menaik)
    for (
        $i = 1; // $nilaiawal;
        $i <= 10; // $variabel <= $batasan;
        $i++ // $variabel++ 
    ) {
        echo "Hello - $i <br>";  // menampilkan Hello = sebanyak perulangan yg disetting
    }
    echo "<hr>";
    for (
        $a = 10;
        $a >= 1;
        $a--
    ) {
        echo "Hello - $a <br>";
    }

    echo "<br>";
    // ===================================================================================================================================================
    // decrement (menurun)

    // looping WHILE => perulangan yg tidak diketahui batas akhirnya
    /*
        $nilaiawal = 1;
        while($nilaiawal <= batasan){
            script menampilkan atau melakukan apa sebanyak perulangan yang disetting

            kondisi
            apakah ++ / --
        }
     */
    $nilaiawal = 1;
    while ($nilaiawal <= 10) {
        // apa yg dilakukan
        echo "Hallo While - $nilaiawal <br>";

        // kondisi
        $nilaiawal++;
    }
    echo "<br>";
    // ===================================================================================================================================================
    // perulangan FOREACH => biasa dipakai utk perulangan pd tipe data array
    $data1 = ['BA0001', 'BA0002', 'BA0003'];
    $data2 = array('CA0001', 'CA0002', 'CA0003');

    /*
        foreach($variabel as $vr) {
            lakukan apa yg ingin dilakukan sebanyak perulangan datanya
        }
    */

    foreach ($data1 as $dt1) {
        echo "$dt1 <br>";
    }

    ?>
</body>

</html>