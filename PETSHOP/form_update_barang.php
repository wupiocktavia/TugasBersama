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
<?php include "koneksi.php"; ?>
<?php session_start(); ?>
<?php include "header_pegawai.php"; ?>
			
	<div id="body">
	<div id="content">
	<div class="content">
	<div class="about">
		<h2>Update Data Barang</h2>
        <ul>
		<li>
		<form method="post" action="update_barang.php" class="login">
			<table width="90%"  align="center">
			<?php
	include "koneksi.php";
	
	$id_barang=$_GET['id_barang'];
	$tampil_barang=mysql_query("SELECT * FROM barang where id_barang='$id_barang'");
	$data=mysql_fetch_array($tampil_barang);
	
	
?>


			<tr>
				<td><label for="id">ID Barang</label></td>
				<td>:</td>
				<td>
				<input  name="id_barang" type="text" value="<?php echo $id_barang;?>" size="8" maxlength="8" readonly>
				</td>
			</tr>
			
			<tr>
				<td>Kategori Barang</td>
				<td>:</td>
				<td>
					<input name="id_kategori_barang" size=8 type="text" value="<?php echo $data['id_kategori_barang']; ?>" >
				</td>
			</tr>
			
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td>
				<input name="nama_barang" type="text" size=50 value="<?php echo $data['nama_barang'];?>" >
				</td>
			</tr>
			
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td>
					Rp. <input type=text size=20 name="harga_barang" value="<?php echo $data['harga_barang'];?>">
				</td>
			</tr>
			
			<tr>
				<td>Diskon</td>
				<td>:</td>
				<td>
					<input name="diskon" size=8 type="text" value="<?php $data['diskon']=$data['diskon']*100; echo $data['diskon'];?>" >%
				</td>
			</tr>
			
			
			<tr>
				<td></td>
				<td></td>
				<td>
					<button type="submit" class="btn btn-primary">Update</button>
					<button type="submit" on.click=self.history.back()>Batal</button>
				</td>
			</tr>
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
</body>
</html>
