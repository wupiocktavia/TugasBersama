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
<?php include "header_admin.php"; ?>
	<div id="body">
	<div id="content">
	<div class="content">
	<div class="about">
		
							 
							 
		<h2>Laporan Data Pembelian Barang</h2>
		<ul>
		<li>
		<form method="post" action="laporan_transaksi_barang.php" class="login">
			Bulan : <select name=bulan>
												<option selected="selected">Bulan</option>
												<option value=1>Januari</option>
												<option value=2>Februari</option>
												<option value=3>Maret</option>
												<option value=4>April</option>
												<option value=5>Mei</option>
												<option value=6>Juni</option>
												<option value=7>Juli</option>
												<option value=8>Agustus</option>
												<option value=9>September</option>
												<option value=10>Oktober</option>
												<option value=11>November</option>
												<option value=12>Desember</option>
												</select>
			Tahun : <select name="tahun">
											
												<option selected="selected">Tahun</option>
												<?php
												for($i=2030; $i>=1990; $i-=1){
												echo"<option value=$i>$i </option>";
												}
												?> </select>
			<input type=submit value="Cetak Laporan" target="_blank">
												
		</form>
		</li>
		</ul>		
								 
		
					
								 		
	</div>
	</div>
	
						
	<div id="sidebar">
		<?php include "admin_cari.php"; ?>
		<?php include "shoping_guide.php"; ?>
		<?php include "iklan.php"; ?>
	</div>
			
	<div id="footer">
		<?php include "footer.php"; ?>
	</div>
			
</body>
</html>
