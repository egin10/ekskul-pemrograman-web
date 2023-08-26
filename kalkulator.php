<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/kalkulator.css">
</head>

<body>

    <div class="navbar">
        <a href="kalkulator.php">Kalkulator</a>
        <a href="profile.php">Profile</a>
    </div>

    <form method="GET" action="">
        <input type="text" name="number1" placeholder="number1" class="input-number">
        <input type="text" name="number2" placeholder="number2" class="input-number">

        <select name="operator">
            <option value="">Pilih Operator</option>
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select>

        <button type="submit">Hitung</button>
    </form>

    <div class="hasil">
        <?php

        // localhost/php-dasar/kalkulator.php?number1=12&number2=12&operator=kali
        // hostname/domain : localhost
        // path : php-dasar/kalkulator.php
        // query-string : number1, number2, operator

        // Validasi jika number1, number2 dan operator tidak kosong (NULL)
        if (isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['operator'])) {

            switch ($_GET['operator']) {
                case "tambah":
                    echo ($_GET['number1'] + $_GET['number2']);
                    break;
                case "kurang":
                    echo ($_GET['number1'] - $_GET['number2']);
                    break;
                case "kali":
                    echo ($_GET['number1'] * $_GET['number2']);
                    break;
                case "bagi":
                    echo ($_GET['number1'] / $_GET['number2']);
                    break;
                default:
                    echo "Silahkan pilih operator yang tersedia.";
                    break;
            }
        }

        ?>

    </div>

</body>

</html>