<?php
//1.
$fruits = array("avocado","Blueberry","cherry" );

//menambah lima data
array_push($fruits,"mangga","strawberry","durian","apel","banana");
//nampilin isi semua array
echo "daftar nuah didalam array:<br>";
foreach ($fruits as $index => $value) {
	echo "indeks ke-$index=$value<br>";
}

//nentuin indeks yang tinggi
$index_tinggi=count($fruits) -1;

//nampilin nilai dengn indeks tertinggi
echo "<br> Buah dengan indeks tertinggi adalah:" .$fruits[$index_tinggi];
echo "<br> Indeks tertinggi dari array \$fruits adalah:$index_tinggi:<br>";


echo "<hr>";

//2.

$Lfruits = array("Avocado", "Blueberry", "Cherry", "Mango", "Strawberry", "Durian", "Apple", "Banana");

// Hapus satu data
unset($Lfruits[2]);

echo "Daftar buah setelah menghapus satu data:<br>";
foreach ($Lfruits as $index => $value) {
    echo "Indeks ke-$index = $value<br>";
}

// Hitung ulang panjang array
$index_tinggi = max(array_keys($Lfruits));

echo "<br>Buah dengan indeks tertinggi adalah: " . $fruits[$index_tinggi];
echo "<br>Indeks tertinggi dari array \$Lfruits adalah: $index_tinggi:<br>";


echo "<hr>";

//3.
$vegies = array("carrot","brocoli","spinach");
echo "Daftar sayuran di didalam array vegies:<br>";
foreach ($vegies as $index => $value) {
	echo "indeks ke-$index =$value<br>";
}



?>

