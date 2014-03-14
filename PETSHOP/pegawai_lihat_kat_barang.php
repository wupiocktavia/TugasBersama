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
							
				<h2>Daftar Kategori Barang</h2>
                <ul>
				<li>
					<form method="post" action="" class="login">
					<table border=1 bgcolor=orange size=100% >
						<?php include "koneksi.php";
		
							$tampil_kategori=mysql_query("SELECT * from kategori_barang");
							$no=1;
							echo "<tr><td>No</td><td>ID Kategori Barang</td><td>Nama Kategori Barang</td></tr>";
			
							
							while($data_kategori=mysql_fetch_array($tampil_kategori))
							{	
								
								echo "<tr>";
								echo "	<td width=25>$no</td>
										<td width=175>$data_kategori[id_kategori_barang]</td>
										<td width=175>$data_kategori[nama_kategori_barang]</td>";
										
								echo "</tr>";
								$no++;
							}
							
							
						?>
						
						</tr>
					</table>
					
					<table>
					<table>
	<tr><td colspan=8><a href="pegawai_menu_kat_barang.php"><img src="images/back.png" width=40 height=40 align=right></a></td></tr>		
	</table>
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
