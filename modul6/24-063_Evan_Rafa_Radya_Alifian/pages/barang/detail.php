<?php

require_once "../../config.php";

$no_nota = $_GET["no_nota"];

$sql_select_all_supplier = "
  SELECT * FROM nota_detail AS nd
  JOIN nota AS n ON (nd.id_nota = n.id)
  JOIN barang AS b ON (nd.id_barang = b.id)
  WHERE n.no_nota = '$no_nota';
";
$nota_detail = mysqli_query($conn, $sql_select_all_supplier);
$nota = mysqli_fetch_assoc($nota_detail);

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
      <h1>Data Nota <?= $_GET['no_nota'] ?></h1>
    </div>
    <div class="col-sm-6 text-end">
      <a href="./index.php" class="btn btn-success">Kembali</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h3>Tanggal: <?= $nota["tanggal_buat"] ?></h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No Nota</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><?= $nota["no_nota"] ?></th>
            <td><?= $nota["keterangan"] ?? "Tidak ada keterangan" ?></td>
            <td><?= $nota["kode_barang"] ?></td>
            <td><?= $nota["nama_barang"] ?></td>
            <td><?= $nota["jumlah"] ?></td>
            <td><?= $nota["harga"] ?></td>
          </tr>
          <tr>
            <td colspan="5">Total:</td>
            <td><?= $nota["total_harga"] ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Render Footer HTML -->
<?php require_once "../template/footer.php" ?>