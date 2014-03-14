<?php
	include "koneksi.php";
	$id_user=$_GET['id_user'];
	
	mysql_query("Delete from user WHERE id_user='$id_user'");
	header("location:admin_data_member.php");
?>