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
							     <h2>Tambah Pegawai</h2>
                                 <ul>
									<li>
									<form method="post" action="admin_input_pegawai.php" class="Register">
										<table width="87%" height="224"  align="center">
						
										<tr>
											<td>
												<label for="nama">Nama Lengkap</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="nama_lengkap" type="text" value="" size="40" maxlength="40" placeholder="Wupi">
											</td>
										</tr>
										<tr>
											<td>
												<label for="pw">Password</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="pass" type="password" value="" size="40" maxlength="40" placeholder="**************">
											</td>
										</tr>
										<tr>
											<td>
												<label for="pw">Confirm Password</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="cpass" type="password" value="" size="40" maxlength="40" placeholder="**************">
											</td>
										</tr>
										<tr>
											<td>
												<label for="alamat">Alamat</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<textarea name="alamat" size="100" placeholder="Cimahi"></textarea>
											</td>
										</tr><tr>
											<td>
												<label for="kode_pos">Kode Pos</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="kode_pos" type="text" value="" size="10" maxlength="7" placeholder="40522">
											</td>
										</tr>
										<tr>
											<td>
												<label for="email">E-mail</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="email" type="text" value="" size="40" maxlength="40" placeholder="wupi_ock@yahoo.com">
											</td>
										</tr>
										<tr>
										<tr>
										<tr>
											<td>
												<label for="jk">Jenis kelamin</label>
											</td>
											<td>
												: 
											</td>
										  <td>
												<input type="radio" id="jk" name="jk" value="L"> Laki-laki
												<input type="radio" id="jk" name="jk" value="P"> Perempuan
											</td>
										</tr>
										<tr>
											<td>
												<label for="tlp">No Telepon</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="no_telp" type="text" value="" size="15" maxlength="12" placeholder="08546785432">
											</td>
										  </tr>
											<tr>
											<td>
												<label for="ttl">Tanggal Lahir</label>
											</td>
											<td>
												:
											</td>
											<td>
                                            	<input type=date name=tgl_lahir>
											</td>
											</tr>
											<tr>
										<td>
										</td>
											<td>
												
											</td>
											<td><button type="submit" class="btn btn-primary">Tambah</button>
												<button type="reset">Reset</button>
											</td>
										</tr>
									  </table>
									  
									  <table>
	<tr><td colspan=8><a href="admin_data_pegawai.php"><img src="images/back.png" width=40 height=40 align=right></a></td></tr>		
	</table>
									  </form>
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
