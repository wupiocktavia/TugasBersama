<?php
	include "koneksi.php";
	$no=$_GET['no'];
	
	$hapus_pendaftar=mysql_query("DELETE FROM temp WHERE no='$no'");
	
	
		header("location:halaman_admin.php");
	
?>