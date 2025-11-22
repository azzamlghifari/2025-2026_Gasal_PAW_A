<?php

$Lfruits = array("Apple", "Mango", "Banana", "Cherry");
echo "<b>Array awal:</b><br>";
print_r($Lfruits);
echo "<br><br>";

// 1. Implementasi fungsi array_push()
// Menambahkan beberapa elemen baru di akhir array
array_push($Lfruits, "Orange", "Pineapple");
echo "<b>1. Setelah array_push():</b><br>";
print_r($Lfruits);
echo "<br><br>";

// 2. Implementasi fungsi array_merge()
// Menggabungkan dua array menjadi satu
$Lvegies = array("Carrot", "Broccoli", "Spinach");
$Lfood = array_merge($Lfruits, $Lvegies);
echo "<b>2. Setelah array_merge() (menggabungkan buah & sayur):</b><br>";
print_r($Lfood);
echo "<br><br>";

// 3. Implementasi fungsi array_values()
// Mengembalikan semua nilai array dalam bentuk indeks numerik
$newValues = array_values($Lfood);
echo "<b>3. Hasil array_values():</b><br>";
print_r($newValues);
echo "<br><br>";

// 4. Implementasi fungsi array_search()
// Mencari posisi/indeks dari elemen tertentu
$cari = "Mango";
$posisi = array_search($cari, $Lfood);
echo "<b>4. Hasil array_search() untuk '$cari':</b><br>";
if ($posisi !== false) {
    echo "Data '$cari' ditemukan pada indeks ke-$posisi<br>";
} else {
    echo "Data '$cari' tidak ditemukan.<br>";
}
echo "<br>";

// 5. Implementasi fungsi array_filter()
// Menyaring data sesuai kondisi tertentu (contoh: nama panjang > 6 huruf)
$hasilFilter = array_filter($Lfood, function($item) {
    return strlen($item) > 6;
});
echo "<b>5. Hasil array_filter() (panjang > 6 huruf):</b><br>";
print_r($hasilFilter);
echo "<br><br>";

// 6. Implementasi berbagai fungsi sorting
echo "<b>6. Fungsi Sorting:</b><br>";

// a. sort() - mengurutkan nilai array secara ascending
$sorted = $Lfood;
sort($sorted);
echo "a. sort():<br>";
print_r($sorted);
echo "<br><br>";

// b. rsort() - mengurutkan nilai array secara descending
$sortedDesc = $Lfood;
rsort($sortedDesc);
echo "b. rsort():<br>";
print_r($sortedDesc);
echo "<br><br>";

// c. asort() - mengurutkan berdasarkan nilai, mempertahankan key
$assoc = array("a"=>"Apple", "b"=>"Mango", "c"=>"Cherry", "d"=>"Banana");
asort($assoc);
echo "c. asort() (urut berdasarkan value, pertahankan key):<br>";
print_r($assoc);
echo "<br><br>";

// d. ksort() - mengurutkan berdasarkan key
ksort($assoc);
echo "d. ksort() (urut berdasarkan key):<br>";
print_r($assoc);
echo "<br><br>";

// e. arsort() - kebalikan dari asort()
arsort($assoc);
echo "e. arsort() (descending value):<br>";
print_r($assoc);
echo "<br><br>";

// f. krsort() - kebalikan dari ksort()
krsort($assoc);
echo "f. krsort() (descending key):<br>";
print_r($assoc);
echo "<br>";

?>