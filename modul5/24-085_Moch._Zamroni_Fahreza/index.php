<?php 
require 'config.php';
$res = mysqli_query($conn ,"SELECT * FROM supplier");
echo "<link rel='stylesheet' href='./style.css'>";

if(mysqli_num_rows($res) > 0){
  echo "<h1>Data Master Supplier<h1>";
  echo "<a href='./tambah.php'><button>Tambah Data</button></a>";
  echo "<table border='1'>";
  echo "
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Telp</th>
    <th>Alamat</th>
    <th>Tindakan</th>
  </tr>
  ";
  $i = 1;
  foreach($res as $r){
    echo "<tr>";
    echo "<td>" . $i++ . "</td>";
    echo "<td>" . $r['nama'] . "</td>";
    echo "<td>" . $r['telp'] . "</td>";
    echo "<td>" . $r['alamat'] . "</td>";
    echo "<td>
            <a href='./edit.php?id=$r[id]'><button>Edit</button></a>
            <a href='./hapus.php?id=$r[id]' onclick=\"return confirm('Yakin ingin menghapus data ini?');\"><button>Hapus</button></a>
          </td>";
    echo "</tr>";
  }
}else{
  echo "Tidak ada data";
}
?>