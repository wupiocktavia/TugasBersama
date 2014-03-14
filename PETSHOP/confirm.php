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

<?php session_start(); 
$_SESSION['status_akses'];
?>


	<?php include "header_admin.php"; ?>
		
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
                                 <ul>

<?php
	include "koneksi.php";
	$no=$_POST['no'];
	$query=mysql_query("SELECT * from temp where no='$no'");
	//$ketemu=mysql_num_rows($query);
	$row=mysql_fetch_array($query);
	//$atribut = mysql_fetch_assoc($query);
	
	
	
	$id_user="M".$no;
	$pass=md5($row['password']);
	$status_akses="MEMBER";
	$nama_lengkap=$_POST['nama_lengkap'];
	$alamat=$_POST['alamat'];
	$kode_pos=$_POST['kode_pos'];
	$jk=$_POST['jk'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$no_telp=$_POST['no_telp'];
	$email=$_POST['email'];
	
	
	$input_user=mysql_query("INSERT INTO user VALUES ('$id_user','$pass','$status_akses','$nama_lengkap','$alamat','$kode_pos','$jk','$tgl_lahir','$no_telp','$email')");
	
	$hapus_daftar=mysql_query("DELETE FROM temp WHERE no='$no'");
	echo "<br><br><br><br>";
	echo "<h2>Konfirmasi Member dengan Nama <b>$nama_lengkap</b> Berhasil. </h2>";
	
	echo "<br><br><br>";
	

?>
						
								 </ul>							
							</div>
						</div>
						
					    <div id="sidebar">
						
						
						        
								<?php //include "form_login.php"; ?>
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
