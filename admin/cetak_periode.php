<?php
require('fpdf/fpdf.php');
$tgl1 = @$_POST['awal'];
$tgl2 = @$_POST['akhir'];
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A3');
// membuat halaman baru
$pdf->SetMargins(46,10,10);
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFillColor(0,255,255);
$pdf->SetTextColor(0);
$pdf->SetFont('Arial','B',20);

// mencetak string 
$pdf->Cell(322,9,'Laporan Pesanan',0,1,'C');
$pdf->Line(41,1000,377,1000);
$pdf->Line(41,30,377,30);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Ln(10);
$pdf->Cell(150,7,'',0,1);

 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(17,6,'ID Item',1,0,'C');
$pdf->Cell(27,6,'Jenis Item',1,0,'C');
$pdf->Cell(36,6,'Nama Penyewa',1,0,'C');
$pdf->Cell(30,6,'Harga Sewa',1,0,'C');
$pdf->Cell(27,6,'No Telp',1,0,'C');
$pdf->Cell(34,6,'Tanggal Pesan',1,0,'C');
$pdf->Cell(34,6,'Sampai Tanggal',1,0,'C');
$pdf->Cell(30,6,'Total Harga',1,0,'C');
$pdf->Cell(25,6,'Status',1,0,'C');
$pdf->Cell(30,6,'Di Bayar',1,0,'C');
$pdf->Cell(35,6,'Via Pembayaran',1,1,'C');
 
$pdf->SetFont('Arial','',10);
include '../koneksi.php';
$ambil = mysqli_query($conn, "SELECT tb_pesan.id_pesan, tb_pesan.id_kamar, tb_pesan.j_item , tb_pesan.nama_penyewa, tb_pesan.hrg_sewa, tb_pesan.telp, tb_pesan.tgl_awal, tb_pesan.tgl_akhir, tb_pesan.total_harga, tb_transaksi.status, tb_transaksi.dibayar, tb_transaksi.via_pembayaran FROM tb_pesan INNER JOIN tb_transaksi ON tb_pesan.id_pesan = tb_transaksi.id_pesan where tgl_awal and tgl_akhir between '$tgl1' and '$tgl2'");
 while ($row = mysqli_fetch_array($ambil)){
    $pdf->Cell(17,6,"ITM_".$row['id_kamar'],1,0,'C');
    $pdf->Cell(27,6,$row['j_item'],1,0,'C');
    $pdf->Cell(36,6,$row['nama_penyewa'],1,0,'C');
    $pdf->Cell(30,6,"Rp. ".number_format($row['hrg_sewa']),1,0); 
    $pdf->Cell(27,6,$row['telp'],1,0,'C');
    $pdf->Cell(34,6,$row['tgl_awal'],1,0,'C');
    $pdf->Cell(34,6,$row['tgl_akhir'],1,0,'C');
    $pdf->Cell(30,6,"Rp. ".number_format($row['total_harga']),1,0);
    $pdf->Cell(25,6,$row['status'],1,0,'C');
    $pdf->Cell(30,6,"Rp. ".number_format($row['dibayar']),1,0,'C');
    $pdf->Cell(35,6,$row['via_pembayaran'],1,1,'C');
}
$pdf->Output();
?>