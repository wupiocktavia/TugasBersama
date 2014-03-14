<?PHP
	include "koneksi.php";
	$id_nota=$_POST['id_nota'];
	$id_barang=$_POST['id_barang'];
	$harga_barang=$_POST['harga_barang'];
	$diskon=$_POST['diskon'];
	$diskon=$diskon/100;
	$kuantiti=$_POST['kuantiti'];
	
	$subtotal=$_POST['subtotal'];
	
	$insert_detail=mysql_query("INSERT INTO detail_pembelian_barang(id_nota_barang, id_barang, harga_barang, diskon, kuantiti, subtotal) VALUES ('$id_nota', '$id_barang',  '$harga_barang', '$diskon', '$kuantiti', '$subtotal')");
	$barang=mysql_query("select * from barang where id_barang='$id_barang'");
	$databarang=mysql_fetch_array($barang);
	$stok=$databarang['stok'];
	$jmlstok=$stok-$kuantiti;
	$kurangistok=mysql_query("update barang set stok='$jmlstok' where id_barang='$id_barang'");
	if($insert_detail)
	{
		HEADER("LOCATION:pegawai_transaksi_barang.php?id_nota=$id_nota");
	}
	else
	{
	echo "gagal";
	}
?>