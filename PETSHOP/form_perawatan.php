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

	  
			<?php include "header_pegawai.php"; ?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     <h2>Tambah Perawatan</h2>
                                 <ul>
									<li>
									<form method="post" action="input_perawatan.php" class="login">
										<table width="90%"  align="center">
										<tr>
											<td>
												Id Perawatan
											</td>
											<td>
												:
											</td>
											<td>
												<input type="text" name="id_perawatan">
											</td>
										</tr>
										<tr>
											<td>
												Nama Perawatan
											</td>
											<td>
												:
											</td>
											<td>
												<input type="text" name="nama_perawatan">
											</td>
										</tr>
										
										<tr>
										<td>
										</td>
											<td>
												
											</td>
											<td><button type="submit" class="btn btn-primary">Input</button>
												<button type="reset">Reset</button>
												<input type=button value="Batal" onclick=self.history.back()>
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
