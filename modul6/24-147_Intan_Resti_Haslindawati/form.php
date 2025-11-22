<?php include "db.php"; ?>

<h2>Form Input Transaksi</h2>

<form action="simpan.php" method="POST">

    <label>Tanggal Transaksi</label><br>
    <input type="date" name="waktu_transaksi" required><br><br>

    <label>ID Pelanggan</label><br>
    <input type="text" name="pelanggan_id" required><br><br>

    <label>Keterangan</label><br>
    <textarea name="keterangan"></textarea><br><br>

    <h3>Detail Barang</h3>

    <table border="1">
        <tr>
            <th>ID Barang</th>
            <th>Harga</th>
            <th>Qty</th>
        </tr>

        <tr>
            <td><input type="text" name="barang_id[]"></td>
            <td><input type="number" name="harga[]"></td>
            <td><input type="number" name="qty[]" value="1"></td>
        </tr>
    </table>

    <br>
    <button type="submit">Simpan Transaksi</button>

</form>
