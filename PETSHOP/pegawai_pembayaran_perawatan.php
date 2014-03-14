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
							     <h2>Transaksi Perawatan</h2>
                                 <ul>
									<li>
									<form method="post" action="pegawai_pembayaran_perawatan2.php" class="login">
										<table   align="center">
										<?PHP

											$id_nota=$_GET['id_nota'];
											$query=mysql_query("SELECT * FROM detail_transaksi_perawatan where id_nota_perawatan='$id_nota'");
											$no=1;
											$total=0;
											
											while($data=mysql_fetch_array($query))
											{
												$subtotal=$data['subtotal'];
												$total=$total+$data['subtotal'];
												$no++;
											}
											
										?>
										<tr>
											<td width="44%">
												<label for="id">ID Nota </label>
										  </td>
											<td width="15%">
												:											</td>
											<td width="41%">
												<input  name="id_nota" type="text" value=<?php echo $id_nota;?> size="40" maxlength="40">
										  </td>
										</tr>
										
										
										
										<tr>
											<td>
												<label for="subtotal">Total</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="total" type="text" value=<?php echo $total; ?> size="40" maxlength="40" placeholder="EXAMPLE">
											</td>
										</tr>
										<tr>
											<td>
												<label for="subtotal">Bayar</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="bayar" type="text" value="" size="40" maxlength="40">
											</td>
										</tr>
										
										<tr>
										<td>
										</td>
											<td>
												
											</td>
											<td><button type="submit" class="btn btn-primary">Bayar</button>
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
