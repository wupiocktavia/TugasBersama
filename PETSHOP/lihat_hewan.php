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
<?php include "header.php";?>
			
<div id="body">
<div id="content">
<div class="content">
<div class="about">
	<h2>Data hewan</h2>
	<ul>
	<li>
	<form method="post" action="form_update_hewan.php" class="login">
	<table width="90%"  align="center" border=0>
		<?php
		include "koneksi.php";
		$id_hewan=$_GET['id_hewan'];
		$lihat_hewan=mysql_query("SELECT * FROM hewan WHERE id_hewan='$id_hewan'");
		$data=mysql_fetch_array($lihat_hewan);
		
		$data['diskon']=$data['diskon']*100;
		echo " <tr>
					<td rowspan=4><img src= '$data[direktori_gambar_hewan]' width=150 height=150></td>
					<td>Nama hewan : $data[nama_hewan]</td>
				</tr>
				<tr><td>Harga hewan : $data[harga_hewan]</td></tr>
				<tr><td>Diskon : $data[diskon] %</td> </tr>
				<tr><td>Stok : $data[stok]</td></tr>
				<tr>
					<td colspan=2 align=center>
					
					</td>
				</tr>
				<tr><td colspan=3><a href=produk.php>Kembali</a></td><tr>										
				";
		?>						
	</table>
	</form>
	</li>
	</ul>							
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
