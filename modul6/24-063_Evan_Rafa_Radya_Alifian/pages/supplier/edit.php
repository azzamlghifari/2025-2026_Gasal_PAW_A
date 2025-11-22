<?php

require_once "../../config.php";

session_start();

$id_supplier = $_GET["id"] ?? null;
$supplier;

if ($id_supplier) {
  $sql_select_supplier = "
    SELECT * FROM supplier
    WHERE id = '$id_supplier';
  ";
  $supplier = mysqli_query($conn, $sql_select_supplier);

  if (mysqli_num_rows($supplier) < 1) {
    header("Location: ./index.php?failed=Data tidak ditemukan");
    exit();
  }
} else {
  header("Location: ./index.php?failed=Data tidak valid");
  exit();
}

?>

<!-- Render Header HTML -->
<?php require_once "../template/header.php" ?>

<div class="container my-5 row-gap-3">
  <div class="row align-items-center">
    <div class="col-sm-6">
      <h1>Edit Data Master Supplier</h1>
    </div>
    <div class="col-sm-6 text-end">
      <a href="../../index.php">Kemabli ke home</a>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <?php while ($s = mysqli_fetch_assoc($supplier)): ?>
      <form action="../../crud/supplier/edit.php?id=<?= $id_supplier ?>" method="post">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" value="<?= $s['nama'] ?>">
        </div>
        <div class="mb-3">
          <label for="telp" class="form-label">Nomor Telepon</label>
          <input type="number" class="form-control" name="telp" id="telp" placeholder="xxxx-xxxx-xxxx" value="<?= $s['telp'] ?>">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Contoh: Surabaya"><?= $s['alamat'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <button type="submit" class="btn btn-danger">Reset</button>
      </form>
      <?php endwhile ?>
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