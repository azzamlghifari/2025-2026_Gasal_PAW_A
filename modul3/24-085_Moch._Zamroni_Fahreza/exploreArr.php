<?php
$numbers = [5, 2, 9, 1, 7];
$names = [
  "Andy" => "176", 
  "Barry" => "165", 
  "Charlie" => "170"
];
echo "Default Numbers = ";
print_r($numbers);
echo "<br>";

echo "Default Names = ";
print_r($names);
echo "<br><br>";

// 1. array_push() - tambah elemen ke akhir
array_push($numbers, 10, 3);
echo "1. array_push()<br>";
print_r($numbers);
echo "<br><br>";

// 2. array_merge() - gabung dua array
$merged = array_merge($numbers, [20, 30, 40]);
echo "2. array_merge()<br>";
print_r($merged);
echo "<br><br>";

// 3. array_values() - ambil semua nilai, buang key
echo "3. array_values()<br>";
print_r(array_values($names));
echo "<br><br>";

// 4. array_search() - cari nilai, balikin key-nya
echo "4. array_search()<br>";
echo array_search("170", $names);
echo "<br><br>";

// 5. array_filter() - ambil angka > 5
echo "5. array_filter()<br>";
print_r(array_filter($numbers, fn($n) => $n > 5));
echo "<br><br>";

// 6. Sorting
echo "6. Sorting<br>";
sort($numbers); echo "sort(): "; 
print_r($numbers); echo "<br>";
rsort($numbers); echo "rsort(): "; 
print_r($numbers); echo "<br>";
asort($names); echo "asort(): "; 
print_r($names); echo "<br>";
ksort($names); echo "ksort(): "; 
print_r($names); echo "<br>";
krsort($names); echo "krsort(): "; 
print_r($names); echo "<br>";
?>