<?php
$height = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");

foreach($height as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

echo "<hr>";


//1.
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

foreach($Lheight as $nama => $tinggi) {
    echo "Key=$nama, Value=$tinggi cm<br>";
}

echo "<hr>";

//2.
$Lweight = array(
    "Andy" => "70",
    "Barry" => "65",
    "Charlie" => "68"
);

foreach($Lweight as $nama => $berat) {
    echo "Key=$nama, Value=$berat kg<br>";
}
echo "<hr>";

?>

