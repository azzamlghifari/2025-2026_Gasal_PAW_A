<?php

session_start();
require_once "../../config.php";

$sql_select_all_barang = "
  SELECT * FROM barang;
";
$barang = mysqli_query($conn, $sql_select_all_barang);

?>

<!-- Render Header HTML -->
<?php require_once "../template/header.php" ?>

<div class="container my-5 row-gap-3">
  <div class="row align-items-center">
    <div class="col-sm-6">
      <h1>Tambah Barang</h1>
    </div>
    <div class="col-sm-6 text-end">
      <a href="./index.php">Kemabli ke Nota</a>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <form action="../../crud/barang/add.php" method="post">
        <div class="mb-3">
          <label for="no_nota" class="form-label">No Nota</label>
          <select class="form-select" name="no_nota" id="no_nota">
            <option disabled>Open this select menu</option>
            <option value="N-2025-001">N-2025-001</option>
            <option value="N-2025-002">N-2025-002</option>
            <option value="N-2025-003">N-2025-003</option>
            <option value="N-2025-004">N-2025-004</option>
            <option value="N-2025-005">N-2025-005</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="Barang" class="form-label">Barang</label>
          <select class="form-select" name="barang" id="barang">
            <option disabled>Open this select menu</option>
            <?php while ($b = mysqli_fetch_assoc($barang)): ?>
            <option value="<?= $b['nama_barang'] ?>"><?= $b['nama_barang'] ?> (Rp. <?= $b['harga'] ?>)</option>
            <?php endwhile ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="jumlah" class="form-label">Jumlah barang:</label>
          <input type="number" class="form-control" name="jumlah" id="jumlah">
        </div>
        <div class="mb-3">
          <label for="keterangan" class="form-label">Keterangan</label>
          <textarea class="form-control" name="keterangan" id="keterangan" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </form>
    </div>
    <div class="col-sm-8">
      <?php if(isset($_GET["failed"]) && $_SESSION["err_msg"]): ?>
        <div class="alert alert-danger">
          <p><?= $_GET["failed"] ?></p>
          <ul>
            <?php foreach ($_SESSION["err_msg"] as $msg): ?>
            <li><?= $msg ?></li>
            <?php endforeach ?>
          </ul>
        </div>
      <?php endif ?>
    </div>
  </div>
</div>

<!-- Render Footer HTML -->
<?php require_once "../template/footer.php" ?>