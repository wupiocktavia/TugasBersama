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
<?php include "header_pegawai.php";?>
			
<div id="body">
<div id="content">
<div class="content">
<div class="about">
	<h2>Data Barang</h2>
	<ul>
	<li>
	<form method="post" action="form_update_barang.php" class="login">
	<table width="100%"  align="center" border=0>
		<?php
		include "koneksi.php";
		$id_barang=$_GET['id_barang'];
		$lihat_barang=mysql_query("SELECT * FROM barang WHERE id_barang='$id_barang'");
		$data=mysql_fetch_array($lihat_barang);
		
		$data['diskon']=$data['diskon']*100;
		echo " <tr>
					<td rowspan=4><img src= '$data[direktori_gambar_barang]' width=150 height=150></td>
					<td>Nama Barang : $data[nama_barang]</td>
				</tr>
				<tr><td>Harga Barang : $data[harga_barang]</td></tr>
				<tr><td>Diskon : $data[diskon] %</td> </tr>
				<tr><td>Stok : $data[stok]</td></tr>
				<tr>
					<td colspan=2 align=center>
					<a href=form_tambah_stok_barang.php?id_barang=$id_barang><img src=images/tambah.png width=50 height=50></a>
					<a href=form_update_barang.php?id_barang=$id_barang align=center><img src=images/ubah.png width=50 height=50></a>
				";?>
					<a href="hapus_barang.php?id_barang=<?php echo $id_barang; ?>" align="center" onClick="return confirm('Apakah anda yakin?')"><img src=images/hapus.png width=50 height=50></a>
					</td>
				
					
				</tr>
				<tr><td colspan=8><a href="pegawai_tampil_barang.php"><img src="images/back.png" width=40 height=40 align=right></a></td></tr>												
				
					
	</table>
	
	
	</form>
	</li>
	</ul>							
</div>
</div>
						
<div id="sidebar">
	<?php include "pegawai_cari.php"; ?>
	<?php include "shoping_guide.php"; ?>
	<?php include "iklan.php"; ?>
</div>
			
<div id="footer">
	<?php include "footer.php"; ?>
</div>
			
	
</body>
</html>
