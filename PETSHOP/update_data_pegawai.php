<?php
	
	include "koneksi.php";
	
	
	$id_user=$_POST['id_user'];
	$pass=md5($_POST['password']);
	
	$nama_lengkap=$_POST['nama_lengkap'];
	$alamat=$_POST['alamat'];
	$kode_pos=$_POST['kode_pos'];
	$jk=$_POST['jk'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$no_telp=$_POST['no_telp'];
	$email=$_POST['email'];
	

	$update_pegawai=mysql_query("UPDATE user SET password='$pass', nama_lengkap='$nama_lengkap', alamat='$alamat'
	, kode_pos='$kode_pos', jk='$jk', tgl_lahir='$tgl_lahir', no_telp='$no_telp', email='$email'
	WHERE id_user='$id_user'");
	
	
	if($update_pegawai)
	{
		header("location:halaman_pegawai.php");
	}
	else
	{
		echo "gagal";
	}
	

?>