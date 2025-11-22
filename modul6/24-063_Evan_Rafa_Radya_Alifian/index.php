  <?php

  require_once "./config.php";

  $sql_select_all_supplier = "
    SELECT * FROM supplier ORDER BY id DESC
  ";
  $suppliers = mysqli_query($conn, $sql_select_all_supplier);

  ?>

  <!-- Render Header HTML -->
  <?php require_once "./pages/template/header.php" ?>

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
        <h1>Data Master Supplier</h1>
        <a href="./pages/supplier/add.php" class="btn btn-success">Tambah Supplier</a>
      </div>
      <div class="col-sm-6 text-end">
        <a href="./pages/barang/index.php" class="btn btn-primary">Barang</a>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="table table-bordered">
          <thead class="table-primary">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Telp</th>
              <th>Alamat</th>
              <th>Tindakan</th>
            </tr>
          </thead>
          <tbody>
            <?php if (mysqli_num_rows($suppliers) < 1): ?>
              <tr>
                <th colspan="5">Belum ada supplier yang tersedia</th>
              </tr>
            <?php else: ?>
              <?php $no = 1; ?>
              <?php while ($supplier = mysqli_fetch_assoc($suppliers)): ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $supplier["nama"] ?></td>
                  <td><?= $supplier["telp"] ?></td>
                  <td><?= $supplier["alamat"] ?></td>
                  <td>
                    <a href="./pages/supplier/edit.php?id=<?= $supplier["id"] ?>" class="btn btn-warning me-1">Edit</a>
                    <a href="./crud/supplier/delete.php?id=<?= $supplier["id"] ?>" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin ingin menghapus?')">Hapus</a>
                  </td>
                </tr>
              <?php $no++; ?>
              <?php endwhile ?>
            <?php endif?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Render Footer HTML -->
  <?php require_once "./pages/template/footer.php" ?>