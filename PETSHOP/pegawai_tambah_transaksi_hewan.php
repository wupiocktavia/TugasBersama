<?PHP include "koneksi.php";

											$id_nota=$_POST['id_nota'];
											$tanggal=$_POST['tanggal'];
											$id_user=$_POST['id_user'];
											
											$query=mysql_query("INSERT INTO transaksi_pembelian_hewan(id_nota_hewan,id_user,tgl_transaksi) VALUES ('$id_nota','$id_user','$tanggal')");
											if($query)
											{
												HEADER("LOCATION:pegawai_transaksi_hewan1.php?id_nota=$id_nota");
											}
											else
											{
												echo "gagal";
											}
										?>