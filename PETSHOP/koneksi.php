<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pet Shop</title>
</head>
<?php
	$server = "localhost";
	//$username = "root";
	//$password = "root";
	$database = "petshop";
	
	//koneksi dan memilih database di server
	mysql_connect($server, "root", "") or die("Gagal");
	mysql_select_db($database) or die("Database tidak ditemukan");
?>
<body>
</body>
</html>
