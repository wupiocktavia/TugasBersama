
<script>
	
	function hapus_berhasil()
	{
		alert("Data perawatan Berhasil Dihapus");
	}
	
	function konfirmasi() {
	var answer = confirm("Data perawatan Gagal Dihapus")
	if (answer){
	window.location = "http://localhost/PETSHOP/produk_pegawai.php";
	}
	
	}
</script>
<?php
	include "koneksi.php";
	$id_perawatan=$_GET['id_perawatan'];
	function hapus_gagal()
	{
		//alert("Data perawatan Gagal Dihapus");
		 echo '<script type="text/javascript">alert("Data perawatan Gagal Dihapus"); </script>';
	}
	
	$query=MYSQL_QUERY("delete from perawatan where id_perawatan='$id_perawatan'");
	if($query)
	{	
		HEADER("LOCATION:pegawai_perawatan1.php");
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