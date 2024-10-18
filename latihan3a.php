<?php
// Fungsi untuk mengubah style dari tulisan
function ganti_style($tulisan, $kelas) {
    return "<span class='$kelas'>$tulisan</span>";
}

// Variabel tulisan dan kelas CSS
$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

// Memanggil fungsi ganti_style dan menampilkannya
echo ganti_style($tulisan, $kelas);
?>

<!-- HTML untuk menerapkan style -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3a</title>
    <style>
        .ganti-style {
            font-size: 28px;
            font-family: Arial, sans-serif;
            color: #1A0547;
            font-style: italic;
            font-weight: bold;
        }
    </style>
</head>
<body>
</body>
</html>

