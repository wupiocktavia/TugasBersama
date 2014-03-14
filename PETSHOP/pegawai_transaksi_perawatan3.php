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
			?>
			
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     <h2>Transaksi Pembelian</h2>
                                 <ul>
									<li>
									<form method="post" action="pegawai_transaksi_perawatan4.php" class="login">
										<table width="100%" align="center">
										<?PHP

											$id_nota=$_POST['id_nota'];
											$id_detail_perawatan=$_POST['id_detail_perawatan'];
											$id_perawatan=$_POST['id_perawatan'];
											$id_kategori_hewan=$_POST['id_kategori_hewan'];
											$harga_perawatan=$_POST['harga_perawatan'];
											$diskon=$_POST['diskon'];
											$diskon=$diskon/100;
											$kuantiti=$_POST['kuantiti'];
											
											$subtotal=($harga_perawatan*$kuantiti)-($harga_perawatan*$kuantiti*$diskon);
										?>
										<tr>
											<td >
												<label for="id">ID Nota Pembelian</label>
										  </td>
											<td>
												:											</td>
											<td >
												<input  name="id_nota" type="text" value=<?php echo $id_nota;?> size="40" maxlength="40">
										  </td>
										</tr>
			
										<tr>
											<td>
												<label for="id_perawatan">ID Detail Perawatan</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="id_detail_perawatan" type="text" value="<?php echo $id_detail_perawatan; ?>" size="40" maxlength="40" placeholder="ID_001">
												
											</td>
										</tr>
										<tr>
											<td>
												<label for="id_perawatan">ID Perawatan</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="id_perawatan" type="text" value="<?php echo $id_perawatan; ?>" >
												
											</td>
										</tr>
										<tr>
											<td>
												<label for="id_perawatan">ID Kategori Hewan</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="id_kategori_hewan" type="text" value="<?php echo $id_kategori_hewan; ?>" size="40" maxlength="40" placeholder="ID_001">
												
											</td>
										</tr>
										
										<tr>
											<td>
												<label for="tgl">Harga Satuan</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input type=text name=harga_perawatan value=<?php echo $harga_perawatan;?>>
											</td>										  
										</tr>
										
										
												<tr>
											<td>
												<label for="brg">Diskon</label>
											</td>
											<td>
												:
											</td>
											<td>
											<?php $diskon=$diskon*100;?>
												<input type=text name=diskon value=<?php echo $diskon;?>>%
											</td>
										</tr> 
										<tr>
											<td>
												<label for="kuantiti">Kuantiti</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name=kuantiti type="text" value="<?php echo $kuantiti; ?>" size="40" maxlength="40" placeholder="EXAMPLE">
											</td>
										</tr>
										<tr>
											<td>
												<label for="subtotal">Sub Total</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="subtotal" type="text" value=<?php echo $subtotal; ?> size="40" maxlength="40" placeholder="EXAMPLE">
											</td>
										</tr>
										
										
										
										<tr>
										<td>
										</td>
											<td>
												
											</td>
											<td><button type="submit" class="btn btn-primary">Simpan</button>
												<button type="reset">Reset</button>
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
