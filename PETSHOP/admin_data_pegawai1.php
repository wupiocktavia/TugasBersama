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

	  
			<?php include "header_admin.php"; ?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							
				



<h2>Daftar Pegawai</h2>
                <ul>
				<li>
					<form method="post" action="" class="login">
					<table border=5 width=100%>
						<?php include "koneksi.php";
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
							$tampil_member=mysql_query("SELECT * FROM user WHERE status_akses='PEGAWAI' LIMIT $posisi, $batas");
							$no=1;
							echo "<tr><td>Id User</td><td>Nama Lengkap</td><td>Alamat</td><td>Aksi</td></tr>";
			
							
							while($data=mysql_fetch_array($tampil_member))
							{ ?>	
								
								<tr>
								<td><?php echo $data['id_user']; ?></td>
								<td><?php echo $data['nama_lengkap']; ?></td>
								<td><?php echo $data['alamat']; ?></td>
								<td><a href="admin_lihat_pegawai.php?id_user=<?php echo $data['id_user'];?>" >Lihat</a> | <a href="admin_hapus_member.php?id_user=<?php echo $data['id_user'];?>" onClick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['nama_lengkap'];?>?')">Hapus</a></td>
								</tr>
								<?php $no++;
							}
							
							
							$tampil2=mysql_query("SELECT * FROM user WHERE status_akses='PEGAWAI'");
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
			echo "<p>Total Pegawai : <b>$jmldata</b> Pegawai</p>";
							
						?>
					</table>
					</form>
                    
                    <table>
                     <tr>
                        <td><a href=admin_data_pegawai.php><img src=images/back.png width=50 height=50></a></td>
                        </tr>
                    </table>
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
