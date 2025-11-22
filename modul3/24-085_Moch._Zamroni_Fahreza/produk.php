<?php 
// 1. produk dengan harga
$produk = [
  "Mie Ayam" => 10000,
  "Bakso" => 15000,
  "Es Teh" => 3000
];
var_dump($produk);
echo "<br><br>";

// 2. Menghitnga rata-rata nilai array multidimensi
$nilai = [
  "Jokopi" => [
    "kalkulus" => 90,
    "paw" => 80,
    "jarkom"=> 95
  ],
  "Wowo" => [
    "kalkulus" => 70,
    "paw" => 90,
    "jarkom"=> 85
    ]
  ];
  
function rataNilai($data) {
  foreach ($data as $nama => $mapel) {
    $total = 0;
    $count = 0;

    foreach ($mapel as $pelajaran => $nilaiMapel) {
      $total += $nilaiMapel;
      $count++;
    }

    $rata = $total / $count;
    echo "Rata-rata nilai $nama = $rata<br>";
  }
}

rataNilai($nilai);
?>