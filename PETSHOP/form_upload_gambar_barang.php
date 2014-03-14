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
							     <h2>Upload Gambar</h2>
                                 <ul>
									<li>
									<?php $id_barang=$_GET['id_barang']; ?>
<tr>
											
											<td>
											<form enctype="multipart/form-data" method="POST" action="upload_gambar_barang.php">
											<table>
											<tr>
												<td>ID Barang</td>
												<td>:</td>
												<td><input type="text" readonly size=8 value="<?php echo $id_barang; ?>" name="id_barang"></td>
											</tr>
											<tr>
												<td>File yang diupload</td>
												<td>:</td>
												<td><input  name="fupload" type="file"></td>
											</tr>
											<tr> 
												<td colspan=3><input type="submit" value="Upload"></td>
											</tr>
												
											</table>
											</form>
											</td>
										</tr>
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
