<?php
// Menentukan jumlah baris dan kolom
$jumlahBaris = 15;
$jumlahKolom = 5;

// Memulai tabel
echo "<table border='1' cellpadding='5' cellspacing='0'>";

// Looping untuk baris
for ($baris = 1; $baris <= $jumlahBaris; $baris++) {
    echo "<tr>";
    
    // Looping untuk kolom di setiap baris
    for ($kolom = 1; $kolom <= $jumlahKolom; $kolom++) {
        echo "<td>Baris $baris Kolom $kolom</td>";
    }
    
    echo "</tr>";
}

// Mengakhiri tabel
echo "</table>";
?>