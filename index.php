<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Tipe Data</h4>

    <?php

    // String
    $nama1 = "Ini adalah string 1 23 121 2";
    echo $nama1;

    echo "<br />";

    // Integer
    $number = 1;
    echo $number;

    echo "<br />";

    // Float
    $decimal = 1.27;
    echo $decimal;

    echo "<br />";

    // Boolean
    $isNumber = true;
    $isNotNumber = false;
    echo $isNumber;
    echo $isNotNumber;

    echo "<br />";

    // Array
    $listSiswa = ['Rahmat', 'Susi', 'Hamdan'];
    print_r($listSiswa);
    echo $listSiswa[0];

    echo "<br />";

    // Object
    $siswa = [
        'nama' => 'Egin',
        'kelas' => 'TKJ',
    ];
    print_r($siswa);
    echo $siswa['kelas'];

    echo '<br />';

    // NULL
    $isNull = NULL;
    echo $isNull;

    ?>

</body>

</html>