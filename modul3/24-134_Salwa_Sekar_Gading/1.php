<?php
// NOMOR 1: Menambahkan Data Baru ke Array Fruits
echo "<h2>Nomor 1 : Menambahkan Data Baru ke Array Fruits</h2>";

// Contoh skrip mendeklarasikan array terindeks
$fruits = array("Avocado", "Blueberry", "Cherry");
echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".";
echo "<hr>";

// Menambahkan 5 data baru ke dalam array $fruits
$fruits[] = "Mango";
$fruits[] = "Orange";
$fruits[] = "Apple";
$fruits[] = "Banana";
$fruits[] = "Grapes";

echo "<strong>Isi array fruits:</strong><br>";
print_r($fruits);

// Menentukan indeks tertinggi
$indeksTertinggi = count($fruits) - 1;
echo "<br><br>Nilai dengan indeks tertinggi: <strong>" . $fruits[$indeksTertinggi] . "</strong>";
echo "<br>Indeks tertinggi: <strong>" . $indeksTertinggi . "</strong>";
echo "<hr>";

// NOMOR 2: Menghapus Satu Data dari Array Fruits
echo "<h2>Nomor 2 : Menghapus Satu Data dari Array Fruits</h2>";

// Menghapus satu data: Cherry di indeks ke-2
unset($fruits[2]);

echo "<strong>Isi array setelah menghapus 'Cherry':</strong><br>";
print_r($fruits);

// Menentukan indeks tertinggi setelah penghapusan
$indeksTertinggi = -1;
foreach ($fruits as $index => $value) {
    if ($index > $indeksTertinggi) {
        $indeksTertinggi = $index;
    }
}

echo "<br><br>Nilai dengan indeks tertinggi: <strong>" . $fruits[$indeksTertinggi] . "</strong>";
echo "<br>Indeks tertinggi: <strong>" . $indeksTertinggi . "</strong>";
echo "<hr>";

// NOMOR 3: Membuat Array Sayuran
echo "<h2>Nomor 3 : Membuat Array Sayuran</h2>";
$vegies = array("Carrot", "Broccoli", "Cucumber");

echo "<strong>Isi array vegies:</strong><br>";
print_r($vegies);
?>
