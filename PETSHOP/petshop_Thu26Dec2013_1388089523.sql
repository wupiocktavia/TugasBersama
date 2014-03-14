DROP TABLE IF EXISTS barang;

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `direktori_gambar_barang` varchar(100) DEFAULT NULL,
  `harga_barang` double DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `id_kategori_barang` (`id_kategori_barang`),
  CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori_barang`) REFERENCES `kategori_barang` (`id_kategori_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO barang VALUES("1","1","Arsenal Jersey","gambar/baju 2.jpg","70000","0.1","50");
INSERT INTO barang VALUES("2","1","Real Madrid Jersey","gambar/baju 3.jpg","72000","0.1","50");
INSERT INTO barang VALUES("3","1","Chelsea Jersey","gambar/baju 1.jpg","75000","0.1","50");
INSERT INTO barang VALUES("4","1","Star Wars Yoda Dog T-Shirt","gambar/baju9.jpg","55000","0","50");
INSERT INTO barang VALUES("5","1","Petco Smoochie Pooch Pink Polk","gambar/baju2.jpg","45000","0","50");
INSERT INTO barang VALUES("6","1","Holiday Party Dog Dress","Holiday Party Dog Dress","50000","0.05","50");
INSERT INTO barang VALUES("7","5","Petco wag-a-tude Camo Beanie","gambar/aksesoris8.jpg","35000","0","50");
INSERT INTO barang VALUES("8","4","Pe4ate Melamine Bowls Pink He","gambar/Pe4ate-Melamine-Bowl-Pink-Heart-25-ounces-99_1.jpg","30000","0","50");
INSERT INTO barang VALUES("9","6","Mid West Metal Product Co","gambar/Mid-West-Metal-Products-Co.-Quiet-Time-Fashion-Bed-2.jpg","150000","0.05","50");
INSERT INTO barang VALUES("10","6","Dog Gone Smart Bed Co Large Na","gambar/Dog-Gone-Smart-Bed-Co.-Smart-Bed-Rectangular-.jpg","200000","0.05","50");
INSERT INTO barang VALUES("11","1","Petco red & Gray Reversible Cozy Coat","gambar/baju10.jpg","65000","0","50");
INSERT INTO barang VALUES("12","2","Petco Smoochie Pooch Pearl Dog Hairbows","gambar/aksesoris9.jpg","20000","0","50");
INSERT INTO barang VALUES("13","1","Petco wag-a-tude Brown Leather Dog Jacket","gambar/baju 11.jpg","55000","0","50");
INSERT INTO barang VALUES("14","1","Petco Wag-a-tude Woof Dog Hoodie","gambar/baju 12.jpg","45000","0","50");
INSERT INTO barang VALUES("15","1","Petco Wag-a-tude Checkered Shearling Bomber Dog Ja","gambar/baju 13.jpg","65000","0","50");
INSERT INTO barang VALUES("16","1","Petco wag-a-tude Fuzzy Reindeer Hoodie","gambar/baju14.jpg","55000","0","50");
INSERT INTO barang VALUES("17","1","Petco Wag-a-tude black plaid Dog Hoodie","gambar/baju15.jpg","45000","0","50");
INSERT INTO barang VALUES("18","2","Petco Smoochie Pooch Pink Rhinestone Dog Hairbows","gambar/aksesoris1.jpg","25000","0","50");
INSERT INTO barang VALUES("19","2","Petco Holiday Light Up Dog Antlers","gambar/aksesori3.jpg","28000","0","50");
INSERT INTO barang VALUES("20","3","Petco Smoochie Pooch Leopard Faux Fur Dog Shoes","gambar/aksesoris6.jpg","70000","0","50");



DROP TABLE IF EXISTS detail_pembelian_barang;

CREATE TABLE `detail_pembelian_barang` (
  `id_nota_barang` char(8) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `harga_barang` double DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `kuantiti` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  KEY `id_nota_barang` (`id_nota_barang`),
  KEY `id_barang` (`id_barang`),
  CONSTRAINT `detail_pembelian_barang_ibfk_1` FOREIGN KEY (`id_nota_barang`) REFERENCES `transaksi_pembelian_barang` (`id_nota_barang`),
  CONSTRAINT `detail_pembelian_barang_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS detail_pembelian_hewan;

CREATE TABLE `detail_pembelian_hewan` (
  `id_nota_hewan` char(8) NOT NULL,
  `id_hewan` int(11) DEFAULT NULL,
  `harga_barang` double DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `kuantiti` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  KEY `id_nota_hewan` (`id_nota_hewan`),
  KEY `id_hewan` (`id_hewan`),
  CONSTRAINT `detail_pembelian_hewan_ibfk_1` FOREIGN KEY (`id_nota_hewan`) REFERENCES `transaksi_pembelian_hewan` (`id_nota_hewan`),
  CONSTRAINT `detail_pembelian_hewan_ibfk_2` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS detail_perawatan;

CREATE TABLE `detail_perawatan` (
  `id_detail_perawatan` int(11) NOT NULL AUTO_INCREMENT,
  `id_perawatan` int(11) NOT NULL,
  `id_kategori_hewan` int(11) NOT NULL,
  `harga_perawatan` double DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  PRIMARY KEY (`id_detail_perawatan`),
  KEY `id_perawatan` (`id_perawatan`),
  KEY `id_kategori_hewan` (`id_kategori_hewan`),
  CONSTRAINT `detail_perawatan_ibfk_1` FOREIGN KEY (`id_perawatan`) REFERENCES `perawatan` (`id_perawatan`),
  CONSTRAINT `detail_perawatan_ibfk_2` FOREIGN KEY (`id_kategori_hewan`) REFERENCES `kategori_hewan` (`id_kategori_hewan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO detail_perawatan VALUES("1","1","1","25000","0");
INSERT INTO detail_perawatan VALUES("2","1","3","20000","0");
INSERT INTO detail_perawatan VALUES("3","2","1","10000","0");
INSERT INTO detail_perawatan VALUES("4","2","3","10000","0");
INSERT INTO detail_perawatan VALUES("5","3","1","35000","0.05");
INSERT INTO detail_perawatan VALUES("6","3","3","32500","0.05");
INSERT INTO detail_perawatan VALUES("7","4","1","50000","0.05");
INSERT INTO detail_perawatan VALUES("8","4","3","50000","0.05");
INSERT INTO detail_perawatan VALUES("9","5","1","45000","0");
INSERT INTO detail_perawatan VALUES("10","5","3","45000","0.05");
INSERT INTO detail_perawatan VALUES("11","6","1","45000","0");



DROP TABLE IF EXISTS detail_transaksi_perawatan;

CREATE TABLE `detail_transaksi_perawatan` (
  `id_nota_perawatan` char(8) NOT NULL,
  `id_detail_perawatan` int(11) DEFAULT NULL,
  `harga_perawatan` double DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `kuantiti` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  KEY `id_nota_perawatan` (`id_nota_perawatan`),
  KEY `id_detail_perawatan` (`id_detail_perawatan`),
  CONSTRAINT `detail_transaksi_perawatan_ibfk_1` FOREIGN KEY (`id_nota_perawatan`) REFERENCES `transaksi_perawatan` (`id_nota_perawatan`),
  CONSTRAINT `detail_transaksi_perawatan_ibfk_2` FOREIGN KEY (`id_detail_perawatan`) REFERENCES `detail_perawatan` (`id_detail_perawatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS hewan;

CREATE TABLE `hewan` (
  `id_hewan` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori_hewan` int(11) NOT NULL,
  `nama_hewan` varchar(50) DEFAULT NULL,
  `direktori_gambar_hewan` varchar(100) DEFAULT NULL,
  `harga_hewan` double DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_hewan`),
  KEY `id_kategori_hewan` (`id_kategori_hewan`),
  CONSTRAINT `hewan_ibfk_1` FOREIGN KEY (`id_kategori_hewan`) REFERENCES `kategori_hewan` (`id_kategori_hewan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO hewan VALUES("1","1","Basenji","gambar/basenji.png","2500000","0.05","15");
INSERT INTO hewan VALUES("2","3","Munchkin","gambar/munchkin.jpg","1752500","0.05","15");
INSERT INTO hewan VALUES("3","3","Abyssinian","gambar/abyssinian.jpg","3200000","0.01","15");
INSERT INTO hewan VALUES("4","1","Doberman","gambar/doberman.jpg","5700000","0.07","15");
INSERT INTO hewan VALUES("5","3","Tiffany","gambar/kucing-tiffany.jpg","1500000","0","15");
INSERT INTO hewan VALUES("6","2","Roborovski","gambar/robo.jpg","50000","0","15");



DROP TABLE IF EXISTS kategori_barang;

CREATE TABLE `kategori_barang` (
  `id_kategori_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori_barang` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kategori_barang VALUES("1","Baju");
INSERT INTO kategori_barang VALUES("2","Pita");
INSERT INTO kategori_barang VALUES("3","Sepatu");
INSERT INTO kategori_barang VALUES("4","Tempat Makan");
INSERT INTO kategori_barang VALUES("5","Topi");
INSERT INTO kategori_barang VALUES("6","Tempat Tidur");



DROP TABLE IF EXISTS kategori_hewan;

CREATE TABLE `kategori_hewan` (
  `id_kategori_hewan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori_hewan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_hewan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kategori_hewan VALUES("1","Anjing");
INSERT INTO kategori_hewan VALUES("2","Hamster");
INSERT INTO kategori_hewan VALUES("3","Kucing");



DROP TABLE IF EXISTS perawatan;

CREATE TABLE `perawatan` (
  `id_perawatan` int(11) NOT NULL AUTO_INCREMENT,
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
  `no` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kode_pos` char(6) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS transaksi_pembelian_barang;

CREATE TABLE `transaksi_pembelian_barang` (
  `id_nota_barang` char(8) NOT NULL,
  `id_user` char(8) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_harga` double NOT NULL,
  PRIMARY KEY (`id_nota_barang`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `transaksi_pembelian_barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS transaksi_pembelian_hewan;

CREATE TABLE `transaksi_pembelian_hewan` (
  `id_nota_hewan` char(8) NOT NULL,
  `id_user` char(8) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_harga` double NOT NULL,
  PRIMARY KEY (`id_nota_hewan`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `transaksi_pembelian_hewan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS transaksi_perawatan;

CREATE TABLE `transaksi_perawatan` (
  `id_nota_perawatan` char(8) NOT NULL,
  `id_user` char(8) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_harga` double NOT NULL,
  PRIMARY KEY (`id_nota_perawatan`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `transaksi_perawatan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `id_user` char(8) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status_akses` char(8) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kode_pos` char(6) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("AD1","15744c1118c658c737f40b4a4f8b6a70","ADMIN","Wupi Ocktavia K","Kp.Tangkil RT 06 RW 07 NO 179 Cimahi","40522","P","1993-10-26","085721139139","wupi@ymail.com");
INSERT INTO user VALUES("M1","f11d50d63d3891a44c332e46d6d7d561","MEMBER","Fahmi Khaerul","Jl. Radio Cililin","40222","L","1993-08-27","085624567890","fahmi@yahoo.com");
INSERT INTO user VALUES("M2","faac762ff2fcaa4b3086ee397e991af8","MEMBER","Fani","pangandaran","41234","P","1993-06-20","083891234567","fani@gmail.com");
INSERT INTO user VALUES("M3","08edf068a77d4df4df723bd830de3398","MEMBER","Fahmi","cililin","40123","L","1993-08-27","08962944162","fahmikhaerul@gmail.com");
INSERT INTO user VALUES("M4","e4c74d5b8d66e9e53fcdf9f0a9fc2cd2","MEMBER","Devi","Soreang","40123","P","1992-09-28","08987654321","devi@ymail.co.id");
INSERT INTO user VALUES("M5","e0aafdd75c6b091a4153ea368b09ca91","MEMBER","Ria Ananda","Jakarta","4044","P","1993-02-18","08562456789","rianande@gmail.com");
INSERT INTO user VALUES("M6","809bdf3f15b4c34fb3410ad0d2f8319b","MEMBER","Lugas Bijak","Cimahi","40522","L","2002-01-05","08121456789","lugas@yahoo.co.id");
INSERT INTO user VALUES("PG1","ee61d621f12489791ce28b31409daee4","PEGAWAI","Stephanie Preselly","Jl. Melati 1 NO 4 Sadang Serang","40123","P","1993-06-20","083828384858","stephanie@gmail.com");
INSERT INTO user VALUES("PG2","7d49e40f4b3d8f68c19406a58303f826","PEGAWAI","Lucky","Sadang Serang","40521","L","1995-07-17","08987654321","dimas@yahoo.co.id");



