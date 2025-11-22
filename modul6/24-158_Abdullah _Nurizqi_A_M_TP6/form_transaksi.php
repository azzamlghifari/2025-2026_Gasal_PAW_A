<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Transaksi Penjualan</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f2f6f2;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h2 {
            color: #008000;
            border-bottom: 3px solid #008000;
            padding-bottom: 8px;
        }
        label {
            font-weight: 600;
            color: #333;
            display: block;
            margin-top: 15px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th {
            background-color: #008000;
            color: white;
            padding: 10px;
            text-align: center;
        }
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .btn {
            padding: 8px 15px;
            border-radius: 6px;
            cursor: pointer;
            border: none;
            font-weight: bold;
        }
        .btn-green {
            background-color: #28a745;
            color: white;
        }
        .btn-green:hover {
            background-color: #218838;
        }
        .btn-red {
            background-color: #dc3545;
            color: white;
        }
        .btn-red:hover {
            background-color: #c82333;
        }
        .btn-submit {
            width: 100%;
            background-color: #008000;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
        }
        .btn-submit:hover {
            background-color: #006400;
        }
        .total-row td {
            font-weight: bold;
            background-color: #f8f9fa;
        }
        .total-right {
            text-align: right;
            padding-right: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Transaksi Penjualan</h2>

    <form action="simpan_transaksi.php" method="post" id="formTransaksi">
        <label>Pelanggan</label>
        <select name="pelanggan_id" required>
            <option value="">-- Pilih Pelanggan --</option>
            <?php
            $pelanggan = mysqli_query($koneksi, "SELECT * FROM penjualan_pelanggan");
            while($p = mysqli_fetch_array($pelanggan)){
                echo "<option value='$p[id]'>$p[nama]</option>";
            }
            ?>
        </select>

        <label>Kasir</label>
        <select name="kasir_id" required>
            <option value="">-- Pilih Kasir --</option>
            <?php
            $kasir = mysqli_query($koneksi, "SELECT * FROM penjualan_pengguna WHERE level=2");
            while($k = mysqli_fetch_array($kasir)){
                echo "<option value='$k[id_user]'>$k[nama]</option>";
            }
            ?>
        </select>

        <label>Keterangan</label>
        <textarea name="keterangan" placeholder="Tuliskan catatan transaksi (opsional)"></textarea>

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
                            <option value="">-- Pilih Barang --</option>
                            <?php
                            $barang = mysqli_query($koneksi, "SELECT * FROM penjualan_barang");
                            while($b = mysqli_fetch_array($barang)){
                                echo "<option value='$b[id]' data-harga='$b[harga]'>$b[nama_barang] ($b[kode_barang])</option>";
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
        let harga = select.options[select.selectedIndex].getAttribute('data-harga');
        let row = select.closest('tr');
        row.querySelector('.harga').value = harga;
        updateSubTotal(row.querySelector('.qty'));
    }

    function updateSubTotal(input) {
        let row = input.closest('tr');
        let harga = parseFloat(row.querySelector('.harga').value || 0);
        let qty = parseFloat(row.querySelector('.qty').value || 0);
        let subtotal = harga * qty;
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
        let row = btn.closest('tr');
        row.remove();
        hitungTotal();
    }

    function tambahBaris() {
        let tbody = document.getElementById('detailBody');
        let newRow = tbody.rows[0].cloneNode(true);
        newRow.querySelectorAll('input').forEach(input => input.value = '');
        newRow.querySelector('.barangSelect').selectedIndex = 0;
        tbody.appendChild(newRow);
    }
</script>

</body>
</html>
