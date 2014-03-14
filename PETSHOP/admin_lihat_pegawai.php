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
							     <h2>Data Pegawai</h2>
                                 <ul>
									<li>
									<?php
				//$iduser = $_SESSION['iduser'];
include "koneksi.php";
$login=mysql_query("SELECT * FROM user WHERE id_user='$_GET[id_user]'");

$ketemu=mysql_num_rows($login);
$row=mysql_fetch_array($login);
$atribut = mysql_fetch_assoc($login);
?>
	
	<FORM method=POST action="confirm.php">
	<TABLE width="80%" >	
					 <tr>
                    <td width="171">Id User</td>
                    <td width="7"> :</td>
                    <td width="365"><input type="text" size=10 readonly  name="no" value="<?php echo $row['id_user'];?>" /></td>
                  </tr>
				  <tr>
                    <td width="171">Nama Lengkap</td>
                    <td width="7"> :</td>
                    <td width="365"><input type="text" size=50 readonly  name="nama_lengkap" value="<?php echo $row['nama_lengkap'];?>" /></td>
                  </tr>
                  
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" readonly ><?php echo $row['alamat'];?></textarea></td>
                  </tr>
				  
				
                <tr>
                 <td>Kode Pos</td>
                  <td>: </td>
                  <td><input name="kode_pos" type="text" readonly value="<?php echo $row['kode_pos']?>" size="10" maxlength="10" width=350 /></td>
                </tr>
				
				<tr>
                 <td>Jenis Kelamin</td>
                  <td>: </td>
                  <td><input name="jk" type="text" readonly value="<?php echo $row['jk']?>" size="5" maxlength="5" width=350 /></td>
                </tr>
				
				<tr>
                 <td>Tanggal Lahir</td>
                  <td>: </td>
                  <td><input name="tgl_lahir" type="text" readonly value="<?php echo $row['tgl_lahir']?>" size="15" maxlength="15" width=350 /></td>
                </tr>
				
                  <tr>
                    <td>No Telp</td>
                    <td>:</td>
                    <td><input name="no_telp" type="text" readonly value="<?php echo $row['no_telp'];?>" size="20" maxlength="20" width=350 /></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input name="email" type="text" readonly value="<?php echo $row['email'];?>" size="50" width=350 /></td>
                  </tr>
				  <tr>
					<td  colspan=3 align=right>
					
					<input type="button" value="Kembali" onclick=self.history.back()>
					</td>
					
				  </tr>
                  
	</TABLE>
	</FORM>
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
