<?PHP
	include "koneksi.php";
	$id_nota=$_POST['id_nota'];
	$id_hewan=$_POST['id_hewan'];
	$harga_hewan=$_POST['harga_hewan'];
	$diskon=$_POST['diskon'];
	$diskon=$diskon/100;
	$kuantiti=$_POST['kuantiti'];
	
	$subtotal=$_POST['subtotal'];
	
	$insert_detail=mysql_query("INSERT INTO detail_pembelian_hewan(id_nota_hewan, id_hewan, harga_hewan, diskon, kuantiti, subtotal) VALUES ('$id_nota', '$id_hewan',  '$harga_hewan', '$diskon', '$kuantiti', '$subtotal')");
	$hewan=mysql_query("select * from hewan where id_hewan='$id_hewan'");
	$datahewan=mysql_fetch_array($hewan);
	$stok=$datahewan['stok'];
	$jmlstok=$stok-$kuantiti;
	$kurangistok=mysql_query("update hewan set stok='$jmlstok' where id_hewan='$id_hewan'");
	if($insert_detail)
	{
		HEADER("LOCATION:pegawai_transaksi_hewan1.php?id_nota=$id_nota");
	}
	else
	{
	echo "gagal";
	}
?>