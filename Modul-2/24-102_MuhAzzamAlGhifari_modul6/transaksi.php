<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Transaksi Master Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .detail-row {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body class="p-4">
    <h3>Input Transaksi Nota (Master Detail)</h3>
    <form method="post" action="simpan_transaksi.php">
        
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Data Nota (Master)</div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Tanggal Nota</label>
                    <input type="date" name="tanggal" value="<?= date('Y-m-d') ?>" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                Detail Barang (Detail)
                <button type="button" class="btn btn-sm btn-light" id="tambahDetail">Tambah Barang</button>
            </div>
            <div class="card-body" id="detailContainer">
                <div class="detail-row" data-index="0">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" name="detail[0][nama_barang]" class="form-control" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="number" name="detail[0][jumlah]" class="form-control jumlah" min="1" value="1" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Harga Satuan</label>
                            <input type="number" name="detail[0][harga]" class="form-control harga" min="0" value="0" required>
                        </div>
                        <div class="col-md-3 mb-3 d-flex align-items-end">
                            <label class="form-label me-2">Subtotal:</label>
                            <span class="subtotal-text fw-bold">0.00</span>
                            <input type="hidden" name="detail[0][subtotal]" class="subtotal-input" value="0">
                            <button type="button" class="btn btn-danger btn-sm ms-3 hapusDetail">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-end mb-4">
            <h4>Total Keseluruhan: <span id="totalNota" class="text-success">0.00</span></h4>
            <input type="hidden" name="total_nota_input" id="totalNotaInput" value="0">
        </div>

        <button type="submit" name="simpan_transaksi" class="btn btn-success btn-lg">Simpan Transaksi Otomatis</button>
        <a href="index.php" class="btn btn-danger btn-lg">Batal</a>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let detailIndex = 1;
            const container = document.getElementById('detailContainer');
            const tambahBtn = document.getElementById('tambahDetail');
            const totalNotaDisplay = document.getElementById('totalNota');
            const totalNotaInput = document.getElementById('totalNotaInput');

            // Fungsi untuk menghitung Subtotal
            function hitungSubtotal(row) {
                const jumlah = parseFloat(row.querySelector('.jumlah').value) || 0;
                const harga = parseFloat(row.querySelector('.harga').value) || 0;
                const subtotal = jumlah * harga;
                
                row.querySelector('.subtotal-text').textContent = subtotal.toFixed(2);
                row.querySelector('.subtotal-input').value = subtotal.toFixed(2);
            }

            // Fungsi untuk menghitung Total Nota Keseluruhan
            function hitungTotalNota() {
                let total = 0;
                document.querySelectorAll('.subtotal-input').forEach(input => {
                    total += parseFloat(input.value) || 0;
                });
                totalNotaDisplay.textContent = total.toFixed(2);
                totalNotaInput.value = total.toFixed(2);
            }

            // Delegasi event untuk perubahan input dan tombol hapus
            container.addEventListener('input', function(e) {
                const target = e.target;
                if (target.classList.contains('jumlah') || target.classList.contains('harga')) {
                    const row = target.closest('.detail-row');
                    hitungSubtotal(row);
                    hitungTotalNota();
                }
            });

            container.addEventListener('click', function(e) {
                if (e.target.classList.contains('hapusDetail')) {
                    const row = e.target.closest('.detail-row');
                    if (document.querySelectorAll('.detail-row').length > 1) {
                         row.remove();
                         hitungTotalNota();
                    } else {
                        alert("Minimal harus ada satu barang.");
                    }
                }
            });

            // Event untuk tombol Tambah Barang
            tambahBtn.addEventListener('click', function() {
                const newRow = document.createElement('div');
                newRow.classList.add('detail-row');
                newRow.setAttribute('data-index', detailIndex);
                
                newRow.innerHTML = `
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" name="detail[${detailIndex}][nama_barang]" class="form-control" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="number" name="detail[${detailIndex}][jumlah]" class="form-control jumlah" min="1" value="1" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Harga Satuan</label>
                            <input type="number" name="detail[${detailIndex}][harga]" class="form-control harga" min="0" value="0" required>
                        </div>
                        <div class="col-md-3 mb-3 d-flex align-items-end">
                            <label class="form-label me-2">Subtotal:</label>
                            <span class="subtotal-text fw-bold">0.00</span>
                            <input type="hidden" name="detail[${detailIndex}][subtotal]" class="subtotal-input" value="0">
                            <button type="button" class="btn btn-danger btn-sm ms-3 hapusDetail">Hapus</button>
                        </div>
                    </div>
                `;
                
                container.appendChild(newRow);
                detailIndex++;
                hitungTotalNota(); // Recalculate total after adding
            });

            // Hitung total awal saat halaman dimuat
            document.querySelectorAll('.detail-row').forEach(row => {
                hitungSubtotal(row);
            });
            hitungTotalNota();
        });
    </script>
</body>
</html>