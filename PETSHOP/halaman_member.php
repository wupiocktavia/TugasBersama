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
	  <?php session_start();?>
			<?php include "header_member.php"; ?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     <h2>Selamat Datang, <?php echo $_SESSION['nama_lengkap'];?></h2>
                                 <ul>
									<li>
									<form method="post" action="cek_login.php" class="login">
										<table width="90%"  align="center">
										<tr>
											<td>
												<label for="email">Your ID</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="id_user" type="text" value="" size="40" maxlength="40" placeholder="EXAMPLE">
											</td>
										</tr>
										<tr>
											<td>
												<label for="pw">Your Password</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="password" type="password" value="" size="40" maxlength="40" placeholder="**************">
											</td>
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
