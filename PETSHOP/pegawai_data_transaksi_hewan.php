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

		
<?php include "header_pegawai.php";?>	

<div id="body">
<div id="content">
<div class="content">
<div class="about">
	<h2>Data Transaksi</h2>
	<ul>
	<li>
	<form method="post" action="" class="login">
	<table width="100%"  align="center" border=3>
		<?php
		include "koneksi.php";
		//$id_nota=$_GET['id_nota'];
		$tampil_hewan=mysql_query("SELECT * FROM transaksi_pembelian_hewan ");
		$no=1;
		echo "<tr><td>NO</td><td>Id Nota</td><td>Id User</td><td>Tanggal Transaksi</td><td>Total Belanja</td><td>Aksi</td></tr>";
		
		while($data=mysql_fetch_array($tampil_hewan))
		{	?>
								<tr>
								<td><?PHP ECHO $no; ?></td>
										<td ><?PHP ECHO $data['id_nota_hewan']; ?></td>
										<td><?PHP ECHO $data['id_user']; ?></td>
										<td ><?PHP ECHO $data['tgl_transaksi']; ?> </td>
										<td><?PHP ECHO $data['total_harga']; ?></td>
										<td><a href="pegawai_lihat_detail_transaksi_hewan.php?id_nota=<?PHP ECHO $data['id_nota_hewan']; ?>">Lihat Detail</a></td>
										
								</tr>
								<?PHP
								$no++;
							}
							
		
		?>		

	</table>
	
	 <table>
									  <tr>
											<td>
					<tr><td colspan=8><a href="pegawai_data_transaksi.php"><img src="images/back.png" width=40 height=40 align=right></a></td></tr>		
					
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
