<?php
	include "koneksi.php";
	$id_perawatan=$_POST['id_perawatan'];
	$nama_perawatan=$_POST['nama_perawatan'];
	
	$update_perawatan=mysql_query("UPDATE perawatan SET  nama_perawatan='$nama_perawatan' WHERE id_perawatan='$id_perawatan'");
	
	
	if($update_perawatan)
	{
		header("location:pegawai_perawatan1.php");
		}
		else
	{
		echo "gagal";
	}
?>