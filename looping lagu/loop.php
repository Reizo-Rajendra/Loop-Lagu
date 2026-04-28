<?php

// Nomor absen
$absen = 25;

// Menghitung total hewan (absen dikali 10)
$total = $absen * 10; // 25 x 10 = 250

// Menghitung setengah dari total
$setengah = $total / 2; // 250 / 2 = 125

echo "<h2>Looping Lagu Anak Singa</h2>";

// Perulangan dari total sampai 1 (menurun)
for($i = $total; $i >= 1; $i--) {

    // Jika jumlah hewan sudah setengah dari total
    if($i == $setengah) {
        echo "<b>Induk berkata: 'Anakku kemana? kenapa tinggal setengahnya? main kemana mereka?'</b><br><br>";
    }

    // Jika jumlah masih lebih dari 1
    if($i > 1) {
        // Menampilkan lirik lagu dengan jumlah berkurang
        echo "Tek kotek kotek kotek... anak singa turun $i, mati satu tinggal " . ($i - 1) . "<br>";
    } else {
        // Jika sudah terakhir (tinggal 1)
        echo "Tek kotek kotek kotek... anak singa turun 1, mati satu tinggal induknya<br>";
    }
}

?>