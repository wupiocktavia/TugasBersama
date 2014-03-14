
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
	$query=mysql_query("SELECT id_nota_barang, nama_lengkap, tgl_transaksi, nama_barang, kuantiti, detail_pembelian_barang.harga_barang, detail_pembelian_barang.diskon, subtotal, total_harga
FROM USER JOIN transaksi_pembelian_barang USING (id_user)
JOIN detail_pembelian_barang USING (id_nota_barang)
JOIN barang USING (id_barang) WHERE id_nota_barang='$id_nota'");

$data=mysql_fetch_array($query);
?>
<center><h3>Struk Belanja - One Stop Pet Shop </h3></center>
	<table border="0" width="50%" style="border-collapse:collapse;" align="left">
    	<tr>
        	<td>Id Nota</td>
			<td>:</td>
			<td><?php echo $data['id_nota_barang'];?></td>
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
			<td>Nama Barang</td>
			<td>Kuantiti</td>
			<td>Harga</td>
			<td>Diskon(%)</td>
			<td>Subtotal</td>
		</tr>
		
        <?php
		$query1=mysql_query("SELECT id_nota_barang, nama_lengkap, tgl_transaksi, nama_barang, kuantiti, detail_pembelian_barang.harga_barang, detail_pembelian_barang.diskon, subtotal, total_harga
FROM USER JOIN transaksi_pembelian_barang USING (id_user)
JOIN detail_pembelian_barang USING (id_nota_barang)
JOIN barang USING (id_barang) WHERE id_nota_barang='$id_nota'");
		$no=1;
		while($data1=mysql_fetch_array($query1)){
		$diskon=$data1['diskon']*100;
		?>
        <tr>
		
        	<td width="50%"><?php echo $data1['nama_barang']; ?></td>
            <td width="10%" ><?php echo $data1['kuantiti']; ?></td>
            <td width="10%" ><?php echo $data1['harga_barang']; ?></td>
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