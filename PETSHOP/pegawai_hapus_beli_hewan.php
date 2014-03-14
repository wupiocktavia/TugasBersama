<?php
	include "koneksi.php";
	$id_nota=$_GET['id_nota'];
	$id_hewan=$_GET['id_hewan'];
	
	$query=mysql_query("select * from detail_pembelian_hewan where id_nota_hewan='$id_nota' and id_hewan='$id_hewan'");
	$datadetail=mysql_fetch_array($query);
	$kuantiti=$datadetail['kuantiti'];
	$hewan=mysql_query("select * from hewan where id_hewan='$id_hewan'");
	$datahewan=mysql_fetch_array($hewan);
	$stok=$datahewan['stok'];
	$jmlstok=$stok+$kuantiti;
	$tambahstok=mysql_query("update hewan set stok='$jmlstok' where id_hewan='$id_hewan'");
	
	$query1=MYSQL_QUERY("delete from detail_pembelian_hewan where id_nota_hewan='$id_nota' AND id_hewan='$id_hewan'");
	if($query1)
	{
		HEADER("LOCATION:keranjang_hewan.php?id_nota=$id_nota");
	}
	else
	{
		echo "GAGAL";
	}
?>