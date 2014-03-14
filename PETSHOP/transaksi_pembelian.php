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

	  
			<?php include "header_pegawai.php"; ?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     <h2>Transaksi Pembelian</h2>
                                 <ul>
									<li>
									<form method="post" action="cek_login.php" class="login">
										<table width="103%" height="252"  align="center">
										<tr>
											<td width="44%">
												<label for="id">ID Nota Pembelian</label>
										  </td>
											<td width="15%">
												:											</td>
											<td width="41%">
												<input  name="id" type="text" value="" size="40" maxlength="40" placeholder="NT_001">
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
											<td>
												<label for="tgl">Tanggal Transaksi</label>
											</td>
											<td>
												:
											</td>
											<td>
											
												
												<select name="tanggal">
												<option selected="select">Tanggal</option>
												<?php
												for ($a=1; $a<=31; $a+=1){
												echo"<option value=$a> $a </option>";
												}
												?></select>
												
												<select name=bulan>
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
												<select name="tahun">
											
												<option selected="selected">Tahun</option>
												<?php
												for($i=2011; $i>=1905; $i-=1){
												echo"<option value=$i>$i </option>";
												}
												?> </select>
												
											</td>										  </tr>
										<tr>
										<td>
										</td>
												<td>
												<tr>
											<td>
												<label for="brg">Barang</label>
											</td>
											<td>
												:
											</td>
											<td>
											
												 <select name="brg">
												<option value="mb" > mobby bag</option> 
												<option value="ht" > Hat Cat & Dog </option> 
												</option> </select>
											
										  Hewan: <select name="hewan">
												<option value="dog">Anjing</option> 
												<option value="cat" >Kucing</option> 
												</option> </select>
										</tr> 
										<tr>
											<td>
												<label for="kw">Kuantiti</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="kw" type="text" value="" size="40" maxlength="40" placeholder="EXAMPLE">
											</td>
										</tr>
										<tr>
											<td>
												<label for="sub_total">Sub Total</label>
											</td>
											<td>
												: 
											</td>

											<td>
												<input  name="sub_total" type="text" value="" size="40" maxlength="40" placeholder="EXAMPLE">
											</td>
										</tr>
										<tr>
											<td>
												<label for="total">Total Harga</label>
											</td>
											<td>
												: 
											</td>
											<td>
												<input  name="total" type="text" value="" size="40" maxlength="40" placeholder="EXAMPLE">
											</td>
										</tr>
										
										
										<tr>
										<td>
										</td>
											<td>
												
											</td>
											<td><button type="submit" class="btn btn-primary">OK</button>
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
