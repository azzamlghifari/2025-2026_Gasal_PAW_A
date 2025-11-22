<?php include 'db.php'; ?>

<html>
  <head>
    <title>Data Supplier</title>
    <style>
    body { 
      font-family: Arial, sans-serif; 
      padding:30px;
    }
    .container { 
      background:white; 
      width:900px; 
      margin:auto; 
      padding:20px; 
      border-radius:10px; 
      box-shadow:0 4px 15px rgba(0,0,0,0.1); 
    }
    h2 {
      color:#005f99; 
      margin-bottom:20px; 
    }
    table { 
      width:100%; 
      border-collapse:collapse; 
      margin-top:10px; 
    }
    th, td { 
      border:1px solid #ccc; 
      padding:8px; 
      text-align:center; 
    }
    th { 
      background:#4CAF50; 
      color:white; 
    }
    a.button { 
      text-decoration:none; 
      color:white; 
      padding:6px 10px; 
      border-radius:4px; 
      margin:2px; 
      display:inline-block; 
    }
    .add { 
      background:#28a745; 
    }
    .edit { 
      background:#f0ad4e; 
    }
    .delete { 
      background:#d9534f; 
    }
    a.button:hover { 
      opacity:0.9; 
    }
    .topbar { 
      text-align:right; 
      margin-bottom:10px; 
    }
    .popup-bg { 
      display:none; 
      position:fixed; 
      top:0; 
      left:0; 
      right:0; 
      bottom:0; 
      background:rgba(0,0,0,0.5); 
      align-items:center; 
      justify-content:center; 
    }
    .popup { 
      background:white; 
      padding:20px; 
      border-radius:8px; 
      text-align:center; 
      width:300px; 
    }
    .popup h3 { 
      margin-top:0; 
    }
    </style>
    </head>
    <body>
      <div class="container">
        <h2>Data Master Supplier</h2>
        <div class="topbar">
          <a href="tambah.php" class="button add">Tambah Data</a>
        </div>
        <table>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Alamat</th>
            <th>Tindakan</th>
          </tr>
          
          <?php
          $result = $conn->query("SELECT * FROM supplier ORDER BY id ASC");
          if ($result && $result->num_rows > 0):
            $no = 1;
            while($row = $result->fetch_assoc()):
          ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($row['nama']) ?></td>
            <td><?= htmlspecialchars($row['telp']) ?></td>
            <td><?= htmlspecialchars($row['alamat']) ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="button edit">Edit</a>
                <a href="#" class="button delete" onclick="openPopup(<?= $row['id'] ?>)">Hapus</a>
            </td>
          </tr>
          
          <?php endwhile; else: ?>
            <tr><td colspan="5">Belum ada data supplier.</td></tr>
            <?php endif; ?>
        </table>
      </div>

<!-- Popup Konfirmasi -->
 <div class="popup-bg" id="popup">
 <div class="popup">
  <h3>localhost says</h3>
  <p>Anda yakin ingin menghapus supplier ini?</p>
  <div style="margin-top:15px;">
    <a href="#" id="btn-hapus" class="button delete">OK</a>
    <a href="#" onclick="closePopup()" class="button edit">Cancel</a>
  </div>
  </div>
</div>

<script>
let deleteId = null;
function openPopup(id){
  deleteId = id;
  document.getElementById('popup').style.display='flex';
  document.getElementById('btn-hapus').href='hapus.php?id='+id;
}
function closePopup(){
  document.getElementById('popup').style.display='none';
}
</script>
</body>
</html>
