<?php

// 1.1 Membuat array asosiatif Lheight
$Lheight = array(
    "Andi" => 170,
    "Budi" => 165,
    "Citra" => 160
);

// 1.2 Tambahkan lima data baru ke array Lheight
$Lheight["Dewi"] = 172;
$Lheight["Eko"] = 168;
$Lheight["Fani"] = 175;
$Lheight["Gilang"] = 169;
$Lheight["Hana"] = 166;

// 1.3 Tampilkan seluruh data dan nilai terakhir
echo "<b>Isi array Lheight setelah menambah 5 data:</b><br>";
print_r($Lheight);
echo "<br>";

$kunci_terakhir = array_key_last($Lheight);
echo "<br>Kunci terakhir: $kunci_terakhir";
echo "<br>Nilainya: " . $Lheight[$kunci_terakhir];


// 2.1 Hapus satu data tertentu dari array Lheight
unset($Lheight["Eko"]);

echo "<br><br><b>Setelah menghapus satu data (Eko):</b><br>";
print_r($Lheight);


$new_last_key = array_key_last($Lheight);
echo "<br><br>Kunci terakhir setelah dihapus: $new_last_key";
echo "<br>Nilainya: " . $Lheight[$new_last_key];


// 3.1 Buat array baru dengan nama Lweight yang memiliki tiga data
$Lweight = array(
    "Andi" => 60,
    "Budi" => 55,
    "Citra" => 50
);

// 3.2 Tampilkan data kedua dari Lweight
$keys = array_keys($Lweight);
$kunci_kedua = $keys[1];
echo "<br><br><b>Data kedua dari Lweight:</b><br>";
echo $kunci_kedua . " = " . $Lweight[$kunci_kedua];

?>
