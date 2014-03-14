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
				$tgl=date("y-m-d");
				$hari=date('l');
			?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     <h2>Transaksi Pembelian</h2>
                                 <ul>
									<li>
									<form method="post" action="pegawai_tambah_transaksi.php" class="login">
										<table align="center">
										<?PHP
											$query=mysql_query("SELECT * from transaksi_pembelian_barang");
											$jumlah=mysql_num_rows($query);
											$jumlah=$jumlah+1;
											$id_nota="NT".$jumlah;
										?>
										<tr>
											<td>
												<label for="tgl">Hari</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input type=text value=<?php echo $hari;?>>
											</td>										  
										</tr>
										<tr>
											<td>
												<label for="tgl">Tanggal Transaksi</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input type=text name=tanggal value=<?php echo $tgl;?>>
											</td>										  
										</tr>
										<tr>
											<td width="44%">
												<label for="id">ID Nota Pembelian</label>
										  </td>
											<td width="15%">
												:											</td>
											<td width="41%">
												<input  name="id_nota" type="text" value=<?php echo $id_nota;?> size="40" maxlength="40">
										  </td>
										</tr>
										<tr>
											<td>
												<label for="id_user">ID User</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="id_user" type="text" value="" size="40" maxlength="40" placeholder="ID_001">
											</td>
										</tr>
										
										
										
										<tr>
										<td></td>
										<td></td>
											<td>
												<input type=submit value="Next">
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
