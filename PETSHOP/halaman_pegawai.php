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
<?php session_start(); 
$nama=$_SESSION['nama_lengkap'];
?>
<?php include "header_pegawai.php"; ?>
			
	<div id="body">
	<div id="content">
	<div class="content">
	<div class="about">
		<h2>Selamat Datang, <?php echo $nama ;?></h2>
        <ul>
		<li>
		<form method="post" action="update_data_pegawai.php" class="login">
			<table width="90%"  align="center">
			<?php 
				$id=$_SESSION['id_user'];
				$tampil_data=mysql_query("SELECT * FROM user WHERE status_akses='PEGAWAI' and id_user='$id'");
				$data_pegawai=mysql_fetch_array($tampil_data);
			?>
			<tr>
				<td><label for="id">ID User</label></td>
				<td>:</td>
				<td>
				<input  name="id_user" type="text" value="<?php echo $id;?>" size="8" maxlength="8" readonly>
				</td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input name="password" type="password" size="40" value="<?php echo $_SESSION['pass']; ?>" >
				</td>
			</tr>
			
			<tr>
				<td><label for="nama_lengkap">Nama Lengkap</label></td>
				<td>:</td>
				<td>
				<input name="nama_lengkap" type="text" size="40" maxlength="30" value="<?php echo $data_pegawai['nama_lengkap'];?>" >
				</td>
			</tr>
			
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat" maxlength="50"><?php echo $data_pegawai['alamat'];?></textarea>
				</td>
			</tr>
			
			<tr>
				<td>Kode Pos</td>
				<td>:</td>
				<td>
					<input name="kode_pos" size="5" maxlength="5" type="text" value="<?php echo $data_pegawai['kode_pos'];?>" >
				</td>
			</tr>
			
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input name="jk" type="text" size="2" maxlength="1" value="<?php echo $data_pegawai['jk'];?>" >
			</tr>
			
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td>
					<input name="tgl_lahir" type="date" value="<?php echo $data_pegawai['tgl_lahir'];?>" >
				</td>
			</tr>
			
			<tr>
				<td>No Telepon</td>
				<td>:</td>
				<td>
					<input name="no_telp" size="12" maxlength="12" type="text" value="<?php echo $data_pegawai['no_telp'];?>" >
			</tr>
			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" size="50" maxlength="50" value="<?php echo $data_pegawai['email'];?>" >
				</td>
			</tr>
			<script>
			function update()
			{
				konfirm=window.alert('Anda yakin akan mengupdate data ?');
				
			}
			</script>
			
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" value="Update" class="btn btn-primary" onclick="update()">
					<button type="submit" onclick=self.history.back()>Batal</button>
				</td>
			</tr>
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
</body>
</html>
