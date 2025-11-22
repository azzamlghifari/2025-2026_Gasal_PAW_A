<?php
$fruits = array("Avocado", "Blueberry", "Cherry");
echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".";
echo "<br>";


// menmbahkan 5 data baru ke dalam array
array_push($fruits, "Strawbeey", "Orange", "Papaya", "Banana", "Grapes");

// mencari index tertinggi
$highest_index = count($fruits) - 1;

echo "Index tertinggi $highest_index";
echo "<br>";
echo "Data buah dengan index tertinggi = $fruits[$highest_index]";