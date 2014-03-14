<?php
include "koneksi.php";
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
ob_start();
#ambil data di tabel dan masukkan ke array
$query = "SELECT id_nota_barang, nama_lengkap, tgl_transaksi, total_harga FROM transaksi_pembelian_barang JOIN USER USING (id_user) WHERE MONTH(tgl_transaksi)='$bulan' AND YEAR(tgl_transaksi)='$tahun'";
$sql = mysql_query($query);
$data = array();

if($bulan==1)
{
	$bln="JANUARI";
}
else if($bulan==2)
{
	$bln="FEBRUARI";
}
else if($bulan==3)
{
	$bln="MARET";
}
else if($bulan==4)
{
	$bln="APRIL";
}
else if($bulan==5)
{
	$bln="MEI";
}
else if($bulan==6)
{
	$bln="JUNI";
}
else if($bulan==7)
{
	$bln="JULI";
}
else if($bulan==8)
{
	$bln="AGUSTUS";
}
else if($bulan==9)
{
	$bln="SEPTEMBER";
}
else if($bulan==10)
{
	$bln="OKTOBER";
}
else if($bulan==11)
{
	$bln="NOVEMBER";
}
else if($bulan==12)
{
	$bln="DESEMBER";
}

while ($row = mysql_fetch_assoc($sql)) {
array_push($data, $row);
}
#setting judul laporan dan header tabel
$judul = "LAPORAN DATA TRANSAKSI BARANG BULAN $bln TAHUN $tahun";
$header = array(
array("label"=>"Id Nota", "length"=>30, "align"=>"L"),
array("label"=>"Nama Pelanggan", "length"=>80, "align"=>"L"),
array("label"=>"Tanggal Transaksi", "length"=>40, "align"=>"L"),
array("label"=>"Total Belanja (Rp)", "length"=>40, "align"=>"L")
);
#sertakan library FPDF dan bentuk objek
require_once("fpdf16/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
#tampilkan judul laporan
$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,20, $judul, '0', 1, 'C');
#buat header tabel
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
foreach ($header as $kolom) {
$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0',
$kolom['align'], true);
}
$pdf->Ln();
#tampilkan data tabelnya
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
$i = 0;
foreach ($baris as $cell) {
$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0',
$kolom['align'], $fill);
$i++;
}
$fill = !$fill;
$pdf->Ln();
}
#output file PDF
$pdf->Output();
?>