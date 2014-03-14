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
	<table border=0>
	<?php 
		include "koneksi.php";
		$id_nota=$_GET['id_nota'];
		$query=mysql_query("SELECT * from transaksi_pembelian_barang join user using(id_user) where id_nota_barang='$id_nota'");
		$data1=mysql_fetch_array($query);
	?>
	<tr>
		<td>Id Nota</td>
		<td>:</td>
		<td><?php echo $id_nota; ?></td>
	</tr>
	<tr>
		<td>Nama Pelanggan</td>
		<td>:</td>
		<td><?php echo $data1['nama_lengkap']; ?></td>
	</tr>
	</table>
	<table border=1 width="100%">
		<?php
		
		$tampil_barang=mysql_query("SELECT * FROM detail_pembelian_barang where id_nota_barang='$id_nota'");
		$no=1;
		
		echo "<tr><td>NO</td><td>Id Barang</td><td>Harga Barang</td><td>Diskon</td><td>Kuantiti</td><td>Subtotal</td></tr>";
		
		while($data=mysql_fetch_array($tampil_barang))
		{	?>
								<tr>
								<td><?PHP ECHO $no; ?></td>
										<td ><?PHP ECHO $data['id_barang']; ?></td>
										<td ><?PHP ECHO $data['harga_barang']; ?> </td>
										<td><?PHP ECHO $data['diskon']; ?></td>
										<td><?PHP ECHO $data['kuantiti']; ?></td>
										<td><?PHP ECHO $data['subtotal']; ?></td>
										
										
								</tr>
								<?PHP
								$no++;
							}
							
		
		?>		
		<tr>
		<td colspan=6 align=right>
		<?php
			$a=mysql_query("SELECT total_harga from transaksi_pembelian_barang where id_nota_barang='$id_nota'");
			$b=mysql_fetch_array($a);
		?>
			Total Belanja : Rp. <?php echo $b['total_harga'];?>
		</td>
		<tr>

	</table>
	
	<table>
	<tr><td colspan=8><a href="pegawai_data_transaksi_barang.php"><img src="images/back.png" width=40 height=40 align=right></a></td></tr>		
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
