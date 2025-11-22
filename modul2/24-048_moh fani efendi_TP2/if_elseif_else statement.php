<?php
$t = date("H");

if ($t < "10") {
	echo "have a good morning!";
} elseif ($t < "20") {
	echo "have a good day!";
} else {
	echo "have a goog night!";
}
?>