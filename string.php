<?php

$judul = 'Selamat Datang di SMKN 1 Bengalon';
echo "Jumlah Karakter : " . strlen($judul);

echo "<br/>";

echo "Jumlah Kata : " . str_word_count($judul);

echo "<br/>";

echo "Cari kata <strong>Datang</strong> : " . strpos($judul, 'Datang');

echo "<br/>";

echo "Ganti kata <strong>Selamat</strong> : " . str_replace('Selamat', 'Halo', $judul);
