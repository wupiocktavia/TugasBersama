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
						
							     <h2>Daftar Barang</h2>
                                 <ul>
									<li>
									<form method="post" action="" class="login">
										<table border=0>
		
			
			<?php
		include "koneksi.php";
		$batas=5;
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
		
		$tampil_barang=mysql_query("SELECT * FROM barang LIMIT $posisi, $batas");
		$no=1;
		echo "<tr>";
		while($data_barang=mysql_fetch_array($tampil_barang)){
				
				echo "<td colspan=2 align=center><a href=pegawai_lihat_barang.php?id_barang=$data_barang[id_barang]><img src= '$data_barang[direktori_gambar_barang]' width=100 height=100></a></td>";
				$no++;
				}
				
			echo "</tr>";
			
			$tampil2=mysql_query("SELECT * FROM barang");
			$jmldata=mysql_num_rows($tampil2);
			$jmlhalaman=ceil($jmldata/$batas);
			echo "<br> Halaman : ";
			
			for($i=1;$i<=$jmlhalaman;$i++)
			{
				if($i != $halaman)
				{
					echo "<a href=$_SERVER[PHP_SELF]?halaman=$i>$i</a> | ";
				}
				else
				{
					echo "<b>$i</b> | ";
				}
			}
			echo "<p>Total Barang : <b>$jmldata</b> Barang</p>";
				?>
				
			
		
	</table>

										</form>
									
	<table>
	<tr><td colspan=8><a href="pegawai_menu_barang.php"><img src="images/back.png" width=40 height=40 align=right></a></td></tr>		
	</table>
								 		
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
