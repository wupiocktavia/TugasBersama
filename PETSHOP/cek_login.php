<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pet Shop</title>
</head>
<?php
session_start();
$id_user=$_POST['id_user'];
$pass=$_POST['password'];
$password=md5($_POST['password']);
include "koneksi.php";
$id_user = stripslashes($id_user);
$password = stripslashes($password);
$username = mysql_real_escape_string($id_user);
$password = mysql_real_escape_string($password);

$login=mysql_query("SELECT * FROM user WHERE id_user='$id_user'");
$ketemu=mysql_num_rows($login);
$data=mysql_fetch_array($login);
$atribut = mysql_fetch_assoc($login);

//echo $data[password];
	if (($data[$ketemu-1] == $id_user) and ($data[$ketemu]==$password))
	{
		//session_register("namauser");
		//session_register("passuser");
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['nama_lengkap']=$data['nama_lengkap'];
		$_SESSION['password']=$data['password'];
		$_SESSION['pass']=$pass;
		//$_SESSION['alamattoko'] =$data['KodeToko'];
		$_SESSION['status_akses'] =$data['status_akses'];
		//echo  $_SESSION['status'];
		if($data['status_akses']=='ADMIN')
		{session_start();
			$status='ADMIN';
			header("location:halaman_admin.php");
		}
		else if($data['status_akses']=='PEGAWAI')
		{
			$status='PEGAWAI';
			header("location:halaman_pegawai.php");
		}
		else if($data['status_akses']=='MEMBER')
		{
			$status='MEMBER';
			header("location:halaman_member.php");
		}
		//
	    //exit;
	}
	else
	{
		
		header("location:index.php");
	}

?>

<body>
</body>
</html>
