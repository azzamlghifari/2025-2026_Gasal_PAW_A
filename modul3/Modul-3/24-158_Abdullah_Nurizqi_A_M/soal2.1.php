
<?php
$fruits = array("Avocado", "Blueberry", "Cherry");
$arrlength = count($fruits);
$Lfruit =array("apple","mango","banana","bluebery","stroberry");

for($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo"<br>";
}
for($x = 0; $x < $arrlength; $x++) {
    echo $Lfruit[$x];
    echo"<br>";
}
?>