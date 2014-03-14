<?php
	include "koneksi.php";
	$id_nota=$_GET['id_nota'];
	$id_barang=$_GET['id_barang'];
	
	$query=mysql_query("select * from detail_pembelian_barang where id_nota_barang='$id_nota' and id_barang='$id_barang'");
	$datadetail=mysql_fetch_array($query);
	$kuantiti=$datadetail['kuantiti'];
	$barang=mysql_query("select * from barang where id_barang='$id_barang'");
	$databarang=mysql_fetch_array($barang);
	$stok=$databarang['stok'];
	$jmlstok=$stok+$kuantiti;
	$tambahstok=mysql_query("update barang set stok='$jmlstok' where id_barang='$id_barang'");
	
	$query1=MYSQL_QUERY("delete from detail_pembelian_barang where id_nota_barang='$id_nota' AND id_barang='$id_barang'");
	if($query1)
	{
		HEADER("LOCATION:keranjang_barang.php?id_nota=$id_nota");
	}
	else
	{
		echo "GAGAL";
	}
?>