<?php
// ARRAY ASSOCIATIVE
// Array yang index adalah string yang kita buat sendiri
    $mahasiswa = [
                    ['Nama' => 'Naufal', 'Makanan' => '🍕', 'Binatang' => '🐰'], 
                    ['Nama' => 'Sayyid', 'Makanan' => '🍔', 'Binatang' => '🦄'], 
                    ['Nama' => 'Akbar', 'Makanan' => '🥩', 'Binatang' => '🦖'], 
                    ['Nama' => 'Matthew', 'Makanan' => '🍗', 'Binatang' => '🐔'], 
                    ['Nama' => 'Gates', 'Makanan' => '🍖', 'Binatang' => '🐈']
                ];

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
    <body>
     <h2>Daftar Mahasiswa</h2>
        <?php foreach ($mahasiswa as $m) { ?>
            <ul>
                <li> Nama : <?=$m ["Nama"]; ?></li>
                <li>Makanan Favorit : <?= $m ["Makanan"]; ?></li>
                <li>Peliharaan : <?= $m ["Binatang"]; ?></li>
            </ul>
        <?php } ?>
    </body>

</html>