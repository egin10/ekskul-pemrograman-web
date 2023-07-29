<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="">
        <input type="text" name="number1" placeholder="number1">
        <input type="text" name="number2" placeholder="number2">

        <select name="operator" id="">
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select>

        <button type="submit">Hitung</button>
    </form>

    <?php

    // localhost/php-dasar/kalkulator.php?number1=12&number2=12

    if (isset($_GET['number1']) && isset($_GET['number2'])) {
        echo $_GET['number1'] + $_GET['number2'];
    }

    ?>

</body>

</html>