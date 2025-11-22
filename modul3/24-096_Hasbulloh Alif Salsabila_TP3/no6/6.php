<!-- Implementasi fungsi sort() – pengurutan menaik -->
<?php
echo "Implementasi sort()";
echo "<br>";
$sort_arr = [2, 5, 6, 9, 3, 4];
sort($sort_arr);
$arrlength = count($sort_arr);
for ($x = 0; $x < $arrlength; $x++){
    echo $sort_arr[$x];
    echo "<br>";
}
?>

<!-- Implementasi fungsi rsort() – pengurutan menurun -->
<?php
echo "Implementasi rsort()";
echo "<br>";
$sort_arr = [2, 5, 6, 9, 3, 4];
rsort($sort_arr);
$arrlength = count($sort_arr);
for ($x = 0; $x < $arrlength; $x++){
    echo $sort_arr[$x];
    echo "<br>";
}
echo "<br>";
?>

<!-- Implementasi fungsi asort() – mengurutkan array asosiatif urutan menaik berdasarkan nilainya -->
<?php
echo "Implementasi asort()";
echo "<br>";
$umur = [
    "Hasbul" => 19,
    "Hanifah" => 8,
    "Aisyah" => 3,
    "Yasmin" => 10
];
asort($umur);
foreach ($umur as $u => $u_val){
    echo "Key: " . $u . " Value: " . $u_val;
    echo "<br>";
}
echo "<br>";
?>

<!-- Implementasi fungsi ksort() – mengurutkan array asosiatif urutan menaik berdasarkan keynya -->
<?php
echo "Implementasi asort()";
echo "<br>";
$umur = [
    "Hasbul" => 19,
    "Hanifah" => 8,
    "Aisyah" => 3,
    "Yasmin" => 10
];
asort($umur);
foreach ($umur as $u => $u_val){
    echo "Key: " . $u . " Value: " . $u_val;
    echo "<br>";
}
echo "<br>";
?>

<!-- Implementasi fungsi arsort() – mengurutkan array asosiatif urutan menurun berdasarkan nilainya -->
<?php
echo "Implementasi arsort()";
echo "<br>";
$umur = [
    "Hasbul" => 19,
    "Hanifah" => 8,
    "Aisyah" => 3,
    "Yasmin" => 10
];
arsort($umur);
foreach ($umur as $u => $u_val){
    echo "Key: " . $u . " Value: " . $u_val;
    echo "<br>";
} 
echo "<br>";
?>

<!-- Implementasi fungsi arsort() – mengurutkan array asosiatif urutan menurun berdasarkan nilainya -->
<?php
echo "Implementasi krsort()";
echo "<br>";
$umur = [
    "Hasbul" => 19,
    "Hanifah" => 8,
    "Aisyah" => 3,
    "Yasmin" => 10
];
krsort($umur);
foreach ($umur as $u => $u_val){
    echo "Key: " . $u . " Value: " . $u_val;
    echo "<br>";
} 
?>
