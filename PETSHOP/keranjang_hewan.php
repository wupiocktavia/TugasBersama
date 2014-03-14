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
	<h2>Data hewan</h2>
	<ul>
	<li>
	<form method="post" action="" class="login">
	<table width="100%"  align="center" border=3>
		<?php
		include "koneksi.php";
		$id_nota=$_GET['id_nota'];
		$tampil_hewan=mysql_query("SELECT * FROM detail_pembelian_hewan WHERE id_nota_hewan='$id_nota'");
		$no=1;
		echo "<tr><td>NO</td><td>Id hewan</td><td>Harga hewan</td><td>Diskon</td><td>Kuantiti</td><td>Subtotal</td><td>Aksi</td></tr>";
		
		while($data=mysql_fetch_array($tampil_hewan))
		{	
								$data['diskon']=$data['diskon']*100; ?>
								<tr>
								<td><?PHP ECHO $no; ?></td>
										<td ><?PHP ECHO $data['id_hewan']; ?></td>
										<td ><?PHP ECHO $data['harga_hewan']; ?> </td>
										<td><?PHP ECHO $data['diskon']; ?> %</td>
										<td ><?PHP ECHO $data['kuantiti']; ?> </td>
										<td><?PHP ECHO $data['subtotal']; ?> </td>
										<td><a href="pegawai_hapus_beli_hewan.php?id_nota=<?PHP ECHO $id_nota;?>&id_hewan=<?PHP ECHO $data['id_hewan'];?>" onClick="return confirm('Apakah anda yakin?')"><img src=images/trash.png width=30 height=30></a></td>
										
								</tr>
								<?PHP
								$no++;
							}
							
		
		?>		

<tr><td colspan=8><a href="pegawai_transaksi_pembayaran_hewan.php?id_nota=<?php echo $id_nota;?>">Selesai</a></td></tr>		
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
