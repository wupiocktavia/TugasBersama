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
							     <h2>Login</h2>
                                 <ul>
									<li>
									<?php $id_makanan=$_GET['id_makanan']; ?>
<tr>
											<td>
												<label for="directory">Alamat Gambar</label>
											</td>
											<td>
												: 
											</td>
											<td>
											<form enctype="multipart/form-data" method="POST" action="upload_gambar_makanan.php">
												<input type="text" value="<?php echo $id_makanan; ?>" name="id_makanan">
												File yang diupload : <input  name="fupload" type="file">
												<input type="submit" value="Upload">
											</form>
											</td>
										</tr>
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
