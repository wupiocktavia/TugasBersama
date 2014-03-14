
<script>
	
	function hapus_berhasil()
	{
		alert("Data Barang Berhasil Dihapus");
	}
	
	function konfirmasi() {
	var answer = confirm("Data Barang Gagal Dihapus")
	if (answer){
	window.location = "http://localhost/PETSHOP/produk_pegawai.php";
	}
	
	}
</script>
<?php
	include "koneksi.php";
	$id_barang=$_GET['id_barang'];
	function hapus_gagal()
	{
		//alert("Data Barang Gagal Dihapus");
		 echo '<script type="text/javascript">alert("Data Barang Gagal Dihapus"); </script>';
	}
	
	$query=MYSQL_QUERY("delete from BARANG where id_barang='$id_barang'");
	if($query)
	{	
		HEADER("LOCATION:pegawai_tampil_barang.php");
	}
	else
	{	?>
	<script>
		konfirmasi();
		</script>
		<?php
		//hapus_gagal();
		//HEADER("LOCATION:produk_pegawai.php");
	}
?>