<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Pengguna</title>
    
</head>
<body>

    <div class="biodata-card">
        <?php
        $nama = isset($_GET['nama']) ? htmlspecialchars($_GET['nama']) : null;
        $usia = isset($_GET['usia']) ? htmlspecialchars($_GET['usia']) : null;
        $pekerjaan = isset($_GET['pekerjaan']) ? htmlspecialchars($_GET['pekerjaan']) : null;
        ?>

        <h1>Biodata Pengguna</h1>

        <table border="1">
            <tr>
                <th>Nama</th>
                <td>
                    <?php if ($nama): ?>
                        <strong><?php echo $nama; ?></strong>
                    <?php else: ?>
                        <span class="empty-state">Nama belum diisi.</span>
                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <th>Usia</th>
                <td>
                    <?php if ($usia): ?>
                        <strong><?php echo $usia; ?> tahun</strong>
                    <?php else: ?>
                        <span class="empty-state">Usia belum diisi.</span>
                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <th>Pekerjaan</th>
                <td>
                    <?php if ($pekerjaan): ?>
                        <strong><?php echo $pekerjaan; ?></strong>
                    <?php else: ?>
                        <span class="empty-state">Pekerjaan belum diisi.</span>
                    <?php endif; ?>
                </td>
            </tr>
        </table>

        <div class="info-url">
            <p>
                Untuk menampilkan data, tambahkan parameter ke URL seperti contoh berikut:<br>
                <code>?nama=Budi&usia=25&pekerjaan=Programmer</code>
            </p>
        </div>
    </div>

</body>
</html>