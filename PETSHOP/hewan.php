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
							<h2><a href=daftar_pesanan.php>Daftar Pesanan</a></h2>
							<br>
							<br>
							     <h2>Daftar Barang</h2>
                                 <ul>
									<li>
									<form method="post" action="cek_login.php" class="login">
										<table border=5>
		
			
			<?php
		include "koneksi.php";
		
		$tampil_hewan=mysql_query("SELECT * FROM hewan");
		$no=1;
		echo "<tr>";
		while($data_hewan=mysql_fetch_array($tampil_hewan)){
				if($no!=2)
				{
				
				echo "<td><img src= '$data_hewan[direktori_gambar_hewan]' width=100 height=100></td>";
				}
				else
				{
					echo "<td><img src= '$data_hewan[direktori_gambar_hewan]' width=100 height=100 ></td>";
				}
				}
				$no++;
			echo "</tr>";
				?>
				
			
		
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
