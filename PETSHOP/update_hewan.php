<?php
	include "koneksi.php";
	$id_hewan=$_POST['id_hewan'];
	$id_kategori_hewan=$_POST['id_kategori_hewan'];
	$nama_hewan=$_POST['nama_hewan'];
	$harga=$_POST['harga_hewan'];
	$diskon=$_POST['diskon'];
	$diskon=$diskon/100;
	$update_hewan=mysql_query("UPDATE hewan SET id_kategori_hewan='$id_kategori_hewan', nama_hewan='$nama_hewan', harga_hewan='$harga', diskon='$diskon' WHERE id_hewan='$id_hewan'");
	
	
	if($update_hewan)
	{
		header("location:pegawai_lihat_hewan.php?id_hewan=$id_hewan");
		}
		else
	{
		echo "gagal";
	}
?>