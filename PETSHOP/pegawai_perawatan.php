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
							
				<h2>Daftar Perawatan</h2>
                <ul>
				<li>
					<form method="post" action="cek_login.php" class="login">
					<table border=1 bgcolor=orange>
						<?php include "koneksi.php";
		
							$tampil_perawatan=mysql_query("SELECT id_detail_perawatan,perawatan.nama_perawatan, kategori_hewan.nama_kategori_hewan, 		
									detail_perawatan.harga_perawatan,detail_perawatan.diskon FROM perawatan, kategori_hewan, 
									detail_perawatan WHERE perawatan.id_perawatan=detail_perawatan.id_perawatan AND 
									detail_perawatan.id_kategori_hewan=kategori_hewan.id_kategori_hewan");
							$no=1;
							echo "<tr><td>NO</td><td>ID Detail</td><td>Perawatan</td><td>Nama Hewan</td><td>Harga</td><td>Diskon</td><td colspan=2>Aksi</td></tr>";
			
							
							while($data_perawatan=mysql_fetch_array($tampil_perawatan))
							{	
								$data_perawatan['diskon']=$data_perawatan['diskon']*100;
								echo "<tr>";
								echo "<td width=25>$no</td>
								
										<td width=105>$data_perawatan[id_detail_perawatan]</td>
										<td width=175>$data_perawatan[nama_perawatan]</td>
										<td width=175>$data_perawatan[nama_kategori_hewan]</td>
										<td width=100>$data_perawatan[harga_perawatan]</td>
										<td width=50>$data_perawatan[diskon] %</td>
										<td><a href=pegawai_ubah_detail_perawatan.php?id_detail_perawatan=$data_perawatan[id_detail_perawatan] ><img src=images/ubah.png width=20 height=20></a></td>
								<td><a href=pegawai_hapus_detail_perawatan.php?id_detail_perawatan=$data_perawatan[id_detail_perawatan]><img src=images/hapus.png width=20 height=20></a></td>";
							
										
								echo "</tr>";
								$no++;
							}
							
							
						?>
						
					</table>
					
					<table>
	<tr><td colspan=8><a href="pegawai_lihat_perawatan.php"><img src="images/back.png" width=40 height=40 align=right></a></td></tr>		
	</table>
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
