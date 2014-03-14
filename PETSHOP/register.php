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

	  
			<?php include "header.php"; ?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     <h2>Register</h2>
                                 <ul>
									<li>
									<form method="post" action="input_pendaftar.php" class="Register">
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
											<td>Alamat</td>
											<td>:</td>
											<td>
											<textarea name="alamat" placeholder="Cimahi" maxlength="50"></textarea>
											</td>
										</tr>
										
										<tr>
											<td>
												<label for="kode_pos">Kode Pos</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="kode_pos" type="text" value="" size="5" maxlength="5" placeholder="40522">
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
												<label for="tlp">No Telephon</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="no_telp" type="text" value="" size="12" maxlength="12" placeholder="08546785432">
											</td>
										  </tr>
										  <tr>
											<td>
												<label for="tlp">Tanggal</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="tgl_lahir" type="date" value=""/>
											</td>
										  </tr>
											<!--<tr>
											<td>
												<label for="ttl">Tanggal Lahir</label>
											</td>
											<td>
												:
											</td>
											<td>
											
												
												<select name="tanggal">
												<option selected="select">Tanggal</option>
												<?php
												for ($a=1; $a<=31; $a+=1){
												echo"<option value=$a> $a </option>";
												}
												?></select>
												
												<select name=bulan>
												<option selected="selected">Bulan</option>
												<option value=1>Januari</option>
												<option value=2>Februari</option>
												<option value=3>Maret</option>
												<option value=4>April</option>
												<option value=5>Mei</option>
												<option value=6>Juni</option>
												<option value=7>Juli</option>
												<option value=8>Agustus</option>
												<option value=9>September</option>
												<option value=10>Oktober</option>
												<option value=11>November</option>
												<option value=12>Desember</option>
												</select>
												<select name="tahun">
											
												<option selected="selected">Tahun</option>
												<?php
												for($i=2011; $i>=1905; $i-=1){
												echo"<option value=$i>$i </option>";
												}
												?> </select>
												
											</td>
											</tr>
											<tr> -->
										<td>
										</td>
											<td>
												<script type="text/javascript">
												function show_alert(){
												
												alert('you click me!');
												}
												</script>
											</td>
											<td><button type="submit" class="btn btn-primary">Daftar</button>
												<button type="reset">Reset</button>
											</td>
										</tr>
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
</body>
</html>
