<?php
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->SetMargins(35,10,10);
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFillColor(0,255,255);
$pdf->SetTextColor(0);
$pdf->SetFont('Arial','B',16);

// mencetak string 
$pdf->Cell(231,7,'Laporan Booking Studio',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(231,7,'AR Studio Music',0,1,'C');
$pdf->Line(21,800,277,800);
$pdf->Line(21,30,277,30);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Ln(6);
$pdf->Cell(220,7,'',0,1);

 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(45,6,'Nama Band',1,0,'C');
$pdf->Cell(60,6,'Studio yang Dipakai',1,0,'C');
$pdf->Cell(36,6,'Jam Mulai',1,0,'C');
$pdf->Cell(30,6,'Lama Sewa',1,0,'C');
$pdf->Cell(27,6,'No. Rekening',1,1,'C');
 
$pdf->SetFont('Arial','',10);
include '../koneksi.php';
$ambil = mysqli_query($conn, "SELECT nama, judul_ruangan , jam_mulai, lama_sewa, no_rekening FROM booking");
 while ($row = mysqli_fetch_array($ambil)){
    $pdf->Cell(45,6,$row['nama'],1,0,'C');
    $pdf->Cell(60,6,$row['judul_ruangan'],1,0,'C');
    $pdf->Cell(36,6,$row['jam_mulai'],1,0,'C');
    $pdf->Cell(30,6,$row['lama_sewa'],1,0); 
    $pdf->Cell(27,6,$row['no_rekening'],1,1);
    
}
$pdf->Output();
?>