<?php

header("Content-Type: application/vnd.ms-excel; charset-utf-8");
header("Content-Disposition: attachment; filename=reporting.xls");
?>
<?php require_once "./config.php" ?>
<?php require_once "./elements/template/header.php" ?>
<p>Jumlah Pembeli: <?= $_SESSION["customers"] ?></p>
<?php require_once "./elements/transactions_table.php" ?>
<?php require_once "./elements/template/footer.php" ?>