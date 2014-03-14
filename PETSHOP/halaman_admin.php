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
			<?php include "koneksi.php"; ?>
	  		<?php session_start();?>
			<?php include "header_admin.php"; ?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     <h2>Selamat Datang, <?php echo $_SESSION['nama_lengkap'];?></h2>
                                 <ul>
									<li>
										<?php include "koneksi.php";?>
										<h3>Data Pendaftar</h3>
										<table border=1 bgcolor=orange>
										<tr>
											<th width=10>NO</th><th width=150>Nama Lengkap</th><th width=200>Alamat</th><th width=100>Email</th>
											<th width=150>Aksi</th>
										</tr>
										<?php 
										$batas=10;
										$halaman=$_GET['halaman'];
										if(empty($halaman))
											{
												$posisi=0;
												$halaman=1;
											}
										else
											{
												$posisi=($halaman-1)*$batas;
											}
											
										$tampil="SELECT * FROM temp LIMIT $posisi,$batas";
										$hasil=mysql_query($tampil);
										
										
										$no=1;
										
										while($data=mysql_fetch_array($hasil))
										{
										?>
											<tr>
													<td width=10> <?php echo $data['no'];?></td>
													<td width=175> <?php echo $data['nama_lengkap'];?></td>
													<td width=200><?php echo $data['alamat'];?></td>
													<td width=100> <?php echo $data['email'];?></td>
													<td width=100><a href="lihat_pendaftar.php?no=<?php echo $data['no'];?>">Lihat</a> | 
														<a href="hapus_pendaftar.php?no=<?php echo $data['no'];?>" onClick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['nama_lengkap'];?>?')">Hapus</a>
													</td>
												</tr><?php
												$no++;
										}
										
										echo "</table>";
										
										$tampil2 = mysql_query("SELECT * FROM temp");
										$jmldata = mysql_num_rows($tampil2);
										$jmlhalaman = ceil($jmldata/$batas);
										
										echo "<br>Halaman : ";
										
										for($i=1; $i<=$jmlhalaman; $i++)
										if($i != $halaman)
										{
											echo "<a href=$_SERVER[PHP_SELF]?halaman=$i>$i</a> | "; 
										}
										else
										{
											echo "<b>$i</b> | ";
										}
										
										echo "<p>Total Pendaftar : <b>$jmldata</b> orang</p>";
										?>
										
									</li>
						
								 </ul>							
						  </div>
						</div>
						
					    <div id="sidebar">
						
						
						        
								
								<?php include "admin_cari.php"; ?>
								
                               	<?php include "shoping_guide.php"; ?>
				   
				  				<?php include "iklan.php"; ?>
				  
			
			</div>
			
			<div id="footer">
			        <?php include "footer.php"; ?>
			</div>
			
	

</body>
</html>
