<?php
	include "koneksi.php";
	$id_perawatan=$_POST['id_perawatan'];
	$nama_perawatan=$_POST['nama_perawatan'];
	
	$input=mysql_query("INSERT INTO perawatan VALUES ('$id_perawatan', '$nama_perawatan')");
	if($input)
	header("location:pegawai_perawatan1.php");
	else
	echo "gagal";
?>