<?php
$nilai = array(
    array("nama" => "Alex", "nilai" => 80),
    array("nama" => "Bianca", "nilai" => 90),
    array("nama" => "Candice", "nilai" => 70)
);

$total = 0;
foreach ($nilai as $n) {
    $total += $n["nilai"];
}
$rata = $total / count($nilai);
echo "Rata-rata nilai mahasiswa: " . $rata;
?>
