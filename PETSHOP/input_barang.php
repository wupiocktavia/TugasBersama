<?php
	include "koneksi.php";

	$id_barang=$_POST['id_barang'];
	$id_kategori_barang=$_POST['id_kategori_barang'];
	$nama_barang=$_POST['nama_barang'];
	$harga_barang=$_POST['harga_barang'];
	$diskon=$_POST['diskon'];
	$stok=$_POST['stok'];
	
	$diskon=$diskon/100;
	
	$input_barang=mysql_query("INSERT INTO barang (id_barang,id_kategori_barang, nama_barang, harga_barang, diskon, stok) VALUES ('$id_barang', '$id_kategori_barang', '$nama_barang', '$harga_barang', '$diskon', '$stok')");
		
		if($input_barang)
		{
			header("location:form_upload_gambar_barang.php?id_barang=$id_barang");
		}
		else
		{
			echo "gagal";
		}
?>

