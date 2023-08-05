<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/kalkulator.css">
</head>

<body>

    <form method="GET" action="">
        <input type="text" name="number1" placeholder="number1" class="number1">
        <input type="text" name="number2" placeholder="number2" class="font-kecil">

        <select name="operator" id="">
            <option value="">Pilih Operator</option>
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select>

        <button type="submit" class="font-besar">Hitung</button>
    </form>

    <li class="number1 font-besar">
        <ul class="font-pilihan">
            <p class="test-1">
                Test1
            </p>
        </ul>
        <ul>Test2</ul>
        <ul>Test3</ul>
    </li>

    <?php

    // localhost/php-dasar/kalkulator.php?number1=12&number2=12&operator=kali
    // hostname/domain : localhost
    // path : php-dasar/kalkulator.php
    // query-string : number1, number2, operator

    // Validasi jika number1, number2 dan operator tidak kosong (NULL)
    if(isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['operator'])) {
        
        switch($_GET['operator']) {
            case "tambah":
                echo "Hasil : " . ($_GET['number1'] + $_GET['number2']);
                break;
            case "kurang":
                echo "Hasil : " . ($_GET['number1'] - $_GET['number2']);
                break;
            case "kali":
                echo "Hasil : " . ($_GET['number1'] * $_GET['number2']);
                break;
            case "bagi":
                echo "Hasil : " . ($_GET['number1'] / $_GET['number2']);
                break;
            default:
                echo "Silahkan pilih operator yang tersedia.";
                break;
        }

    } else {
        echo 'Number1, Number2 dan Operator harus terisi.';
    }

    ?>

</body>

</html>