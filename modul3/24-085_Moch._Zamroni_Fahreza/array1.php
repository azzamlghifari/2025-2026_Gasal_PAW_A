<?php 

$fruits = array('Avocado', 'Blueberry', 'Cherry');
echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".";
echo "<br>";

// 1.1
echo "<br>";
array_push($fruits, "Cocomelon", "Banana", "Apple", "Orange", "Berry");
var_dump($fruits);
echo "<br>";
var_dump($fruits[7]);

// 1.2
echo "<br>";
echo "<br>";
unset($fruits[0]);
var_dump($fruits);
echo "<br>";
var_dump($fruits[7]);

// 1.3
echo "<br>";
$lvegies = array("Handphone", "Laptop", "Computer");
foreach($elvegies as $e){
  echo "<br>";
  echo $e;
}

?>