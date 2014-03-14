<?php
	include "koneksi.php";
	$id_makanan=$_POST['id_makanan'];
	$stok=$_POST['stok'];
	
	$tampil_makanan=mysql_query("SELECT * FROM makanan WHERE id_makanan='$id_makanan'");
	$data=mysql_fetch_array($tampil_makanan);
	
	$stok=$data['stok']+$stok;
	
	$tambah_stok=mysql_query("UPDATE makanan SET stok='$stok' WHERE id_makanan='$id_makanan'");
	
	if($tambah_stok)
	{
		header("location:form_tambah_stok_makanan.php?id_makanan=$id_makanan");
	}
	else
	{
		echo "GAGAL";
	}
?>