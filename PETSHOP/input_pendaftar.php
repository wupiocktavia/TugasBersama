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

	  
			<?php include "header.php"; ?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							   

<?php
	include "koneksi.php";
	
	$query=mysql_query("SELECT * from temp");
	$ketemu=mysql_num_rows($query);
	$row=mysql_fetch_array($query);
	//$atribut = mysql_fetch_assoc($query);
	$query2=mysql_query("SELECT * FROM user WHERE status_akses='MEMBER'");
	$ketemu2=mysql_num_rows($query2);
	
	$no=$ketemu+$ketemu2+1;
	$pass=md5($_POST['pass']);
	$cpass=md5($_POST['cpass']);
	$status_akses="MEMBER";
	$nama_lengkap=$_POST['nama_lengkap'];
	$alamat=$_POST['alamat'];
	$kode_pos=$_POST['kode_pos'];
	$jk=$_POST['jk'];
	/*$tanggal=$_POST['tanggal'];
	$bulan=$_POST['bulan'];
	$tahun=$_POST['tahun'];
	$tgl_lahir=$tahun."-".$bulan."-".$tanggal;*/
	$tgl_lahir=$_POST['tgl_lahir'];
	$no_telp=$_POST['no_telp'];
	$email=$_POST['email'];
	
	/*echo $nama_lengkap;
	echo $pass;
	echo $no;
	echo $tgl_lahir;*/
	
	if($pass==$cpass)
	{
	$input_daftar=mysql_query("INSERT INTO temp VALUES ('$no','$nama_lengkap','$pass','$alamat','$kode_pos','$jk','$tgl_lahir','$no_telp','$email')");
	if($input_daftar)
	{
	echo "<h2>Selamat Anda berhasil mendaftar. Konfirmasi Member akan dikirimkan lewat E-mail atau SMS dalam beberapa hari. <br> Terima Kasih.</h2>";
	}
	else
	{
		echo "gagal";
	}
	}
	else
	{
		echo "<script language=\"Javascript\">\n
confirmed = window.confirm('Password Tidak Cocok!!!');
</script>";
	header("location:register.php");	
	}
	
	
	
	
	

?>
						
															
							</div>
						</div>
						
					    <div id="sidebar">
						
						
						        
								<?php include "form_login.php"; ?>
								<?php include "cari.php"; ?>
								
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
