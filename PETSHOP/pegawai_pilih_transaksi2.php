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

	  
			<?php include "header_pegawai.php"; include "koneksi.php";
				$tgl=date("d-m-y");
				$hari=date('l');
				$id_nota=$_GET['id_nota'];
			?>
			
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     <h2>Transaksi Pembelian</h2>
                                 <ul>
									<li>
									<form method="post" action="" class="login">
										<table align="center" width="100%" border=0>
										
										<tr>
											<td><a href="pegawai_transaksi_barang.php?id_nota=<?php echo $id_nota; ?>"><img src="images/keranjang.png" width=150 height=150 align=center></a></td>
											<td width=50></td>
											<td><a href="pegawai_transaksi_hewan.php?id_nota=<?php echo $id_nota;?>"><img src="images/cat.png" width=150 height=150></td>
											
											
										</tr>
										<tr>
											<td align=center>Barang</td>
											<td ></td>
											<td align=center>Hewan</td>
											
										</tr>
										<tr>
										<td><a href="keranjang_barang.php?id_nota=<?php echo $id_nota;?>"><img src="images/list.png" width=150 height=150></td>
										<td width=50></td>
											<td><a href="pegawai_transaksi_pembayaran.php?id_nota=<?php echo $id_nota;?>"><img src="images/cash.png" width=150 height=150 ></td>
										</tr>
										<tr>
											<td align=center>Daftar Belanja</td>
											<td></td>
											<td align=center>Pembayaran</td>
											
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
</body>
</html>
