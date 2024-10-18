<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2b Denia</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            text-align: center;
            line-height: 30px;
            margin: 5px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    $baris = 5; // Jumlah baris

    // Loop untuk menampilkan kotak sesuai dengan gambar
    for ($i = 1; $i <= $baris; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='kotak'>$j</div>";
        }
        echo "<div class='clear'></div>"; // Memastikan setiap baris baru dimulai dari posisi kiri
    }
    ?>
</body>
</html>
