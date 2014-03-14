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
		$tampil_barang=mysql_query("SELECT * FROM transaksi_pembelian where id_nota_pembelian='NT1' ");
		$no=1;
		echo "<tr><td>NO</td><td>Id Nota</td><td>Id User</td><td>Tanggal Transaksi</td><td>Total Belanja</td><td>Aksi</td></tr>";
		
		while($data=mysql_fetch_array($tampil_barang))
		{	?>
								<tr>
								<td><?PHP ECHO $no; ?></td>
										<td ><?PHP ECHO $data['id_nota_pembelian']; ?></td>
										<td><?PHP ECHO $data['id_user']; ?></td>
										<td ><?PHP ECHO $data['tgl_transaksi']; ?> </td>
										<td><?PHP ECHO $data['total_harga']; ?></td>
										<td><a href="pegawai_lihat_detail_transaksi.php?id_nota=<?PHP ECHO $data['id_nota_pembelian']; ?>">Lihat Detail</a></td>
										
								</tr>
								<?PHP
								$no++;
							}
							
		
		?>		

<tr><td colspan=8><a href="pegawai_pilih_transaksi.php?id_nota=<?php echo $id_nota; ?>"><img src="images/back.png" width=40 height=40 align=right></a></td>
<button style="margin-left:5%" onclick="print_d()">Print or Save to PDF</button>
    <button style="margin-left:5%" onclick="print_e()">Save to Excel</button>
    <script>
		function print_d(){
			window.open("print_transaksi.php","_blank");
		}
		function print_e(){
			window.open("print_student_excel.php","_blank");
		}
	</script>
</tr>		
	</table>
	</form>
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
