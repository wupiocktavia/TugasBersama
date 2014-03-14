<?php
	include "koneksi.php";
	$id_barang=$_POST['id_barang'];
	$id_kategori_barang=$_POST['id_kategori_barang'];
	$nama_barang=$_POST['nama_barang'];
	$harga=$_POST['harga_barang'];
	$diskon=$_POST['diskon'];
	$diskon=$diskon/100;
	$update_barang=mysql_query("UPDATE barang SET id_kategori_barang='$id_kategori_barang', nama_barang='$nama_barang', harga_barang='$harga', diskon='$diskon' WHERE id_barang='$id_barang'");
	
	
	if($update_barang)
	{
		header("location:pegawai_lihat_barang.php?id_barang=$id_barang");
		}
		else
	{
		echo "gagal";
	}
?>