<?php
$nilai = $_POST['nilai'];
if ($nilai >= 80){
    $grade = 'A';
}elseif ($nilai >= 70){
    $grade = 'B';
}elseif ($nilai >= 60){
    $grade = 'C';
}else{
    $grade = 'E';
}
echo 'jumlah nilai '.$nilai.' dengan predikat '.$grade;
?>