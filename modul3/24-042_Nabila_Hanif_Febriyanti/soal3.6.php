<?php
//soal 3.6.1
//Implementasi fungsi array_push()!

echo " <h4>Hasil fungsi array_push()! : </h4>";
$fruits = array("papaya", "Avocado");
array_push($fruits, "kiwi", "Peach"); // menambah 2 elemen baru
print_r($fruits);
echo "<br>";

//soal 3.6.2
//Implementasi fungsi array_merge()!
echo " <h4>Hasil fungsi array_merge()! : </h4>";
$fruits = array("Apple", "Banana");
$veggies = array("Carrot", "Spinach");
$mix = array_merge($fruits, $veggies); //gabungan dari 2 array menjadi 1 array baru
print_r($mix);
echo "<br>";

//soal 3.6.3
//Implementasi fungsi array_values()!
echo " <h4>Hasil fungsi array_values()! : </h4>";
$person = array("name" => "Bila", "age" => 19, "city" => "Gresik");
$values = array_values($person);
print_r($values);
echo "<br>";

//soal 3.6.4
//Implementasi fungsi array_search()!
echo " <h4>Hasil fungsi array_search()! : </h4>";
$nilai = array("Diaz" => 20, "Bila" => 19, "Mahir" => 5);
$key = array_search(20, $nilai); //mencari nilai (value) di dalam array
echo "Nilai 20 dimiliki oleh : " . $key;
echo "<br>";

//soal 3.6.5
//Implementasi fungsi array_filter()!
echo " <h4>Hasil fungsi array_filter()! : </h4>";
$numbers = array(1, 2, 3, 4, 5, 6);
$odd = array_filter($numbers, function($n) {
    return $n % 2 != 0; // ambil bilangan ganjil
});
print_r($odd);
echo "<br>";

//soal 3.6.6
//Implementasi berbagai fungsi sorting pada array!
echo " <h4>Hasil berbagai fungsi sorting pada array! : </h4>";
$ages = array("Diaz"=>21, "Bila"=>22, "Mahir"=>20);
$fruits = array("Banana", "Apple", "Cherry", "Mango");
$numbers = array(10, 3, 25, 7);

echo "<b>sort()</b><br>";
echo "<b>Nilai naik </b><br>";
sort($fruits);
print_r($fruits);
echo " <br><br>";

echo "<b>rsort()descending</b><br>";
echo "<b>Nilai turun </b><br>";
rsort($fruits);
print_r($fruits);
echo " <br><br>";

echo "<b>asort()</b><br>";
echo "<b>Nilai naik </b><br>";
asort($ages);
print_r($ages);
echo " <br><br>";

echo "<b>arsort()descending</b><br>";
echo "<b>Nilai turun </b><br>";
arsort($ages);
print_r($ages);
echo " <br>";

echo "<br><b>ksort()</b><br>";
echo "<b>Nilai naik </b><br>";
ksort($numbers);
print_r($numbers);
echo "<br>";

echo "<br><b>ksort()descending</b><br>";
echo "<b>Nilai turun </b><br>";
krsort($numbers);
print_r($numbers);
echo "<br>";
?>