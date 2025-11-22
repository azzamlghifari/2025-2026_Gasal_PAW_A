<?php
$nilai = 85;

if ($nilai >= 85) {
	echo "nilai: $nilai <br> grade : A";
}elseif ($nilai >= 70) {
	echo "nilai:$nilai <br> grade:B";
}elseif ($nilai >= 60) {
	echo "nilai: $nilai <br> grade:C";
}elseif ($nilai >=50) {
	echo "nilai: $nilai <br> grade: D";

}else{
	echo"nilai:$nilai <br> grade: E";
}
?>