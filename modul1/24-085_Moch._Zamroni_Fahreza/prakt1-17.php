<!-- Ouput dengan PHP -->
<?php
echo "Hello World";
?>

<!-- PHP dengan HTML -->
<!DOCTYPE html>
<html>

<body>

  <?php
 echo "Hello world";
 ?>

</body>

</html>

<!-- Komentar pada PHP -->
<!DOCTYPE html>
<html>

<body>
  <?php
 // This is a single-line comment
 
 # This is also a single-line comment
 
 /*
 This is a multiple-lines comment block
 that spans over multiple
 lines
 */

// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>

</body>

</html>

<!-- PHP Case Sensitive -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php 
  $color = "red";
  echo "My car is " .  $color . "<br>";
  echo "My house is " .  $COLOR . "<br>";
  echo "My boat is " .  $coLOR . "<br>";
  
  ?>
</body>

</html>

<!-- Deklarasi variable -->
<?php 
 $txt = "Hello world";
 $x = 5;
 $y = 10.5;
 
 ?>

<!-- Output Variabel 2 -->
<?php
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
?>

<!-- Ouput Variabel 3 dengan operasi aritmatika -->
<?php
$x = 5;
$y = 4;
echo $x + $y;
?>

<!-- Mengetahui panjang string -->
<?php
echo strlen("Hello world!"); // outputs 12
?>

<!-- Menghitung jumlah kata pada kalimat -->
<?php
echo str_word_count("Hello world!"); // outputs 2
?>

<!-- Membalikkan String -->
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>

<!-- Pencarian dalam string (Posisi) -->
<?php
echo strpos("Hello world!", "world"); // outputs 6
// mendapatkanm index karakter yang dicari
?>

<!-- Mengganti Text -->
<?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>

<!-- Fungsi (dasar) -->
<?php
function writeMsg() {
  echo "Hello world!";
}
writeMsg(); // call the function
?>

<!-- Fungsi dengan argumen -->
<?php
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>

<!-- Fungsi dengan lebih dari satu argumen -->
<?php
function familyName2($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kai Jim", "1983");
?>

<!-- Fungsi dengan nilai default pada argumen -->
<?php
function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();    // will use the default value of 50
setHeight(135);
setHeight(80);
?>

<!-- Fungsi yang mengembalikan nilai -->
<?php
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>"; 
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>