<?php
$sort_arr = [2, 5, 6, 9, 3, 4];
sort($sort_arr);
$arrlength = count($sort_arr);
for ($x = 0; $x < $arrlength; $x++){
    echo $sort_arr[$x];
    echo "<br>";
}
?>
<?php
echo "Implementasi rsort()";
echo "<br>";
$sort_arr = [2, 4, 6, 7, 3, 3];
rsort($sort_arr);
$arrlength = count($sort_arr);
for ($x = 0; $x < $arrlength; $x++){
    echo $sort_arr[$x];
    echo "<br>";
}
echo "<br>";
?>

<?php
echo "Implementasi asort()";
echo "<br>";
$umur = [
    "uqi" => 20,
    "edwardd" => 10,
    "asep" => 15,
    "radgrid" => 23
];
asort($umur);
foreach ($umur as $u => $u_val){
    echo  $u .  $u_val;
    echo "<br>";
}
echo "<br>";
?>


<?php
echo "Implementasi asort()";
echo "<br>";
$umur = [
    "uqi" => 20,
    "edwardd" => 10,
    "asep" => 15,
    "radgrid" => 23
];
asort($umur);
foreach ($umur as $u => $u_val){
    echo  $u .  $u_val;
    echo "<br>";
}
echo "<br>";
?>

<?php
echo "Implementasi arsort()";
echo "<br>";
$umur = [
    "uqi" => 20,
    "edwardd" => 10,
    "asep" => 15,
    "radgrid" => 23
];
arsort($umur);
foreach ($umur as $u => $u_val){
    echo  $u .  $u_val;
    echo "<br>";
} 
echo "<br>";
?>


<?php
echo "Implementasi krsort()";
echo "<br>";
$umur = [
    "uqi" => 20,
    "edwardd" => 10,
    "asep" => 15,
    "radgrid" => 23
];
krsort($umur);
foreach ($umur as $u => $u_val){
    echo  $u .  $u_val;
    echo "<br>";
} 
?>
