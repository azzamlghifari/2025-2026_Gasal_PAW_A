<?php require 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Transaksi Penjualan</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f3e5f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 0 auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(155, 89, 182, 0.2);
        }
        h2 {
            text-align: center;
            color: #8e24aa;
            margin-bottom: 20px;
            border-bottom: 3px solid #8e24aa;
            padding-bottom: 8px;
        }
        h3 {
            color: #8e24aa;
            margin-top: 40px;
            border-bottom: 2px solid #8e24aa;
            padding-bottom: 6px;
        }
        .table-form {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        .table-form th {
            width: 30%;
            background-color: #ba68c8;
            color: #ffffff;
            text-align: left;
            padding: 10px;
            vertical-align: top;
        }
        .table-form td {
            padding: 10px;
            background-color: #f9f9f9;
        }
        .table-form select,
        .table-form textarea,
        .table-form input[type="text"],
        .table-form input[type="number"] {
            width: 95%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 15px;
        }
        .table-form select:focus,
        .table-form textarea:focus {
            outline: none;
            border-color: #ab47bc;
            box-shadow: 0 0 5px rgba(171, 71, 188, 0.4);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th {
            background-color: #ba68c8;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            background-color: #ffffff;
        }
        .total-row td {
            font-weight: bold;
            background-color: #f3e5f5;
        }
        .total-right {
            text-align: right;
            padding-right: 15px;
        }
        .btn {
            padding: 8px 15px;
            border-radius: 6px;
            cursor: pointer;
            border: none;
            font-weight: bold;
            transition: 0.2s;
        }
        .btn-green {
            background-color: #ab47bc;
            color: #ffffff;
        }
        .btn-green:hover {
            background-color: #8e24aa;
        }
        .btn-red {
            background-color: #d81b60;
            color: #ffffff;
        }
        .btn-red:hover {
            background-color: #880e4f;
        }
        .btn-submit {
            width: 100%;
            background-color: #8e24aa;
            color: #ffffff;
            border: none;
            padding: 14px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            transition: 0.3s;
        }
        .btn-submit:hover {
            background-color: #6a1b9a;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Transaksi Penjualan</h2>
    <form action="simpan_transaksi.php" method="post" id="formTransaksi">
        <table class="table-form">
            <tr>
                <th>Nomor Nota</th>
                <td>
                    <?php 
                        $nomor_nota = 'NT' . time(); 
                    ?>
                    <input type="text" name="nomor_nota" value="<?= $nomor_nota; ?>" readonly>
                </td>
            </tr>
            <tr>
                <th>Pelanggan</th>
                <td>
                    <select name="pelanggan_id" required>
                        <option value="">Pilih Pelanggan</option>
                        <?php
                        $pelanggan = mysqli_query($koneksi, "SELECT * FROM penjualan_pelanggan");
                        while ($p = mysqli_fetch_array($pelanggan)) {
                            echo "<option value='{$p['id']}'>{$p['nama']}</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Kasir</th>
                <td>
                    <select name="kasir_id" required>
                        <option value="">Pilih Kasir</option>
                        <?php
                        $kasir = mysqli_query($koneksi, "SELECT * FROM penjualan_pengguna WHERE level=2");
                        while ($k = mysqli_fetch_array($kasir)) {
                            echo "<option value='{$k['id_user']}'>{$k['nama']}</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td>
                    <textarea name="keterangan" placeholder="Tuliskan catatan transaksi (opsional)" rows="3"></textarea>
                </td>
            </tr>
        </table>

        <h3>Detail Barang (Detail)</h3>
        <table id="tabelBarang">
            <thead>
                <tr>
                    <th>Barang</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah (Qty)</th>
                    <th>Sub Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="detailBody">
                <tr>
                    <td>
                        <select name="barang_id[]" class="barangSelect" onchange="updateHarga(this)" required>
                            <option value="">Pilih Barang</option>
                            <?php
                            $barang = mysqli_query($koneksi, "SELECT * FROM penjualan_barang");
                            while ($b = mysqli_fetch_array($barang)) {
                                echo "<option value='{$b['id']}' data-harga='{$b['harga']}'>{$b['nama_barang']} ({$b['kode_barang']})</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td><input type="number" name="harga[]" class="harga" readonly></td>
                    <td><input type="number" name="qty[]" class="qty" value="1" min="1" onchange="updateSubTotal(this)"></td>
                    <td><input type="text" name="subtotal[]" class="subtotal" readonly></td>
                    <td><button type="button" class="btn btn-red" onclick="hapusBaris(this)">Hapus</button></td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="total-row">
                    <td colspan="3" class="total-right">Total Keseluruhan:</td>
                    <td><input type="text" id="total" name="total" readonly></td>
                    <td><button type="button" class="btn btn-green" onclick="tambahBaris()">Tambah Barang</button></td>
                </tr>
            </tfoot>
        </table>

        <button type="submit" class="btn-submit">Simpan Transaksi & Cetak Nota</button>
    </form>
</div>

<script>
    function updateHarga(select) {
        const harga = select.options[select.selectedIndex].getAttribute('data-harga') || 0;
        const row = select.closest('tr');
        row.querySelector('.harga').value = harga;
        updateSubTotal(row.querySelector('.qty'));
    }
    function updateSubTotal(input) {
        const row = input.closest('tr');
        const harga = parseFloat(row.querySelector('.harga').value || 0);
        const qty = parseFloat(row.querySelector('.qty').value || 0);
        const subtotal = harga * qty;
        row.querySelector('.subtotal').value = subtotal.toLocaleString('id-ID');
        hitungTotal();
    }
    function hitungTotal() {
        let total = 0;
        document.querySelectorAll('.subtotal').forEach(sub => {
            total += parseFloat(sub.value.replace(/\./g, '').replace(',', '.')) || 0;
        });
        document.getElementById('total').value = total.toLocaleString('id-ID');
    }
    function hapusBaris(btn) {
        const row = btn.closest('tr');
        const tbody = row.parentElement;
        if (tbody.rows.length > 1) {
            row.remove();
            hitungTotal();
        } else {
            alert("Minimal satu barang diperlukan dalam transaksi.");
        }
    }
    function tambahBaris() {
        const tbody = document.getElementById('detailBody');
        const newRow = tbody.rows[0].cloneNode(true);
        newRow.querySelectorAll('input').forEach(input => input.value = '');
        newRow.querySelector('.barangSelect').selectedIndex = 0;
        tbody.appendChild(newRow);
    }
</script>

</body>
</html>
