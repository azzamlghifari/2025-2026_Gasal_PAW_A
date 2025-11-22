<?php
echo "<h2>1. Implementasi fungsi array_push()</h2>";
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Durian", "Mango");

echo "Isi array setelah array_push():<br>";
foreach ($fruits as $fruit) {
    echo "$fruit<br>";
}

echo "<hr>";


echo "<h2>2. Implementasi fungsi array_merge()</h2>";
$buah = array("Apple", "Banana", "Cherry");
$sayur = array("Carrot", "Spinach", "Broccoli");
$gabung = array_merge($buah, $sayur);

echo "Hasil penggabungan array:<br>";
foreach ($gabung as $item) {
    echo "$item<br>";
}

echo "<hr>";


echo "<h2>3. Implementasi fungsi array_values()</h2>";
$height = array("Andy" => 176, "Barry" => 165, "Charlie" => 170);
$values = array_values($height);

echo "Isi array hasil array_values():<br>";
foreach ($values as $v) {
    echo "$v<br>";
}

echo "<hr>";


echo "<h2>4. Implementasi fungsi array_search()</h2>";
$fruits = array("a" => "Apple", "b" => "Banana", "c" => "Cherry");
$key = array_search("Banana", $fruits);

echo "Nilai 'Banana' ditemukan pada key: $key";

echo "<hr>";


echo "<h2>5. Implementasi fungsi array_filter()</h2>";
$numbers = array(1, 2, 3, 4, 5, 6);

$even = array_filter($numbers, function($num) {
    return $num % 2 == 0; 
});

echo "Angka genap dari array:<br>";
foreach ($even as $val) {
    echo "$val<br>";
}

echo "<hr>";


echo "<h2>6. Implementasi berbagai fungsi sorting pada array</h2>";
$age = array("Andy" => 21, "Barry" => 19, "Charlie" => 23);

echo "Urut berdasarkan nilai (asort):<br>";
asort($age);
foreach ($age as $name => $val) {
    echo "$name = $val<br>";
}

echo "<br>Urut berdasarkan key (ksort):<br>";
ksort($age);
foreach ($age as $name => $val) {
    echo "$name = $val<br>";
}

echo "<hr>";
?>
