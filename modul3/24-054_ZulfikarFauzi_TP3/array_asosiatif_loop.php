<?php

$Lheight = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170"
);

echo "<b>Data awal Lheight:</b><br>";
foreach ($Lheight as $nama => $tinggi) {
    echo "Key = $nama, Value = $tinggi<br>";
}

// 1. Menambahkan lima data baru 
$Lheight["Diana"] = "168";
$Lheight["Edward"] = "172";
$Lheight["Fiona"] = "160";
$Lheight["George"] = "178";
$Lheight["Helen"] = "169";

echo "<br><b>Setelah menambah 5 data baru:</b><br>";
foreach ($Lheight as $nama => $tinggi) {
    echo "Key = $nama, Value = $tinggi<br>";
}

// 2. Membuat array baru Lweight
$Lweight = array(
    "Andy" => "70",
    "Barry" => "65",
    "Charlie" => "68"
);

echo "<br><b>Data Lweight:</b><br>";
foreach ($Lweight as $nama => $berat) {
    echo "Key = $nama, Value = $berat<br>";
}

?>