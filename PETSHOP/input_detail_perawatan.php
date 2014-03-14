<?php
	include "koneksi.php";
	$id_detail_perawatan=$_POST['id_detail_perawatan'];
	$id_perawatan=$_POST['id_perawatan'];
	$id_kategori_hewan=$_POST['id_kategori_hewan'];
	$harga_perawatan=$_POST['harga_perawatan'];
	$diskon=$_POST['diskon'];
	$diskon=$diskon/100;
	$input=mysql_query("INSERT INTO detail_perawatan VALUES ('$id_detail_perawatan','$id_perawatan', '$id_kategori_hewan', '$harga_perawatan', '$diskon')");
	if($input)
	header("location:pegawai_perawatan.php");
	else
	echo "gagal";
?>