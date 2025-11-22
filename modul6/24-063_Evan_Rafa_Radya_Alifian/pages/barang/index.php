<?php

require_once "../../config.php";

$sql_select_all_supplier = "
    SELECT * FROM nota ORDER BY id DESC
  ";
$notas = mysqli_query($conn, $sql_select_all_supplier);

?>

<!-- Render Header HTML -->
<?php require_once "../template/header.php" ?>

<div class="container my-5 d-flex flex-column row-gap-3">
  <?php if (isset($_GET["success"])): ?>
    <div class="row">
      <div class="col">
        <div class="alert alert-success alert-dismissible" role="alert">
          <span><?= $_GET["success"] ?></span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  <?php endif ?>
  <?php if (isset($_GET["failed"])): ?>
    <div class="row">
      <div class="col">
        <div class="alert alert-danger alert-dismissible" role="alert">
          <span><?= $_GET["failed"] ?></span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  <?php endif ?>
  <div class="row align-items-center">
    <div class="col-sm-6">
      <h1>Data Nota</h1>
    </div>
    <div class="col-sm-6 text-end">
      <a href="./add.php" class="btn btn-success">Tambah Barang</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table table-bordered">
        <thead class="table-primary">
          <tr>
            <th>No</th>
            <th>ID</th>
            <th>No Nota</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (mysqli_num_rows($notas) < 1): ?>
            <tr>
              <th colspan="6">Belum ada nota yang tersedia</th>
            </tr>
          <?php else: ?>
            <?php $no = 1; ?>
            <?php while ($nota = mysqli_fetch_assoc($notas)): ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $nota["id"] ?></td>
                <td><?= $nota["no_nota"] ?></td>
                <td>
                  <a href="./detail.php?id_nota=<?= $nota["id"] ?>&no_nota=<?= $nota["no_nota"] ?>" class="btn btn-primary me-1">Lihat Detail</a>
                </td>
              </tr>
              <?php $no++; ?>
            <?php endwhile ?>
          <?php endif ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Render Footer HTML -->
<?php require_once "../template/footer.php" ?>