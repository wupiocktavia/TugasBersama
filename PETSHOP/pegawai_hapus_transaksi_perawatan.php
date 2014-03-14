<?php
	include "koneksi.php";
	$id_nota=$_GET['id_nota'];
	$id_detail_perawatan=$_GET['id_detail_perawatan'];
	
	
	$query1=MYSQL_QUERY("delete from detail_transaksi_perawatan where id_nota_perawatan='$id_nota' AND id_detail_perawatan='$id_detail_perawatan'");
	if($query1)
	{
		HEADER("LOCATION:keranjang_perawatan.php?id_nota=$id_nota");
	}
	else
	{
		echo "GAGAL";
	}
?>