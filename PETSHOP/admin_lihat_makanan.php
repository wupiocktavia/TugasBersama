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
<?php include "header_admin.php";?>
			
<div id="body">
<div id="content">
<div class="content">
<div class="about">
	<h2>Data makanan</h2>
	<ul>
	<li>
	<form method="post" action="form_update_makanan.php" class="login">
	<table width="90%"  align="center" border=3>
		<?php
		include "koneksi.php";
		$id_makanan=$_GET['id_makanan'];
		$lihat_makanan=mysql_query("SELECT * FROM makanan WHERE id_makanan='$id_makanan'");
		$data=mysql_fetch_array($lihat_makanan);
		
		$data['diskon']=$data['diskon']*100;
		echo " <tr>
					<td rowspan=4><img src= '$data[direktori_gambar_makanan]' width=150 height=150></td>
					<td>Nama Makanan : $data[nama_makanan]</td>
				</tr>
				<tr><td>Harga Makanan : $data[harga_makanan]</td></tr>
				<tr><td>Diskon : $data[diskon] %</td> </tr>
				<tr><td>Stok : $data[stok]</td></tr>
				<tr>
					<td colspan=2 align=center>
					<a href=form_update_makanan.php?id_makanan=$id_makanan align=center><img src=images/tombol_update.jpg></a>
					<input type=button value=Batal onclick=self.history.back()>
					</td>
				</tr>
														
				";
		?>						
	</table>
	</form>
	</li>
	</ul>							
</div>
</div>
						
<div id="sidebar">
	<?php include "cari.php"; ?>
	<?php include "shoping_guide.php"; ?>
	<?php include "iklan.php"; ?>
</div>
			
<div id="footer">
	<?php include "footer.php"; ?>
</div>
			
	
</body>
</html>
