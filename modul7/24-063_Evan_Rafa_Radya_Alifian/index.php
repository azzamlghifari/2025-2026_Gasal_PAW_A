<?php

require_once "./config.php";

?>
<?php require_once "./elements/template/header.php" ?>
<div id="container" class="p-5 d-flex flex-column row-gap-5 py-5">
  <div id="date_form" class="row">
    <div class="col-sm-6">
      <h1>Reporting Transaksi</h1>
      <p>Masukkan rentang waktu yang dibutuhkan</p>
      <?php require_once "./elements/form.php" ?>
    </div>
  </div>
  <?php if (!isset($_SESSION["transactions"])): ?>
    <div class="row mt-3">
      <div class="col">
        <p class="alert alert-danger" role="alert">
          Belum ada transaksi yang dipilih!
        </p>
      </div>
    </div>
  <?php else: ?>
    <div id="report_field" class="row d-flex flex-column row-gap-5 mt-3">
      <div class="col">
        <h3 class="mb-3">Grafik Transaksi</h3>
        <canvas id="myChart"></canvas>
      </div>
      <div class="col">
        <h3 class="mb-3">Tabel Transaksi</h3>
        <p>Jumlah Pembeli: <?= $_SESSION["customers"] ?></p>
        <?php require_once "./elements/transactions_table.php" ?>
      </div>
    </div>
    <div id="btn_action" class="row">
      <div class="col">
        <button type="button" class="btn btn-danger" id="btn_pdf">Cetak PDF</button>
        <button type="button" class="btn btn-success" id="btn_excel">Cetak Excel</button>
      </div>
    </div>
  <?php endif ?>
</div>
<?php require_once "./elements/template/footer.php" ?>