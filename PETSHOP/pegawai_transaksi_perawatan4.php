<?PHP
INCLUDE "koneksi.php";
	$id_nota=$_POST['id_nota'];
											$id_detail_perawatan=$_POST['id_detail_perawatan'];
											$id_perawatan=$_POST['id_perawatan'];
											$id_kategori_hewan=$_POST['id_kategori_hewan'];
											$harga_perawatan=$_POST['harga_perawatan'];
											$diskon=$_POST['diskon'];
											$diskon=$diskon/100;
											$kuantiti=$_POST['kuantiti'];
											
	$subtotal=$_POST['subtotal'];
	
	$insert_detail=mysql_query("INSERT INTO detail_transaksi_perawatan(id_nota_perawatan, id_detail_perawatan, harga_perawatan, diskon, kuantiti, subtotal) VALUES ('$id_nota', '$id_detail_perawatan',  '$harga_perawatan', '$diskon', '$kuantiti', '$subtotal')");
	
	if($insert_detail)
	{
		HEADER("LOCATION:pegawai_transaksi_perawatan1.php?id_nota=$id_nota");
	}
	else
	{
	echo "gagal";
	}
?>