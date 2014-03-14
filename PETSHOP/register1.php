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


<?php include "header.php"; ?>
<div id="body">
 <div id="content">
 <div class="content">
							<div class="about">
							     <h2>Register</h2>
                                 <ul>
								 <li>
								
	
								 <tr>
											<td>
												<label for="nama">Nama Lengkap</label>											</td>
											<td>
											:											</td>
											<td>
												<input  name="nama_lengkap" type="text" value="" size="40" maxlength="40" placeholder="Wupi">											</td>
										</tr>
										<br>
										<tr>
											<td>
												<label for="pw">Password</label>											</td>
											<td>
											:											</td>
											<td>
												<input name="pass" type="password" value="" size="40" maxlength="40" placeholder="**************">											</td>
										</tr>
										<br>
										<tr>
										<tr>
										<td>
												<label for="alamat">Alamat</label>											</td>
											<td>
												:											</td>
											<td>
												<input  name="alamat" type="text" value="" size="40" maxlength="40" placeholder="Cimahi">											</td>
												</tr><tr>
												<br>
											<td>
												<label for="kode_pos">Kode Pos</label>											</td>
											<td>
												:											</td>
											<td>
												<input  name="kode_pos" type="text" value="" size="40" maxlength="40" placeholder="40522">											</td>
										</tr>
										<br>
										<tr>
										<td>
												<label for="email">E-mail</label>											</td>
											<td>
												:											</td>
											<td>
												<input name="email" type="text" value="" size="40" maxlength="40" placeholder="wupi_ock@yahoo.com">											</td>
										</tr>
										<br>
										<tr>
										<tr>
										<tr>
											<td>
												<label for="jk">Jenis kelamin</label>											</td>
											<td>
												:											</td>
										  <td>
										<input type="radio" id="jk" name="jk" value="L"> Laki-laki
												<input type="radio" id="jk" name="jk" value="P"> Perempuan											</td>
										</tr>
										<br>
										<tr>
											<td>
												<label for="tlp">No Telephon</label>											</td>
												<td>
												:											</td>
											<td>
												<input name="no_telp" type="text" value="" size="40" maxlength="40" placeholder="08546785432">											</td>
										  </tr>
<body>
<form name="postform" action="input_pendaftaran.php" target="_blank" method="post"><table align="center" id="tabeledit" width="300">
<tr>
<td>Tanggal Lahir:</td> <td><input type="text" id="from" name="from" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.from);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.from);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
</tr>
<tr>
										<td>
										</td>
											<td>
												
											</td>
											<td><button type="submit" class="btn btn-primary">Login</button>
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
						
						
						        

</table>
</form>

</div><div id="footer"></div>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
  
						
						
						        
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
