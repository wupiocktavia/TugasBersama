<?php
	include "koneksi.php";
	$id_detail_perawatan=$_POST['id_detail_perawatan'];
	$id_perawatan=$_POST['id_perawatan'];
	$id_kategori_hewan=$_POST['id_kategori_hewan'];
	$harga_perawatan=$_POST['harga_perawatan'];
	$diskon=$_POST['diskon'];
	$diskon=$diskon/100;
	
	$update_detail_perawatan=mysql_query("UPDATE detail_perawatan SET  id_perawatan='$id_perawatan' , id_kategori_hewan='$id_kategori_hewan', harga_perawatan='$harga_perawatan', diskon='$diskon' WHERE id_detail_perawatan='$id_detail_perawatan'");
	
	
	if($update_detail_perawatan)
	{
		header("location:pegawai_perawatan.php");
		}
		else
	{
		echo "gagal";
	}
?>