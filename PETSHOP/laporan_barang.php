<?php
include "koneksi.php";
ob_start();
#ambil data di tabel dan masukkan ke array
$query = "SELECT id_barang,  nama_barang, nama_kategori_barang,harga_barang, diskon, stok
FROM barang JOIN kategori_barang USING (id_kategori_barang) ORDER BY id_barang asc";
$sql = mysql_query($query);
$data = array();
while ($row = mysql_fetch_assoc($sql)) {
array_push($data, $row);
}
#setting judul laporan dan header tabel
$judul = "LAPORAN DATA BARANG";
$header = array(
array("label"=>"Id Barang", "length"=>20, "align"=>"L"),
array("label"=>"Nama Barang", "length"=>95, "align"=>"L"),
array("label"=>"Kategori Barang", "length"=>30, "align"=>"L"),
array("label"=>"Harga (Rp)", "length"=>25, "align"=>"L"),
array("label"=>"Diskon", "length"=>15, "align"=>"L"),
array("label"=>"Stok", "length"=>10, "align"=>"L")
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