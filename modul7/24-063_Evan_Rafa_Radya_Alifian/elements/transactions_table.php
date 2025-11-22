<table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Pembeli</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Waktu Transaksi</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1 ?>
    <?php foreach ($_SESSION["transactions"] as $transaction): ?>
      <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $transaction["nama"] ?></td>
        <td><?= $transaction["keterangan"] ?></td>
        <td><?= $transaction["waktu_transaksi"] ?></td>
        <td>Rp. <?= $transaction["total"] ?></td>
      </tr>
      <?php $no++ ?>
    <?php endforeach ?>
    <tr class="table-secondary">
      <td colspan="4">
        <b>Jumlah Pendapatan</b>
      </td>
      <td>Rp. <?= $_SESSION["totalSum"] ?></td>
    </tr>
  </tbody>
</table>