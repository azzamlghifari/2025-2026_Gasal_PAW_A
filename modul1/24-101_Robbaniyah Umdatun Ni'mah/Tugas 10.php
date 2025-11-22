<html>
<head>
    <title>Soal 10: Membalikkan String</title>
</head>
<body>

<h1>Membalikkan String dengan strrev()</h1>

<?php
$teks = "Hello world!";
echo "Asli: '$teks'<br>";
echo "Dibalik: '" . strrev($teks) . "'<br>";

// Coba teks lainn
$teks2 = "PHP";
echo "Asli: '$teks2' → dibalik: '" . strrev($teks2) . "'<br>";
?>

</body>
</html>