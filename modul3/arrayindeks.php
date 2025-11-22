<?php

//deklarasi array indeks
$buah = array("apel", "mangga", "pisang");
$array = ["mangga", 1 , "jeruk"];

//array asosiatif
$buah1 = array("buah1"=>'jeruk', 'buah2'=>'apel', 'buah3'=>'mangga');
$buah2 = ["buah1"=>'jeruk', 'buah2'=>'anggur', 'buah3'=>'kurma'];

//deklarasi array multidimensi
$buah3 = array(array('buah1'=>'mangga','buah2'=>'anggur','buah3'=>'jeruk'),[1,2,True]);

//pengaksesan array
echo $buah[0];
var_dump($buah);
print_r($buah1);

//update delete array indeks
$buah[] = 'kurma';
$buah[5]= 'nangka';
//array_splice($buah, 1,3);
unset($buah[0],$buah[1]);
array_push($buah,'semangka','pisang');
var_dump($buah);

//update delete array asosiatif
$buah1['buah4']='jambu';
$buah1['buah1'] = 'kurma';
$buah1 += ['buah6'=>'alpukad', 4=>'markisa'];
$buahbaru = array_diff($buah1, ['mangga', 'jeruk']);
var_dump($buahbaru);
//unset($buah1['buah4']);
//var_dump($buah1);

//mengahpus array awal dan akhir
//array_shift($buah3);
array_pop($buah3);
var_dump($buah3);

//for each untuk pengaksesan array
foreach($buah as $sayapunyabuah){
    echo $sayapunyabuah.'<br>';
}

//for each untuk pengaksesan array asosiatif
foreach($buah1 as $keybuah=>$valuebuah){
    echo 'inni merupakan key'.$keybuah.'ini merupakan'.$valuebuah.'<br>';
}

//for each untuk pengaksesan array multidimensi
foreach($buah as $iniarrayawal){
    foreach($iniarrayawal as $key=>$value){
        echo 'ini merupakan '. $key. ' dan ini value '.$value.'<br>';
    }
}

?>
