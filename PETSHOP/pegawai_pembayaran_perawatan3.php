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
			
			<?PHP

											$id_nota=$_POST['id_nota'];
											$bayar=$_POST['bayar'];
											$kembalian=$_POST['kembalian'];
											$total=$_POST['total'];
											
											$update=mysql_query("UPDATE transaksi_perawatan SET total_harga='$total' WHERE id_nota_perawatan='$id_nota'");
										
										
										?>
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							     	<h2>Terima Kasih atas kunjungan Anda. Silahkan datang kembali ..</h2>
                                 <ul>
									<li>
									
									<button onclick="print_d()">Cetak Struk</button>
    <script>
		function print_d(){
			window.open("pegawai_cetak_struk_perawatan.php?id_nota=<?php echo $_POST['id_nota'];?>&bayar=<?php echo $_POST['bayar'];?>&kembalian=<?php echo $_POST['kembalian'];?>","_blank");
		}
		
	</script>
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
