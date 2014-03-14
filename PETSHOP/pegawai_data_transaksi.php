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
				$tgl=date("d-m-y");
				$hari=date('l');
			?>
			
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     <h2>Data Transaksi</h2>
                                 <ul>
									<li>
									<form method="post" action="" class="login">
										<table align="center" width="100%" border=0>
										
										<tr>
											<td><a href="pegawai_data_transaksi_barang.php"><img src="images/barang2.png" width=150 height=150 align=center></a></td>
											<td width=50></td>
											<td><a href="pegawai_data_transaksi_hewan.php"><img src="images/cat2.jpg" width=150 height=150></td>
											<td width=50></td>
											<td><a href="pegawai_data_transaksi_Perawatan.php"><img src="images/perawatan.png" width=150 height=150></td>
											
											
										</tr>
										<tr>
											<td align=center>Barang</td>
											<td ></td>
											<td align=center>Hewan</td>
											<td ></td>
											<td align=center>Perawatan</td>
										</tr>
										
									  </table>
									  
									  <table>
									  <tr>
											<td>
					<tr><td colspan=8><a href="pegawai_pilih_transaksi.php"><img src="images/back.png" width=40 height=40 align=right></a></td></tr>		
					
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
