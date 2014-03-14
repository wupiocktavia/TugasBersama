<?php
	$id_barang=$_POST['id_barang'];
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
		$url= "http://localhost/petshop/gambar";
		
		if(move_uploaded_file($lokasi_file, "$direktori"))
		{
		
		include "koneksi.php";
		$query=mysql_query("UPDATE barang SET direktori_gambar_barang='$direktori' WHERE id_barang='$id_barang'");
		if($query)
		{
			header("location:pegawai_lihat_barang.php?id_barang=$id_barang");
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