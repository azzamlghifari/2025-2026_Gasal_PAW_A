<pre>
<?php

$height = array("Andy"=>" 176 ", "Barry"=>" 165 ", "Charlie"=>" 170 ");
echo " Andi is " . $height['Andy'] . "cm tall.";
echo "<br>";

//soal 3.3.1
//menambahkan 5 array data baru
$height["Daffa"] = "155";
$height["Diaz"] = "170";
$height["Bila"] = "152";
$height["hilmy"] = "160";
$height["mahir"] = "100";

echo " 5 data yang sudah di tambahkan : <br>";
print_r($height);
echo "<br>";

//menampilkan nilai indeks terakhir dari array
$indeksakhir = array_key_last($height);
$last_value = $height[$indeksakhir];
echo "Data terakhir : " . $indeksakhir . "<br>";
echo "Nilai dengan indeks terakhir : " . $last_value .
" cm<br>";
echo "Pesan lengkap : " . $indeksakhir . " is " .
$last_value . " cm tall.<br><br>";

//soal 3.3.2
//menghapus satu data tertentu dari array

echo "<br>";
$hapusdata = "hilmy";
$hapus = $height[$hapusdata];
unset($height[$hapusdata]);

echo "data yang di hapus : " . $hapusdata . " (" . $hapus . " cm) <br> ";
echo "setelah 1 data di hapus:<br>";
print_r($height);
 
echo"<br>";

//menampilkan nilai indeks terakhir dari array
$last_key_after = array_key_last($height);
$last_value_after = $height[$last_key_after];
echo "data terakhir setelah penghapusan:" . $last_key_after. "<br>";
echo "Nilai dengan indeks terakhir setelah penghapusan: ". $last_value_after . " cm <br>";
echo "Pesan lengkap: ". $last_key_after ." is " . $last_value_after ."cm tall . <br><br>";

//soal 3.3.3
// membuat array baru dengan 3 buah data baru

$weight = array("surya"=>"65","Aisy"=>"45", "Lia"=>"60");

echo " 3 buah data Array baru : <br>";
print_r($weight);
echo"<br>";

// menampilkan data kedua dari array $weight

$keys = array_keys($weight);
$second_key = $keys[1];  //Indeks 1 untuk data ke-2
$second_value = $weight[$second_key];
echo " Data ke-2 dari array \$weight: <br>";
echo " Kunci : " . $second_key . "<br>";
echo " Nilai : " . $second_value ." kg <br>";
echo " Pesan lengkap: ". $second_key . " weighs " . $second_value. " kg <br><br>";

?>
</pre>