<?php
//1.
$height = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");
echo "Andy is " . $height['Andy'] . " cm tall.<br>";
echo "<hr>";

$Lheight = array(
  "Andy" => "176",
  "Barry" => "165",
  "Charlie" => "170"
);

// Menambahkan lima data baru
$Lheight["Diana"] = "160";
$Lheight["Edward"] = "172";
$Lheight["Frank"] = "168";
$Lheight["Gina"] = "169";
$Lheight["Henry"] = "174";

// Menampilkan semua data
foreach ($Lheight as $nama => $tinggi) {
    echo "$nama = $tinggi cm<br>";
}

// Menampilkan nilai terakhir
$keys = array_keys($Lheight);
$lastKey = end($keys);
echo "<br>Data terakhir: $lastKey = " . $Lheight[$lastKey] . " cm:<br>";

echo "<hr>";

//2.
// menghapus data 
unset($Lheight["Charlie"]);

foreach ($Lheight as $nama => $tinggi) {
    echo "$nama = $tinggi cm<br>";
}

$keys = array_keys($Lheight);
$lastKey = end($keys);
echo "<br>Data terakhir setelah penghapusan: $lastKey = " . $Lheight[$lastKey] . " cm:<br>";

echo "<hr>";

//3.
$Lweight = array(
  "Andy" => "70",
  "Barry" => "65",
  "Charlie" => "68"
);

echo "Data kedua dari array Lweight adalah: " . $Lweight["Barry"] . " kg:<br>";

?>
