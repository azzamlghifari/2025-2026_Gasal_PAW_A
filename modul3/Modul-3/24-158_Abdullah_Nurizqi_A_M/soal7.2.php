<?php
function RataRata($mahasiswa){
    $total_nilai = 0;
    $jumlah_mahasiswa = 0;

    foreach ($mahasiswa as $mh){
        foreach ($mh['nilai'] as $nilai){
            $total_nilai+=$nilai;
            $jumlah_mahasiswa++;
        }
    }
    if ($jumlah_mahasiswa > 0){
        return $total_nilai / $jumlah_mahasiswa;
    }else{
        return 0;
    }
};
$mahasiswa = [ 
    [ 
        "nim" => 240411100111, 
        "nama" => "uqi", 
        "nilai" => [80, 80, 80]
    ], 
    [ 
        "nim" => 240411100222, 
        "nama" => "asep", 
        "nilai" => [95, 85, 75]
    ],
    [ 
        "nim" => 240411100333, 
        "nama" => "edward", 
        "nilai" => [87, 98, 88]
    ]
]; 
$RataKeseluruhan = RataRata($mahasiswa);
echo "Nilai Rata-Rata Keseluruhan semua mahasiswa adalah ". round($RataKeseluruhan);
?>