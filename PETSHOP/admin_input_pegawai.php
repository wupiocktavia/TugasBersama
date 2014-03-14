<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Pet Shop</title>
	<meta  charset=iso-8859-1" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<!--[if IE 6]>
		<link href="css/ie6.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 7]>
        <link href="css/ie7.css" rel="stylesheet" type="text/css" />  
	<![endif]-->
	
</head>

<body>

	  
			<?php include "header_admin.php"; ?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     
                                 <ul>

<?php
	include "koneksi.php";
	
	
	$query=mysql_query("SELECT * FROM user WHERE status_akses='PEGAWAI'");
	$ketemu=mysql_num_rows($query);
	
	$no=$ketemu+1;
	$id_user="PG".$no;
	$pass=md5($_POST['pass']);
	$cpass=md5($_POST['cpass']);
	$status_akses="PEGAWAI";
	$nama_lengkap=$_POST['nama_lengkap'];
	$alamat=$_POST['alamat'];
	$kode_pos=$_POST['kode_pos'];
	$jk=$_POST['jk'];
	
	$tgl_lahir=$_POST['tgl_lahir'];
	$no_telp=$_POST['no_telp'];
	$email=$_POST['email'];
	
	
	
	
	
	

	
	if($pass==$cpass)
	{
		$input_daftar=mysql_query("INSERT INTO user VALUES ('$id_user','$pass','$status_akses','$nama_lengkap','$alamat','$kode_pos','$jk','$tgl_lahir','$no_telp','$email')");
		if($input_daftar)
		{
			echo "<h2>Selamat Anda berhasil menambahkan Pegawai Baru. <br> Terima Kasih.<h2>";
			echo "<a href=admin_data_pegawai1.php>Kembali</a>";
		}
		else
		{
			echo "gagal";
		}
	}
	else
	{
		echo "<script language=\"Javascript\">\nconfirmed = window.confirm('Password Tidak Cocok!!!');</script>";
		header("location:admin_tambah_pegawai.php");	
	}

?>
						
								 </ul>							
							</div>
						</div>
						
					    <div id="sidebar">
						
						
								<?php include "admin_cari.php"; ?>
								
                               <?php include "shoping_guide.php"; ?>
				   
				   <?php include "iklan.php"; ?>
				  
			
			</div>
			
			<div id="footer">
			        <?php include "footer.php"; ?>
			</div>
			
	
</body>
</html>
</body>
</html>
