<?php
	include "koneksi.php";

	$id_hewan=$_POST['id_hewan'];
	$id_kategori_hewan=$_POST['id_kategori_hewan'];
	$nama_hewan=$_POST['nama_hewan'];
	$harga_hewan=$_POST['harga_hewan'];
	$diskon=$_POST['diskon'];
	$stok=$_POST['stok'];
	
	$diskon=$diskon/100;
	
	$input_hewan=mysql_query("INSERT INTO hewan (id_hewan, id_kategori_hewan, nama_hewan, harga_hewan, diskon, stok) VALUES ('$id_hewan', '$id_kategori_hewan', '$nama_hewan', '$harga_hewan', '$diskon', '$stok')");
		
		if($input_hewan)
		{
			header("location:form_upload_gambar_hewan.php?id_hewan=$id_hewan");
		}
		else
		{
			echo "gagal";
		}
?>

