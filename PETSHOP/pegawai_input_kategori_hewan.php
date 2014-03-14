<?php
	include "koneksi.php";

	
	$id_kategori_hewan=$_POST['id_kategori_hewan'];
	$nama_kategori_hewan=$_POST['nama_kategori_hewan'];
	
	
	$input_kategori_hewan=mysql_query("INSERT INTO kategori_hewan (id_kategori_hewan, nama_kategori_hewan) VALUES ('$id_kategori_hewan', '$nama_kategori_hewan')");
		
		if($input_kategori_hewan)
		{
			header("location:pegawai_lihat_kat_hewan.php");
		}
		else
		{
			echo "gagal";
		}
?>

