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


	  
			<?php 
			include "koneksi.php";
			session_start();
			/*$status=$_SESSION['status_akses'];
			if(!isset($status))
			{
				include "header_member.php";
			}
			else
			{
			include "header.php"; 
			}*/
		include "header.php"; 
			?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     <h2>Kontak</h2>
                                 <ul>
									<li>
									<h3>Kami memiliki banyak cara bagi Anda untuk menghubungi kami :</h3>
								<h3><u>  </u><br>
								<table width="414">
  <tr>
    <td width="114">Jam Kerja </td>
    <td width="13">: </td>
    <td width="361">Senin - Jumat, 09.00 - 16.30</td>
  </tr>
  <tr>
    <td>Telepon</td>
    <td>:</td>
    <td>08518100789</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td>onestopshop@yahoo.com</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td>Dago Atas 123, Bandung</td>
  </tr>
</table>
								<br>
								<br>
								<!--<h2><u> WEB FORM </u></br></h2>
									<form method="post" action="contact.php" class="contactus">
										<table width="87%" height="224"  align="center">
										<tr>
											<td>
												<label for="nama">Nama</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="nama" type="text" value="" size="40" maxlength="40" placeholder="Wupi">
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
												<input name="email" type="email" value="" size="40" maxlength="40" placeholder="wupi_ock@ymail.com">
											</td>
										</tr>
										<tr>
										<tr>
											<td>
												<label for="Tlp">Telephone</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="tlp" type="text" value="" size="40" maxlength="40" placeholder="08567818107">
											</td>
										</tr>
										<tr>
										<tr>
											<td>
												<label for="komen">Komentar</label>
											</td>
											<td>
												: 
											</td>
											<td>
											<textarea name="ket" rows="3" cols="30"></textarea></br>
											
											</td>
										</tr>

											<td><button type="submit" class="btn btn-primary">Submit</button>
											</td>
										</tr>
									  </table>
									  </form>-->
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