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

	  
			<?php include "header_pegawai.php"; 
			include "koneksi.php";
			?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     <h2>Tambah Kategori Barang</h2>
                                 <ul>
									<li>
									<form method="post" action="pegawai_input_kategori_barang.php" class="login">
										<table width="90%"  align="center">
										
										<tr>
											<td>
												<label for="id_barang">ID Kategori Barang</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="id_kategori_barang" type="text" size="10" maxlength="10">
											</td>
										</tr>
										
										<tr>
											<td>
												<label for="nama_barang">Nama Kategori Barang</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="nama_kategori_barang" type="text" value="" size="50" maxlength="50" placeholder="Aksesoris Hewan">
											</td>
										</tr>
										
										
										<tr>
										<td>
										</td>
											<td>
												
											</td>
											<td><button type="submit" class="btn btn-primary">Input</button>
												<button type="reset">Reset</button>
												
											</td>
										</tr>
										</table>
										
										<table>
										<tr><td colspan=8><a href="pegawai_menu_kat_barang.php"><img src="images/back.png" width=40 height=40 align=right></a></td></tr>												
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
