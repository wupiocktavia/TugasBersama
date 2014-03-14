<?php
	include "koneksi.php";

	
	$id_kategori_barang=$_POST['id_kategori_barang'];
	$nama_kategori_barang=$_POST['nama_kategori_barang'];
	
	
	$input_kategori_barang=mysql_query("INSERT INTO kategori_barang (id_kategori_barang, nama_kategori_barang) VALUES ( '$id_kategori_barang','$nama_kategori_barang')");
		
		if($input_kategori_barang)
		{
			header("location:pegawai_lihat_kat_barang.php");
		}
		else
		{
			echo "gagal";
		}
?>

