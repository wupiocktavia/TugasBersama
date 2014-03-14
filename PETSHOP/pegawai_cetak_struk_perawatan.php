
<html>
<head>
	<title>Pet Shop</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php

	include 'koneksi.php';
	$id_nota=$_GET['id_nota'];
	$tunai=$_GET['bayar'];
	$kembalian=$_GET['kembalian'];
	$query=mysql_query("SELECT id_nota_perawatan, nama_lengkap, tgl_transaksi, id_detail_perawatan, nama_perawatan,nama_kategori_hewan, kuantiti, detail_perawatan.harga_perawatan, detail_perawatan.diskon, subtotal, total_harga
FROM USER JOIN transaksi_perawatan USING (id_user)
JOIN detail_transaksi_perawatan USING (id_nota_perawatan)
JOIN detail_perawatan USING (id_detail_perawatan)
JOIN kategori_hewan USING (id_kategori_hewan) 
JOIN perawatan USING (id_perawatan)  WHERE id_nota_perawatan='$id_nota'");

$data=mysql_fetch_array($query);
?>
<center><h3>Struk Belanja - One Stop Pet Shop </h3></center>
	<table border="0" width="50%" style="border-collapse:collapse;" align="left">
    	<tr>
        	<td>Id Nota</td>
			<td>:</td>
			<td><?php echo $id_nota;?></td>
        </tr>
		
		<tr>
        	<td>Tanggal</td>
			<td>:</td>
			<td><?php echo $data['tgl_transaksi'];?></td>
        </tr>
		<tr>
        	<td>Nama Pelanggan</td>
			<td>:</td>
			<td><?php echo $data['nama_lengkap'];?></td>
        </tr>
	</table>
	<br>
	<br>
	<br>
	<br>
	<table width=90% align="left" border=1>
		<tr>
			<td>ID Detail Perawatan</td>
			<td>Perawatan</td>
			<td>Kategori Hewan</td>
			<td>Kuantiti</td>
			<td>Harga</td>
			<td>Diskon(%)</td>
			<td>Subtotal</td>
		</tr>
		
        <?php
		$query1=mysql_query("SELECT id_nota_perawatan, nama_lengkap, tgl_transaksi, id_detail_perawatan, nama_perawatan,nama_kategori_hewan, kuantiti, detail_perawatan.harga_perawatan, detail_perawatan.diskon, subtotal, total_harga
FROM USER JOIN transaksi_perawatan USING (id_user)
JOIN detail_transaksi_perawatan USING (id_nota_perawatan)
JOIN detail_perawatan USING (id_detail_perawatan)
JOIN kategori_hewan USING (id_kategori_hewan) 
JOIN perawatan USING (id_perawatan) WHERE id_nota_perawatan='$id_nota'");
		$no=1;
		while($data1=mysql_fetch_array($query1)){
		$diskon=$data1['diskon']*100;
		?>
        <tr>
			<td width="10%"><?php echo $data1['id_detail_perawatan']; ?></td>
        	<td width="20%"><?php echo $data1['nama_perawatan']; ?></td>
			<td width="20%"><?php echo $data1['nama_kategori_hewan']; ?></td>
            <td width="10%" ><?php echo $data1['kuantiti']; ?></td>
            <td width="10%" ><?php echo $data1['harga_perawatan']; ?></td>
            <td width="10%" ><?php echo $diskon; ?></td>
            <td width="10%" ><?php echo $data1['subtotal']; ?></td>
        </tr>
        <?php $no++; } ?>
    </table>
	<br>
	<br>
	<br>
	<br>
	<BR>
	<table width="50%" align=right>
	<tr>
        	<td>Total</td>
			<td>:</td>
			<td><?php echo "Rp. $data[total_harga]";?></td>
        </tr>
		
		<tr>
        	<td>Tunai</td>
			<td>:</td>
			<td><?php echo "Rp. $tunai ";?></td>
        </tr>
		<tr>
        	<td>Kembalian</td>
			<td>:</td>
			<td><?php echo "Rp. $kembalian ";?></td>
        </tr>
	</table>
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>
</html>