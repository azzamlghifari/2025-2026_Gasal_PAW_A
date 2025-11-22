<pre>
<?php
$lfruits = array("Avocado","Bluberry","Cherry");

//soal 3.1.1
//menambah 5 data baru array 
$lfruits[] = " strawberry ";
$lfruits[] = " orange ";
$lfruits[] = " apple ";
$lfruits[] = " pear ";
$lfruits[] = " watermelon ";

echo "array setelah di tambah 5 data baru : <br>";
var_dump($lfruits);

//menampilkan nilai indeks tertinggi
$indekstertinggi =count($lfruits) -1;
$lfruits[$indekstertinggi];
echo "<br> nilai indeks tertinggi : " . $lfruits[$indekstertinggi];
echo "<br> indeks tertinggi dari semua array : " . $indekstertinggi;

echo "<br><br> array setelah satu data di hapus : <br>";

//soal 3.1.2
// menghapus satu data tertentu
$hapusindeks = 3;
$hapusitem = $lfruits [$hapusindeks];
unset($lfruits[$hapusindeks]);
$lfruits = array_values($lfruits);
var_dump($lfruits);

//menampilkan nilai indeks tertinggi setelah menghapus satu data tertentu
$indekstertinggi =count($lfruits) -1;
$lfruits[$indekstertinggi];
echo "<br> satu data yang di hapus : " .$hapusitem . "(indeks ke " . $hapusindeks .")";
echo "<br> nilai indeks tertinggi setelah penghapusan : " . $lfruits[$indekstertinggi];
echo "<br> indeks tertinggi dari semua array setelah penghapusan : " . $indekstertinggi;
echo "<br><br>";

//soal 3.1.3
//membuat array baru dengan 3 data
$lvegies = array("carrot", "potato" , "corn");
var_dump($lvegies);

//menampilkan seluruh data array baru lvegies
echo " seluruh data dari lvegies : <br><br>";
foreach($lvegies as $index => $vegies) {
    echo "indeks" . $index . " : " . $vegies . "<br>";
}
?>
</pre>