<?php
	include "koneksi.php";
	$id_hewan=$_POST['id_hewan'];
	$stok=$_POST['stok'];
	
	$tampil_hewan=mysql_query("SELECT * FROM hewan WHERE id_hewan='$id_hewan'");
	$data=mysql_fetch_array($tampil_hewan);
	
	$stok=$data['stok']+$stok;
	
	$tambah_stok=mysql_query("UPDATE hewan SET stok='$stok' WHERE id_hewan='$id_hewan'");
	
	if($tambah_stok)
	{
		header("location:form_tambah_stok_hewan.php?id_hewan=$id_hewan");
	}
	else
	{
		echo "GAGAL";
	}
?>