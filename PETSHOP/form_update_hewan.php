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
		<h2>Update Data Hewan</h2>
        <ul>
		<li>
		<form method="post" action="update_hewan.php" class="login">
			<table width="90%"  align="center">
			<?php
	include "koneksi.php";
	
	$id_hewan=$_GET['id_hewan'];
	$tampil_hewan=mysql_query("SELECT * FROM hewan where id_hewan='$id_hewan'");
	$data=mysql_fetch_array($tampil_hewan);
	
	
?>


			<tr>
				<td><label for="id">ID hewan</label></td>
				<td>:</td>
				<td>
				<input  name="id_hewan" type="text" value="<?php echo $id_hewan;?>" size="8" maxlength="8" readonly>
				</td>
			</tr>
			
			<tr>
				<td>Kategori hewan</td>
				<td>:</td>
				<td>
					<input name="id_kategori_hewan"  size=8 type="text" value="<?php echo $data['id_kategori_hewan']; ?>" >
				</td>
			</tr>
			
			<tr>
				<td>Nama hewan</td>
				<td>:</td>
				<td>
				<input name="nama_hewan" type="text" size=50 value="<?php echo $data['nama_hewan'];?>" >
				</td>
			</tr>
			
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td>
					Rp. <input type=text name="harga_hewan" size=20 value="<?php echo $data['harga_hewan'];?>">
				</td>
			</tr>
			
			<tr>
				<td>Diskon</td>
				<td>:</td>
				<td>
					<input name="diskon" type="text" size=10 value="<?php $data['diskon']=$data['diskon']*100; echo $data['diskon'];?>" >%
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
