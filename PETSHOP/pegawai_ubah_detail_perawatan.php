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
							     <h2>Ubah Detail Perawatan</h2>
								 <?php
									include "koneksi.php";
									$id_detail_perawatan=$_GET['id_detail_perawatan'];
									$id=mysql_query("SELECT * FROM detail_perawatan where id_detail_perawatan='$id_detail_perawatan'");
									$data=mysql_fetch_array($id);
								 ?>
                                 <ul>
									<li>
									<form method="post" action="update_detail_perawatan.php" class="login">
										<table width="90%"  align="center">
										<tr>
											<td>ID Detail Perawatan</td>
											<td>:</td>
											<td><input type=text size=8 name="id_detail_perawatan" value="<?php echo $data['id_detail_perawatan'];?>" readonly></td>
										</tr>
										<tr>
											<td>
												Nama Perawatan
											</td>
											<td>
												: 
											</td>
											<td>
												<select name="id_perawatan">
												<?php
													include "koneksi.php";
													$tampil_perawatan=mysql_query("select * from perawatan");
													while($data1=mysql_fetch_array($tampil_perawatan))
													{
														if($data['id_perawatan']==$data1['id_perawatan'])
														{
														echo "<option value=$data1[id_perawatan] selected>$data1[nama_perawatan]</option>";
														}
														else
														{
															echo "<option value=$data1[id_perawatan]>$data1[nama_perawatan]</option>";
														}
													}
												?>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												Kategori Hewan
											</td>
											<td>
												:
											</td>
											<td>
												<select name="id_kategori_hewan">
												<?php
													include "koneksi.php";
													$tampil_hewan=mysql_query("select * from kategori_hewan");
													while($data2=mysql_fetch_array($tampil_hewan))
													{
														if($data['id_kategori_hewan']==$data2['id_kategori_hewan'])
														{
														echo "<option value=$data2[id_kategori_hewan] selected>$data2[nama_kategori_hewan]</option>";
														}
														else
														{
														
														echo "<option value=$data2[id_kategori_hewan]>$data2[nama_kategori_hewan]</option>";
														}
													}
												?>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												Harga Perawatan
											</td>
											<td>
												:
											</td>
											<td>
												Rp. <input type="text" size=15 name="harga_perawatan" value="<?php echo $data['harga_perawatan'];?>">
											</td>
										</tr>
										<tr>
											<td>
												Diskon
											</td>
											<td>
												:
											</td>
											<td>
												<input type="text" size=10 name="diskon" value="<?php echo $data['diskon'];?>">%
											</td>
										</tr>
										<tr>
										<td>
										</td>
											<td>
												
											</td>
											<td><button type="submit" class="btn btn-primary">Update</button>
												<button type="reset">Reset</button>
												<input type=button value="Batal" onclick=self.history.back()>
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
