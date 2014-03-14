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
							     <h2>Hasil Pencarian</h2>
                                 <ul>
									<li>
									<form method="post" action="" class="login">
										<table border=3>
										<?php 
											include "koneksi.php"; 
											$cari=$_POST['cari'];
											$nama_pencarian=$_POST['nama_pencarian'];
											
											if($cari=='makanan')
											{
												$pencarian=mysql_query("Select * from makanan where nama_makanan like '%$nama_pencarian%'");
												$no=1;
												while($data=mysql_fetch_array($pencarian))
												{
												$data['diskon']=$data['diskon']*100;
												echo " <tr>
															<td rowspan=5><img src= '$data[direktori_gambar_makanan]' width=150 height=150></td>
															<td>Nama Makanan : $data[nama_makanan]</td>
														</tr>
														<tr>
															<td>Harga Makanan : $data[harga_makanan]</td>
														</tr>
														<tr>
															<td>Diskon : $data[diskon] %</td> 
														</tr>
														<tr>
															<td>Stok : $data[stok]</td>
														</tr>
														<tr>
															<td>Tgl Kadaluarsa : $data[tgl_kadaluarsa]</td>
														</tr>
														";
												$no++;
												}
											}
											else if($cari=='produk')
											{
												$pencarian=mysql_query("Select * from barang where nama_barang like '%$nama_pencarian%'");
												$no=1;
												while($data=mysql_fetch_array($pencarian))
												{
												$data['diskon']=$data['diskon']*100;
												echo " <tr>
															<td rowspan=4><img src= '$data[direktori_gambar_barang]' width=150 height=150></td>
															<td>Nama Barang : $data[nama_barang]</td>
														</tr>
														<tr>
															<td>Harga Barang : $data[harga_barang]</td>
														</tr>
														<tr>
															<td>Diskon : $data[diskon] %</td> 
														</tr>
														<tr>
															<td>Stok : $data[stok]</td>
														</tr>
														";
												$no++;
												}
											}
											else if ($cari=='hewan')
											{
												$pencarian=mysql_query("Select * from hewan where nama_hewan like '%$nama_pencarian%'");
												$no=1;
												while($data=mysql_fetch_array($pencarian))
												{
												$data['diskon']=$data['diskon']*100;
												echo " <tr>
															<td rowspan=4><img src= '$data[direktori_gambar_hewan]' width=150 height=150></td>
															<td>Nama Hewan : $data[nama_hewan]</td>
														</tr>
														<tr>
															<td>Harga Hewan: $data[harga_hewan]</td>
														</tr>
														<tr>
															<td>Diskon : $data[diskon] %</td> 
														</tr>
														<tr>
															<td>Stok : $data[stok]</td>
														</tr>
														";
												$no++;
												}
											}
											else echo "Anda salah memasukan pilihan. Data yang Anda cari tidak ditemukan.";
										?>
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
