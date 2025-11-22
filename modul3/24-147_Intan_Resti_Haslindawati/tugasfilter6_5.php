<?php
$angka = array(10, 25, 30, 45, 50);
$hasil = array_filter($angka, function($n) {
    return $n > 30;
});

print_r($hasil);
?>
