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
		
							 
							 
		<h2>Daftar hewan</h2>
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
			$tampil_hewan=mysql_query("SELECT * FROM hewan LIMIT $posisi, $batas");
			$no=1;
			echo "<tr>";
			while($data_hewan=mysql_fetch_array($tampil_hewan))
			{
				
				echo "<td colspan=2 align=center><a href=pegawai_lihat_hewan.php?id_hewan=$data_hewan[id_hewan]><img src= '$data_hewan[direktori_gambar_hewan]' width=100 height=100></a></td>";
				$no++;
			}
			
			echo "</tr>";
				?>	
				<?php
			$tampil=mysql_query("SELECT * FROM hewan LIMIT $posisi, $batas");
				
				
			echo "</tr>";
			
			$tampil2=mysql_query("SELECT * FROM hewan");
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
			echo "<p>Total Hewan : <b>$jmldata</b> Hewan</p>";
			?>
		</table>
		
		<table>
	<tr><td colspan=8><a href="pegawai_menu_hewan.php"><img src="images/back.png" width=40 height=40 align=right></a></td></tr>		
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
