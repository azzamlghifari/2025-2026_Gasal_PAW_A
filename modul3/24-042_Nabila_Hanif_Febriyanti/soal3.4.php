<?php
$height = array("Andy"=>" 176 ", "Barry"=>" 165 ", "Charlie"=>" 170 ");

foreach($height as $x => $x_value) {
    echo "key=" . $x . ", value=" . $x_value;
    echo "<br>";
}

echo "<br>";

//soal 3.4.1
//menambahkan 5 data baru ke dalam array 
$databaru = array(
    "Daffa" => "155",
    "Diaz" => "170",
    "Bila" => "152",
    "Hilmy" => "160",
    "Mahir" => "100",
 );
foreach($databaru as $a => $b) {
$height[$a] = $b;
}

echo " 5 buah data yang sudah di tambahkan : <br>";
foreach($height as $key => $value) {
echo "Key= " . $key . ", Value= " . $value . "<br>";
}
echo "<br>";

//soal 3.4.2
//membuat array baru dengan 3 buah data baru
$lweight = array("Surya"=>"65","Aisy"=>"45", "Lia"=>"60");
echo " 3 buah data Array baru \$weight : <br>";
foreach($lweight as $person => $kg) {
    echo $person . " = " . $kg . " kg<br>";
}
?>