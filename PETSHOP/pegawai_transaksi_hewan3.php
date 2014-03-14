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
									<form method="post" action="pegawai_transaksi_hewan4.php" class="login">
										<table width="100%" align="center">
										<?PHP

											$id_nota=$_POST['id_nota'];
											$id_hewan=$_POST['id_hewan'];
											
											$query=mysql_query("SELECT * FROM hewan where id_hewan='$id_hewan'");
											$data=mysql_fetch_array($query);
											
											$harga=$_POST['harga_hewan'];
											$diskon=$_POST['diskon'];
											$diskon=$diskon/100;
											$kuantiti=$_POST['kuantiti'];
											$subtotal=($harga*$kuantiti)-($harga*$kuantiti*$diskon);
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
										<?php
											function cek_hewan($id_hewan)
											{
												$query=mysql_query("SELECT * FROM hewan WHERE id_hewan='$id_hewan'");
												$data=mysql_fetch_array($query);
											}
										?>
										<tr>
											<td>
												<label for="id_hewan">ID hewan</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="id_hewan" type="text" value="<?php echo $id_hewan; ?>" size="40" maxlength="40" placeholder="ID_001">
												
											</td>
										</tr>
										
										<tr>
											<td>
												<label for="id_hewan">ID Kategori hewan</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input name="id_kategori_hewan" type="text" value="<?php echo $data['id_kategori_hewan']; ?>" size="40" maxlength="40" placeholder="ID_001">
												
											</td>
										</tr>
										<tr>
											<td>
												<label for="tgl">Nama hewan</label>
											</td>
											<td>
												:
											</td>
											<td>
												<input type=text name=nama_hewan value="<?php echo $data['nama_hewan'];?>" SIZE=40>
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
												<input type=text name=harga_hewan value=<?php echo $data['harga_hewan'];?>>
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
											<?php $diskon=$data['diskon']*100;?>
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
								<?php include "hewan.php"; ?>
								
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
