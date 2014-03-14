<?php
	include "koneksi.php";
	$id_barang=$_POST['id_barang'];
	$stok=$_POST['stok'];
	
	$tampil_barang=mysql_query("SELECT * FROM barang WHERE id_barang='$id_barang'");
	$data=mysql_fetch_array($tampil_barang);
	
	$stok=$data['stok']+$stok;
	
	$tambah_stok=mysql_query("UPDATE barang SET stok='$stok' WHERE id_barang='$id_barang'");
	
	if($tambah_stok)
	{
		header("location:form_tambah_stok_barang.php?id_barang=$id_barang");
	}
	else
	{
		echo "GAGAL";
	}
?>