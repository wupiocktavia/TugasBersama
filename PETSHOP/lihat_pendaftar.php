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
							     <h2>Data Pendaftar</h2>
                                 <ul>
									<li>
									<?php
				//$iduser = $_SESSION['iduser'];
include "koneksi.php";
$login=mysql_query("SELECT * FROM temp WHERE no='$_GET[no]'");

$ketemu=mysql_num_rows($login);
$row=mysql_fetch_array($login);
$atribut = mysql_fetch_assoc($login);
?>
	
	<FORM method=POST action="confirm.php">
	<TABLE width="80%" >	
					 <tr>
                    <td width="171">No</td>
                    <td width="7"> :</td>
                    <td width="365"><input type="text" size=10 width=350 name="no" value="<?php echo $row['no'];?>" readonly /></td>
                  </tr>
				  <tr>
                    <td width="171">Nama Lengkap</td>
                    <td width="7"> :</td>
                    <td width="365"><input type="text" size=40 readonly width=350 name="nama_lengkap" value="<?php echo $row['nama_lengkap'];?>" /></td>
                  </tr>
                  
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" type="text" readonly value="" size="100" width=500 height=500 /><?php echo $row['alamat'];?></textarea></td>
                  </tr>
				  
				
                <tr>
                 <td>Kode Pos</td>
                  <td>: </td>
                  <td><input name="kode_pos" type="text" readonly value="<?php echo $row['kode_pos']?>" size="7" width=350 /></td>
                </tr>
				
				<tr>
                 <td>Jenis Kelamin</td>
                  <td>: </td>
                  <td><input name="jk" type="text" readonly value="<?php echo $row['jk']?>" size="3" maxlength="5" width=350 /></td>
                </tr>
				
				<tr>
                 <td>Tanggal Lahir</td>
                  <td>: </td>
                  <td><input name="tgl_lahir" type="text" readonly value="<?php echo $row['tgl_lahir']?>" size="10" maxlength="15" width=350 /></td>
                </tr>
				
                  <tr>
                    <td>No Telp</td>
                    <td>:</td>
                    <td><input name="no_telp" type="text" readonly value="<?php echo $row['no_telp'];?>" size="13" maxlength="20" width=350 /></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input name="email" type="text"  readonly value="<?php echo $row['email'];?>" size="50" width=350 /></td>
                  </tr>
				  <tr>
					<td  colspan=3 align=right>
					
					<input type="submit" name="confirm"  value="Confirm"/>
					<input type="button" value="Batal" onclick=self.history.back()>
					</td>
					
				  </tr>
                  
	</TABLE>
	</FORM>
									</li>
						
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
