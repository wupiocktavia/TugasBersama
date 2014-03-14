DROP TABLE IF EXISTS barang;

CREATE TABLE `barang` (
  `id_barang` char(8) NOT NULL,
  `id_kategori_barang` char(8) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `direktori_gambar_barang` varchar(100) DEFAULT NULL,
  `harga_barang` float DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `id_kategori_barang` (`id_kategori_barang`),
  CONSTRAINT `FK_barang` FOREIGN KEY (`id_kategori_barang`) REFERENCES `kategori_barang` (`id_kategori_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO barang VALUES("1","BJA","Arsenal Jersey","gambar/baju 2.jpg","70000","0.1","20");
INSERT INTO barang VALUES("10","TT","Dog Gone Smart Bed Co Large Na","gambar/Dog-Gone-Smart-Bed-Co.-Smart-Bed-Rectangular-.jpg","200000","0.05","15");
INSERT INTO barang VALUES("11","BJA","Petco red & Gray Reversible Cozy Coat","gambar/baju10.jpg","65000","0","33");
INSERT INTO barang VALUES("12","PT","Petco Smoochie Pooch Pearl Dog Hairbows","gambar/aksesoris9.jpg","20000","0","30");
INSERT INTO barang VALUES("13","BJA","Petco wag-a-tude Brown Leather Dog Jacket","gambar/baju 11.jpg","55000","0","17");
INSERT INTO barang VALUES("14","BJA","Petco Wag-a-tude Woof Dog Hoodie","gambar/baju 12.jpg","45000","0","11");
INSERT INTO barang VALUES("15","BJA","Petco Wag-a-tude Checkered Shearling Bomber Dog Ja","gambar/baju 13.jpg","65000","0","8");
INSERT INTO barang VALUES("16","BJA","Petco wag-a-tude Fuzzy Reindeer Hoodie","gambar/baju14.jpg","55000","0","19");
INSERT INTO barang VALUES("17","BJA","Petco Wag-a-tude black plaid Dog Hoodie","gambar/baju15.jpg","45000","0","13");
INSERT INTO barang VALUES("18","PT","Petco Smoochie Pooch Pink Rhinestone Dog Hairbows","gambar/aksesoris1.jpg","25000","0","18");
INSERT INTO barang VALUES("19","PT","Petco Holiday Light Up Dog Antlers","gambar/aksesoris2.jpg","28000","0","14");
INSERT INTO barang VALUES("2","BJA","Real Madrid Jersey","gambar/baju 3.jpg","72000","0.1","20");
INSERT INTO barang VALUES("20","SPT","Petco Smoochie Pooch Leopard Faux Fur Dog Shoes","gambar/aksesoris6.jpg","70000","0","30");
INSERT INTO barang VALUES("3","BJA","Chelsea Jersey","gambar/baju 1.jpg","75000","0.1","20");
INSERT INTO barang VALUES("4","BJA","Star Wars Yoda Dog T-Shirt","gambar/baju9.jpg","55000","0","10");
INSERT INTO barang VALUES("5","BJA","Petco Smoochie Pooch Pink Polk","gambar/baju2.jpg","45000","0","8");
INSERT INTO barang VALUES("6","BJA","Holiday Party Dog Dress","gambar/baju3.jpg","50000","0.05","15");
INSERT INTO barang VALUES("7","TP","Petco wag-a-tude Camo Beanie","gambar/aksesoris8.jpg","35000","0","25");
INSERT INTO barang VALUES("8","TM","Petmate Melamine Bowls Pink He","gambar/Petmate-Melamine-Bowl-Pink-Heart-25-ounces-99_1.jpg","30000","0","30");
INSERT INTO barang VALUES("9","TT","Mid West Metal Product Co","gambar/Mid-West-Metal-Products-Co.-Quiet-Time-Fashion-Bed-2.jpg","150000","0.05","12");
INSERT INTO barang VALUES("a","tt","coba","gambar/powder.jpg","20000","0","20");



DROP TABLE IF EXISTS detail_pembelian_barang;

CREATE TABLE `detail_pembelian_barang` (
  `id_nota_pembelian` char(8) NOT NULL,
  `id_barang` char(8) DEFAULT NULL,
  `id_kategori_barang` char(8) DEFAULT NULL,
  `harga_barang` float DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `kuantiti` int(11) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  KEY `id_nota_pembelian` (`id_nota_pembelian`),
  KEY `id_barang` (`id_barang`),
  KEY `id_kategori_barang` (`id_kategori_barang`),
  CONSTRAINT `detail_pembelian_barang_ibfk_1` FOREIGN KEY (`id_nota_pembelian`) REFERENCES `transaksi_pembelian` (`id_nota_pembelian`),
  CONSTRAINT `detail_pembelian_barang_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  CONSTRAINT `detail_pembelian_barang_ibfk_4` FOREIGN KEY (`id_kategori_barang`) REFERENCES `barang` (`id_kategori_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO detail_pembelian_barang VALUES("NT1","1","BJA","100000","0.1","2","180000");
INSERT INTO detail_pembelian_barang VALUES("NT1","2","BJA","75000","0.1","1","67500");
INSERT INTO detail_pembelian_barang VALUES("NT2","2","BJA","72000","0.1","1","64800");
INSERT INTO detail_pembelian_barang VALUES("NT2","5","BJA","45000","0","2","90000");
INSERT INTO detail_pembelian_barang VALUES("NT2","8","TM","30000","0","1","30000");
INSERT INTO detail_pembelian_barang VALUES("NT3","1","BJA","70000","0.1","1","63000");
INSERT INTO detail_pembelian_barang VALUES("NT3","4","BJA","55000","0","1","55000");
INSERT INTO detail_pembelian_barang VALUES("NT4","7","TP","35000","0","1","35000");
INSERT INTO detail_pembelian_barang VALUES("NT4","9","TT","150000","0.05","1","142500");
INSERT INTO detail_pembelian_barang VALUES("NT4","4","BJA","55000","0","1","55000");
INSERT INTO detail_pembelian_barang VALUES("NT4","8","TM","30000","0","1","30000");
INSERT INTO detail_pembelian_barang VALUES("NT5","8","TM","30000","0","1","30000");
INSERT INTO detail_pembelian_barang VALUES("NT5","10","TT","200000","0.05","1","190000");
INSERT INTO detail_pembelian_barang VALUES("NT5","4","BJA","55000","0","1","55000");
INSERT INTO detail_pembelian_barang VALUES("NT6","7","TP","35000","0","2","70000");
INSERT INTO detail_pembelian_barang VALUES("NT6","8","TM","30000","0","2","60000");
INSERT INTO detail_pembelian_barang VALUES("NT6","2","BJA","72000","0.1","2","129600");
INSERT INTO detail_pembelian_barang VALUES("NT7","6","BJA","50000","0.05","1","47500");
INSERT INTO detail_pembelian_barang VALUES("NT7","5","BJA","45000","0","1","45000");
INSERT INTO detail_pembelian_barang VALUES("NT7","11","BJA","65000","0","2","130000");
INSERT INTO detail_pembelian_barang VALUES("NT7","7","TP","35000","0","2","70000");
INSERT INTO detail_pembelian_barang VALUES("NT8","17","BJA","45000","0","1","45000");
INSERT INTO detail_pembelian_barang VALUES("NT9","15","BJA","65000","0","1","65000");
INSERT INTO detail_pembelian_barang VALUES("NT9","16","BJA","55000","0","1","55000");
INSERT INTO detail_pembelian_barang VALUES("NT9","19","PT","28000","0","1","28000");
INSERT INTO detail_pembelian_barang VALUES("NT9","20","SPT","65000","0","1","65000");
INSERT INTO detail_pembelian_barang VALUES("NT9","14","BJA","45000","0","1","45000");
INSERT INTO detail_pembelian_barang VALUES("NT9","5","BJA","45000","0","1","45000");
INSERT INTO detail_pembelian_barang VALUES("NT9","9","TT","150000","0.05","1","142500");
INSERT INTO detail_pembelian_barang VALUES("NT10","10","TT","200000","0.05","1","190000");
INSERT INTO detail_pembelian_barang VALUES("NT10","20","SPT","65000","0","1","65000");
INSERT INTO detail_pembelian_barang VALUES("NT10","18","PT","25000","0","2","50000");
INSERT INTO detail_pembelian_barang VALUES("NT10","17","BJA","45000","0","1","45000");
INSERT INTO detail_pembelian_barang VALUES("NT11","3","BJA","75000","0.1","1","67500");
INSERT INTO detail_pembelian_barang VALUES("NT11","12","PT","20000","0","2","40000");
INSERT INTO detail_pembelian_barang VALUES("NT12","11","BJA","65000","0","2","130000");
INSERT INTO detail_pembelian_barang VALUES("NT13","6","BJA","50000","0.05","2","95000");
INSERT INTO detail_pembelian_barang VALUES("NT13","3","BJA","75000","0.1","1","67500");
INSERT INTO detail_pembelian_barang VALUES("NT13","9","TT","150000","0.05","1","142500");
INSERT INTO detail_pembelian_barang VALUES("NT14","6","BJA","50000","0.05","1","47500");



DROP TABLE IF EXISTS detail_pembelian_hewan;

CREATE TABLE `detail_pembelian_hewan` (
  `id_nota_pembelian` char(8) NOT NULL,
  `id_user` char(8) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `id_makanan` char(8) DEFAULT NULL,
  `id_kategori_makanan` char(8) DEFAULT NULL,
  `harga_makanan` float DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `kuantiti` int(11) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  KEY `id_nota_pembelian` (`id_nota_pembelian`),
  KEY `id_user` (`id_user`),
  KEY `id_makanan` (`id_makanan`),
  KEY `id_kategori_makanan` (`id_kategori_makanan`),
  CONSTRAINT `detail_pembelian_hewan_ibfk_1` FOREIGN KEY (`id_nota_pembelian`) REFERENCES `transaksi_pembelian` (`id_nota_pembelian`),
  CONSTRAINT `detail_pembelian_hewan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `transaksi_pembelian` (`id_user`),
  CONSTRAINT `detail_pembelian_hewan_ibfk_3` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`),
  CONSTRAINT `detail_pembelian_hewan_ibfk_4` FOREIGN KEY (`id_kategori_makanan`) REFERENCES `makanan` (`id_kategori_makanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS detail_perawatan;

CREATE TABLE `detail_perawatan` (
  `id_perawatan` char(8) NOT NULL,
  `id_kategori_hewan` char(8) NOT NULL,
  `harga_perawatan` float DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  KEY `id_perawatan` (`id_perawatan`),
  KEY `id_kategori_hewan` (`id_kategori_hewan`),
  CONSTRAINT `detail_perawatan_ibfk_1` FOREIGN KEY (`id_perawatan`) REFERENCES `perawatan` (`id_perawatan`),
  CONSTRAINT `detail_perawatan_ibfk_2` FOREIGN KEY (`id_kategori_hewan`) REFERENCES `kategori_hewan` (`id_kategori_hewan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO detail_perawatan VALUES("1","1","25000","0");
INSERT INTO detail_perawatan VALUES("1","3","20000","0");
INSERT INTO detail_perawatan VALUES("2","1","10000","0");
INSERT INTO detail_perawatan VALUES("2","3","10000","0");
INSERT INTO detail_perawatan VALUES("3","1","35000","0.05");
INSERT INTO detail_perawatan VALUES("3","3","32500","0.05");
INSERT INTO detail_perawatan VALUES("4","1","50000","0.05");
INSERT INTO detail_perawatan VALUES("4","3","50000","0.05");
INSERT INTO detail_perawatan VALUES("5","1","45000","0");
INSERT INTO detail_perawatan VALUES("5","3","45000","0");
INSERT INTO detail_perawatan VALUES("6","1","40000","0");



DROP TABLE IF EXISTS detail_transaksi_perawatan;

CREATE TABLE `detail_transaksi_perawatan` (
  `id_nota_perawatan` char(8) NOT NULL,
  `id_user` char(8) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `id_perawatan` char(8) DEFAULT NULL,
  `id_kategori_hewan` char(8) DEFAULT NULL,
  `harga_perawatan` float DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `kuantiti` int(11) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  KEY `id_nota_perawatan` (`id_nota_perawatan`),
  KEY `id_user` (`id_user`),
  KEY `id_perawatan` (`id_perawatan`),
  KEY `id_kategori_hewan` (`id_kategori_hewan`),
  CONSTRAINT `detail_transaksi_perawatan_ibfk_1` FOREIGN KEY (`id_nota_perawatan`) REFERENCES `transaksi_perawatan` (`id_nota_perawatan`),
  CONSTRAINT `detail_transaksi_perawatan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `transaksi_perawatan` (`id_user`),
  CONSTRAINT `detail_transaksi_perawatan_ibfk_3` FOREIGN KEY (`id_perawatan`) REFERENCES `detail_perawatan` (`id_perawatan`),
  CONSTRAINT `detail_transaksi_perawatan_ibfk_4` FOREIGN KEY (`id_kategori_hewan`) REFERENCES `detail_perawatan` (`id_kategori_hewan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS hewan;

CREATE TABLE `hewan` (
  `id_hewan` char(8) NOT NULL,
  `id_kategori_hewan` char(8) NOT NULL,
  `nama_hewan` varchar(30) DEFAULT NULL,
  `direktori_gambar_hewan` varchar(100) DEFAULT NULL,
  `harga_hewan` double DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_hewan`),
  KEY `id_kategori_hewan` (`id_kategori_hewan`),
  CONSTRAINT `hewan_ibfk_1` FOREIGN KEY (`id_kategori_hewan`) REFERENCES `kategori_hewan` (`id_kategori_hewan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO hewan VALUES("1","1","Basenji","gambar/basenji.png","2500000","0.01","5");
INSERT INTO hewan VALUES("2","3","Munchkin","gambar/munchkin.jpg","1752500","0.05","7");
INSERT INTO hewan VALUES("3","3","Abyssinian","gambar/abyssinian.jpg","3200000","0","3");
INSERT INTO hewan VALUES("4","1","Doberman","gambar/doberman.jpg","5700000","0.07","8");
INSERT INTO hewan VALUES("5","3","Tiffany","gambar/kucing-tiffany.jpg","1500000","0","6");
INSERT INTO hewan VALUES("6","2","Roborovski","gambar/robo.jpg","50000","0","20");



DROP TABLE IF EXISTS kategori_barang;

CREATE TABLE `kategori_barang` (
  `id_kategori_barang` char(8) NOT NULL,
  `nama_kategori_barang` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kategori_barang VALUES("BJA","Baju");
INSERT INTO kategori_barang VALUES("PT","Pita");
INSERT INTO kategori_barang VALUES("SPT","Sepatu");
INSERT INTO kategori_barang VALUES("TM","Tempat Makan");
INSERT INTO kategori_barang VALUES("TP","Topi");
INSERT INTO kategori_barang VALUES("TT","Tempat Tidur");



DROP TABLE IF EXISTS kategori_hewan;

CREATE TABLE `kategori_hewan` (
  `id_kategori_hewan` char(8) NOT NULL,
  `nama_kategori_hewan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_hewan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kategori_hewan VALUES("1","Anjing");
INSERT INTO kategori_hewan VALUES("2","Hamster");
INSERT INTO kategori_hewan VALUES("3","Kucing");



DROP TABLE IF EXISTS perawatan;

CREATE TABLE `perawatan` (
  `id_perawatan` char(8) NOT NULL,
  `nama_perawatan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_perawatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO perawatan VALUES("1","Mandi");
INSERT INTO perawatan VALUES("2","Potong Kuku");
INSERT INTO perawatan VALUES("3","Cukur");
INSERT INTO perawatan VALUES("4","Pijat");
INSERT INTO perawatan VALUES("5","Salon");
INSERT INTO perawatan VALUES("6","Renang");



DROP TABLE IF EXISTS temp;

CREATE TABLE `temp` (
  `no` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(7) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS temp_detail_transaksi_barang;

CREATE TABLE `temp_detail_transaksi_barang` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `id_nota_pembelian` char(8) DEFAULT NULL,
  `id_barang` char(8) DEFAULT NULL,
  `id_kategori_barang` char(8) DEFAULT NULL,
  `harga_barang` double DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `kuantiti` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS temp_transaksi_pembelian;

CREATE TABLE `temp_transaksi_pembelian` (
  `id_nota_pembelian` char(8) NOT NULL,
  `id_user` char(8) DEFAULT NULL,
  `tgl_transaksi` varchar(12) DEFAULT NULL,
  `total_harga` double DEFAULT NULL,
  PRIMARY KEY (`id_nota_pembelian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS transaksi_pembelian;

CREATE TABLE `transaksi_pembelian` (
  `id_nota_pembelian` char(8) NOT NULL,
  `id_user` char(8) NOT NULL,
  `tgl_transaksi` varchar(12) NOT NULL,
  `total_harga` double NOT NULL,
  PRIMARY KEY (`id_nota_pembelian`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `transaksi_pembelian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO transaksi_pembelian VALUES("NT1","M1","28-11-13","247500");
INSERT INTO transaksi_pembelian VALUES("NT10","M2","01-12-13","350000");
INSERT INTO transaksi_pembelian VALUES("NT11","M1","12-12-13","107500");
INSERT INTO transaksi_pembelian VALUES("NT12","M3","12-12-13","130000");
INSERT INTO transaksi_pembelian VALUES("NT13","M6","12-12-13","305000");
INSERT INTO transaksi_pembelian VALUES("NT14","M5","19-12-13","47500");
INSERT INTO transaksi_pembelian VALUES("NT2","M2","01-12-13","184800");
INSERT INTO transaksi_pembelian VALUES("NT3","M6","01-12-13","118000");
INSERT INTO transaksi_pembelian VALUES("NT4","M3","01-12-13","262500");
INSERT INTO transaksi_pembelian VALUES("NT5","M1","01-12-13","275000");
INSERT INTO transaksi_pembelian VALUES("NT6","M5","01-12-13","259600");
INSERT INTO transaksi_pembelian VALUES("NT7","M1","01-12-13","292500");
INSERT INTO transaksi_pembelian VALUES("NT8","M3","01-12-13","45000");
INSERT INTO transaksi_pembelian VALUES("NT9","M1","01-12-13","445500");



DROP TABLE IF EXISTS transaksi_perawatan;

CREATE TABLE `transaksi_perawatan` (
  `id_nota_perawatan` char(8) NOT NULL,
  `id_user` char(8) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_harga` float NOT NULL,
  PRIMARY KEY (`id_nota_perawatan`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `transaksi_perawatan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `id_user` char(8) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '',
  `status_akses` char(8) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kode_pos` char(8) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("AD1","15744c1118c658c737f40b4a4f8b6a70","ADMIN","Wupi Ocktavia K","Cimahi","40522","P","1993-10-26","085721537326","wupi@yahoo.com");
INSERT INTO user VALUES("M1","98db0b07bba92340ab23fdde110814c1","MEMBER","Upi","cimahi","40522","P","1993-10-26","089812345678","upi@yahoo.com");
INSERT INTO user VALUES("M2","faac762ff2fcaa4b3086ee397e991af8","MEMBER","Fani","pangandaran","41234","P","1993-06-20","083891234567","fani@gmail.com");
INSERT INTO user VALUES("M3","08edf068a77d4df4df723bd830de3398","MEMBER","Fahmi","cililin","40123","L","1993-08-27","08962944162","fahmikhaerul@gmail.com");
INSERT INTO user VALUES("M4","e4c74d5b8d66e9e53fcdf9f0a9fc2cd2","MEMBER","Devi","Soreang","40123","P","1992-09-28","08987654321","devi@ymail.co.id");
INSERT INTO user VALUES("M5","e0aafdd75c6b091a4153ea368b09ca91","MEMBER","Ria Ananda","Jakarta","4044","P","1993-02-18","08562456789","rianande@gmail.com");
INSERT INTO user VALUES("M6","0c0db1b3bffc603096ca7f053cbb72f4","MEMBER","Iqbal","Kopo","40522","L","1991-06-19","08523456789","iqbalas@yahoo.com");
INSERT INTO user VALUES("M7","809bdf3f15b4c34fb3410ad0d2f8319b","MEMBER","Lugas Bijak","Cimahi","40522","L","2002-01-05","08121456789","lugas@yahoo.co.id");
INSERT INTO user VALUES("PG1","ee61d621f12489791ce28b31409daee4","PEGAWAI","Stephanie Preselly","Sadang Serang","40111","P","1993-06-20","081321123456","fani@yahoo.com");
INSERT INTO user VALUES("PG2","7d49e40f4b3d8f68c19406a58303f826","PEGAWAI","Lucky","Sadang Serang","40521","L","1995-07-17","08987654321","dimas@yahoo.co.id");



