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
							     <h2>Pilih Aktifitas</h2>
                                 <ul>
									<li>
									<form method="post" action="" class="login">
										<table align="center" width="100%" border=0>
										
										<tr>
											<td><a href="form_barang.php"><img src="images/tambah barang.png" width=150 height=150 align=center></a></td>
											<td width=50></td>
											
											<td><a href="produk_pegawai.php"><img src="images/barang.ico" width=150 height=150></td>
											
											
										</tr>
										<tr>
											<td align=center>Tambah Barang</td>
											<td ></td>
											<td align=center>Lihat Barang</td>
										</tr>
										<tr>
											
											<td><a href="pegawai_tambah_kategori_barang.php"><img src="images/barang2.png" width=150 height=150></td>
											<td width=50></td>
											<td><a href=""><img src="images/barang.ico" width=150 height=150></td>
											
											
										</tr>
										<tr>
											<td align=center>Tambah Kategori Barang</td>
											<td ></td>
											<td align=center>Lihat Kategori Barang</td>
										</tr>
										<tr>
										
										<td><a href="form_hewan.php"><img src="images/tambah hewan.png" width=150 height=150></td>
										<td width=50></td>
											<td><a href="hewan_pegawai.php"><img src="images/pupy.png" width=150 height=150 ></td>
											
										</tr>
										<tr>
											<td align=center>Tambah Hewan</td>
											<td></td>
											<td align=center>Lihat Hewan</td>
											
										</tr>
										
										<tr>
											<td><a href="pegawai_tambah_kategori_hewan.php"><img src="images/bird.jpg" width=150 height=150></td>
											<td width=50></td>
											<td><a href=""><img src="images/pupy.png" width=150 height=150 ></td>
											
										</tr>
										
										<tr>
											<td align=center>Tambah Kategori Hewan</td>
											<td></td>
											<td align=center>Lihat Kategori Hewan</td>
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
