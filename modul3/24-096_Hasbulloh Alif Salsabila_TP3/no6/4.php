<?php
echo "Implementasi array_search()";
echo "<br>";
$searchbrandCar = array_search("Salomon", $brandCar); //mencari indeks dari value
if ($searchbrandCar !== false){
    echo "Indeks pada 'Salomon' adalah: " . $searchbrandCar;
}else{
    echo "'Salomon' tidak ditemukan";
}
echo "<br>";
?>