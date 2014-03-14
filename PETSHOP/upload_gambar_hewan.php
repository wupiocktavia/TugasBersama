<?php
	$id_hewan=$_POST['id_hewan'];
	$tipe_file=$_FILES['fupload']['type'];
	$lokasi_file=$_FILES['fupload']['tmp_name'];
	$nama_file=$_FILES['fupload']['name'];
	$ukuran_file=$_FILES['fupload']['size'];
	
	if($tipe_file != "image/gif" AND $tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg" AND $tipe_file != "image/png")
	{
		echo "Upload Gagal !!! <br> Tipe File <b>$nama_file</b> : $tipe_file bukan gambar.";
	}
	else
	{
		$direktori="gambar/$nama_file";
		$url= "http://localhost/PETSHOP/gambar";
		
		if(move_uploaded_file($lokasi_file, "$direktori"))
		{
		
		
		
		
		include "koneksi.php";
		$query=mysql_query("UPDATE hewan SET direktori_gambar_hewan='$direktori' WHERE id_hewan='$id_hewan'");
		if($query)
		{
		header("location:pegawai_lihat_hewan.php?id_hewan=$id_hewan");
		}
		else
		echo "GAGAL";
		}
		
		else
		{
			echo "Upload Gagal";
		}
	}
?>