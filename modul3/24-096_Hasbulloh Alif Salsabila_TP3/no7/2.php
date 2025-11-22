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
        "nim" => 240411100096, 
        "nama" => "Hasbulloh Alif Salsabila", 
        "nilai" => [80, 87, 85]
    ], 
    [ 
        "nim" => 240411100069, 
        "nama" => "Hanifah Ulayya", 
        "nilai" => [99, 88, 77]
    ],
    [ 
        "nim" => 240411100044, 
        "nama" => "Aisyah", 
        "nilai" => [67, 97, 60]
    ],
    [ 
        "nim" => 240411100046, 
        "nama" => "Yasmin Zahiroh", 
        "nilai" => [87, 88, 56]
    ],
    [ 
        "nim" => 240411100001, 
        "nama" => "Haura Insyirah", 
        "nilai" => [60, 77, 90]
    ]
]; 
$RataKeseluruhan = RataRata($mahasiswa);
echo "Nilai Rata-Rata Keseluruhan semua mahasiswa adalah ". round($RataKeseluruhan);
?>