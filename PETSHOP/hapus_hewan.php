
<script>
	
	function hapus_berhasil()
	{
		alert("Data hewan Berhasil Dihapus");
	}
	
	function konfirmasi() {
	var answer = confirm("Data hewan Gagal Dihapus")
	if (answer){
	window.location = "http://localhost/PETSHOP/produk_pegawai.php";
	}
	
	}
</script>
<?php
	include "koneksi.php";
	$id_hewan=$_GET['id_hewan'];
	function hapus_gagal()
	{
		//alert("Data hewan Gagal Dihapus");
		 echo '<script type="text/javascript">alert("Data hewan Gagal Dihapus"); </script>';
	}
	
	$query=MYSQL_QUERY("delete from hewan where id_hewan='$id_hewan'");
	if($query)
	{	
		HEADER("LOCATION:hewan_pegawai.php");
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