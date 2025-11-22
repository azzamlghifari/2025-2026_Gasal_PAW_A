<?php
require('fpdf/fpdf.php');
$koneksi = new mysqli("localhost", "root", "", "modul7_penjualan");

$tgl1 = $_GET['tgl1'];
$tgl2 = $_GET['tgl2'];

$data = $koneksi->query("
    SELECT * FROM transaksi
    WHERE tanggal_transaksi BETWEEN '$tgl1' AND '$tgl2'
");

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Laporan Penjualan',0,1,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(190,7,"Periode: $tgl1 s/d $tgl2",0,1);

$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(60,8,'Tanggal',1);
$pdf->Cell(60,8,'Total',1);
$pdf->Ln();

$pdf->SetFont('Arial','',10);

while($d = $data->fetch_assoc()){
    $pdf->Cell(60,8,$d['tanggal_transaksi'],1);
    $pdf->Cell(60,8,$d['total'],1);
    $pdf->Ln();
}

$pdf->Output();
?>
