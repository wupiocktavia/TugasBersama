DROP TABLE IF EXISTS barang;

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
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
INSERT INTO barang VALUES("3","1","Chelsea Jersey","gambar/baju 1.jpg","75000","0.1","49");
INSERT INTO barang VALUES("4","1","Star Wars Yoda Dog T-Shirt","gambar/baju9.jpg","55000","0","49");
INSERT INTO barang VALUES("5","1","Petco Smoochie Pooch Pink Polk","gambar/baju2.jpg","45000","0","49");
INSERT INTO barang VALUES("6","1","Holiday Party Dog Dress","gambar/baju3.jpg","50000","0.05","49");
INSERT INTO barang VALUES("7","5","Petco wag-a-tude Camo Beanie","gambar/aksesoris8.jpg","35000","0","50");
INSERT INTO barang VALUES("8","4","Pe4ate Melamine Bowls Pink He","gambar/petmate.jpg","30000","0","49");
INSERT INTO barang VALUES("9","6","Mid West Metal Product Co","gambar/Mid-West-Metal-Products-Co.-Quiet-Time-Fashion-Bed-2.jpg","150000","0.05","49");
INSERT INTO barang VALUES("10","6","Dog Gone Smart Bed Co Large Na","gambar/Dog-Gone-Smart-Bed-Co.-Smart-Bed-Rectangular-.jpg","200000","0.05","48");
INSERT INTO barang VALUES("11","1","Petco red & Gray Reversible Cozy Coat","gambar/baju10.jpg","65000","0","49");
INSERT INTO barang VALUES("12","2","Petco Smoochie Pooch Pearl Dog Hairbows","gambar/aksesoris9.jpg","20000","0","50");
INSERT INTO barang VALUES("13","1","Petco wag-a-tude Brown Leather Dog Jacket","gambar/baju 11.jpg","55000","0","50");
INSERT INTO barang VALUES("14","1","Petco Wag-a-tude Woof Dog Hoodie","gambar/baju 12.jpg","45000","0","48");
INSERT INTO barang VALUES("15","1","Petco Wag-a-tude Checkered Shearling Bomber Dog Ja","gambar/baju 13.jpg","65000","0","50");
INSERT INTO barang VALUES("16","1","Petco wag-a-tude Fuzzy Reindeer Hoodie","gambar/baju14.jpg","55000","0","50");
INSERT INTO barang VALUES("17","1","Petco Wag-a-tude black plaid Dog Hoodie","gambar/baju15.jpg","45000","0","50");
INSERT INTO barang VALUES("18","2","Petco Smoochie Pooch Pink Rhinestone Dog Hairbows","gambar/aksesoris1.jpg","25000","0","48");
INSERT INTO barang VALUES("19","2","Petco Holiday Light Up Dog Antlers","gambar/aksesoris2.jpg","28000","0","50");
INSERT INTO barang VALUES("20","3","Petco Smoochie Pooch Leopard Faux Fur Dog Shoes","gambar/aksesoris6.jpg","70000","0","49");
INSERT INTO barang VALUES("21","1","Petco wag-a-tude Sequin Santa Dog Haress&Hat","gambar/baju7_2.jpg","40000","0","50");
INSERT INTO barang VALUES("22","6","Elephant Bed","gambar/tempat tidur 1_2.jpg","300000","0.05","50");
INSERT INTO barang VALUES("23","1","Santa Clause","gambar/baju17.jpg","65000","0.05","50");
INSERT INTO barang VALUES("24","3","Pink Shoes","gambar/aksesoris5.jpg","120000","0.05","50");



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

INSERT INTO detail_pembelian_barang VALUES("NT1","10","200000","0.05","1","190000");
INSERT INTO detail_pembelian_barang VALUES("NT2","5","45000","0","1","45000");
INSERT INTO detail_pembelian_barang VALUES("NT3","3","75000","0.1","1","67500");
INSERT INTO detail_pembelian_barang VALUES("NT3","4","55000","0","1","55000");
INSERT INTO detail_pembelian_barang VALUES("NT4","6","50000","0.05","1","47500");
INSERT INTO detail_pembelian_barang VALUES("NT4","8","30000","0","1","30000");
INSERT INTO detail_pembelian_barang VALUES("NT5","20","70000","0","1","70000");
INSERT INTO detail_pembelian_barang VALUES("NT5","14","45000","0","2","90000");
INSERT INTO detail_pembelian_barang VALUES("NT5","9","150000","0.05","1","142500");
INSERT INTO detail_pembelian_barang VALUES("NT6","18","25000","0","2","50000");
INSERT INTO detail_pembelian_barang VALUES("NT6","11","65000","0","1","65000");
INSERT INTO detail_pembelian_barang VALUES("NT6","10","200000","0.05","1","190000");



DROP TABLE IF EXISTS detail_pembelian_hewan;

CREATE TABLE `detail_pembelian_hewan` (
  `id_nota_hewan` char(8) NOT NULL,
  `id_hewan` int(11) DEFAULT NULL,
  `harga_hewan` double DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `kuantiti` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  KEY `id_nota_hewan` (`id_nota_hewan`),
  KEY `id_hewan` (`id_hewan`),
  CONSTRAINT `detail_pembelian_hewan_ibfk_1` FOREIGN KEY (`id_nota_hewan`) REFERENCES `transaksi_pembelian_hewan` (`id_nota_hewan`),
  CONSTRAINT `detail_pembelian_hewan_ibfk_2` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO detail_pembelian_hewan VALUES("NH1","3","3200000","0.1","1","2980000");
INSERT INTO detail_pembelian_hewan VALUES("NH1","6","50000","0","2","100000");
INSERT INTO detail_pembelian_hewan VALUES("NH2","1","2500000","0.05","1","2375000");
INSERT INTO detail_pembelian_hewan VALUES("NH3","6","50000","0","4","200000");
INSERT INTO detail_pembelian_hewan VALUES("NH4","3","3200000","0.1","1","2880000");
INSERT INTO detail_pembelian_hewan VALUES("NH5","2","1752500","0.05","1","1664875");
INSERT INTO detail_pembelian_hewan VALUES("NH6","6","50000","0","1","50000");



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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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

INSERT INTO detail_transaksi_perawatan VALUES("NP1","1","25000","0","1","25000");
INSERT INTO detail_transaksi_perawatan VALUES("NP1","5","35000","0.05","1","33250");
INSERT INTO detail_transaksi_perawatan VALUES("NP2","8","50000","0.05","1","47500");
INSERT INTO detail_transaksi_perawatan VALUES("NP3","11","45000","0","1","45000");
INSERT INTO detail_transaksi_perawatan VALUES("NP3","1","25000","0","1","25000");
INSERT INTO detail_transaksi_perawatan VALUES("NP4","6","32500","0.05","1","30875");
INSERT INTO detail_transaksi_perawatan VALUES("NP5","2","20000","0","1","20000");
INSERT INTO detail_transaksi_perawatan VALUES("NP5","4","10000","0","1","10000");



DROP TABLE IF EXISTS hewan;

CREATE TABLE `hewan` (
  `id_hewan` int(11) NOT NULL,
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
INSERT INTO hewan VALUES("2","3","Munchkin","gambar/munchkin.jpg","1752500","0.05","14");
INSERT INTO hewan VALUES("3","3","Abyssinian","gambar/abyssinian.jpg","3200000","0.1","14");
INSERT INTO hewan VALUES("4","1","Doberman","gambar/doberman.jpg","5700000","0.07","15");
INSERT INTO hewan VALUES("5","3","Tiffany","gambar/kucing-tiffany.jpg","1500000","0","15");
INSERT INTO hewan VALUES("6","2","Roborovski","gambar/robo.jpg","50000","0","49");



DROP TABLE IF EXISTS kategori_barang;

CREATE TABLE `kategori_barang` (
  `id_kategori_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori_barang` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO kategori_barang VALUES("1","Baju");
INSERT INTO kategori_barang VALUES("2","Pita");
INSERT INTO kategori_barang VALUES("3","Sepatu");
INSERT INTO kategori_barang VALUES("4","Tempat Makan");
INSERT INTO kategori_barang VALUES("5","Topi");
INSERT INTO kategori_barang VALUES("6","Tempat Tidur");
INSERT INTO kategori_barang VALUES("7","Serokan");



DROP TABLE IF EXISTS kategori_hewan;

CREATE TABLE `kategori_hewan` (
  `id_kategori_hewan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori_hewan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_hewan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO kategori_hewan VALUES("1","Anjing");
INSERT INTO kategori_hewan VALUES("2","Hamster");
INSERT INTO kategori_hewan VALUES("3","Kucing");
INSERT INTO kategori_hewan VALUES("4","Unggas");



DROP TABLE IF EXISTS perawatan;

CREATE TABLE `perawatan` (
  `id_perawatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perawatan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_perawatan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO perawatan VALUES("1","Mandi");
INSERT INTO perawatan VALUES("2","Potong Kuku");
INSERT INTO perawatan VALUES("3","Cukur");
INSERT INTO perawatan VALUES("4","Pijat");
INSERT INTO perawatan VALUES("5","Salon");
INSERT INTO perawatan VALUES("6","Renang");



DROP TABLE IF EXISTS temp;

CREATE TABLE `temp` (
  `no` int(11) NOT NULL,
  `nama_lengkap` varchar(30) DEFAULT '',
  `password` varchar(50) DEFAULT '',
  `alamat` varchar(50) DEFAULT '',
  `kode_pos` char(6) DEFAULT '',
  `jk` enum('L','P') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT '',
  `email` varchar(50) DEFAULT '',
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO temp VALUES("8","Wupi Ocktavia","482d087d46429d295c32591a6fc38d91","Cigugur Tengah Cimahi","40522","P","1993-10-26","085721212121","wupiocktavia@yahoo.com");



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

INSERT INTO transaksi_pembelian_barang VALUES("NT1","M7","2014-01-05","190000");
INSERT INTO transaksi_pembelian_barang VALUES("NT2","M1","2014-01-05","45000");
INSERT INTO transaksi_pembelian_barang VALUES("NT3","M2","2014-01-05","122500");
INSERT INTO transaksi_pembelian_barang VALUES("NT4","M5","2014-01-05","77500");
INSERT INTO transaksi_pembelian_barang VALUES("NT5","M7","2014-01-05","302500");
INSERT INTO transaksi_pembelian_barang VALUES("NT6","M7","2014-01-08","305000");



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

INSERT INTO transaksi_pembelian_hewan VALUES("NH1","M7","2014-01-05","3080000");
INSERT INTO transaksi_pembelian_hewan VALUES("NH2","M2","2014-01-05","2375000");
INSERT INTO transaksi_pembelian_hewan VALUES("NH3","M4","2014-01-06","200000");
INSERT INTO transaksi_pembelian_hewan VALUES("NH4","M1","2014-01-16","2880000");
INSERT INTO transaksi_pembelian_hewan VALUES("NH5","M2","2014-01-16","1664875");
INSERT INTO transaksi_pembelian_hewan VALUES("NH6","M6","2014-01-16","50000");



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

INSERT INTO transaksi_perawatan VALUES("NP1","M2","2014-01-05","58250");
INSERT INTO transaksi_perawatan VALUES("NP2","M4","2014-01-05","47500");
INSERT INTO transaksi_perawatan VALUES("NP3","M1","2014-01-06","70000");
INSERT INTO transaksi_perawatan VALUES("NP4","M4","2014-01-06","30875");
INSERT INTO transaksi_perawatan VALUES("NP5","M7","2014-01-17","30000");



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
INSERT INTO user VALUES("M3","4093fed663717c843bea100d17fb67c8","MEMBER","Putri","Jakarta","40567","P","1993-11-26","087812345678","putri@yahoo.com");
INSERT INTO user VALUES("M4","e4c74d5b8d66e9e53fcdf9f0a9fc2cd2","MEMBER","Devi","Soreang","40123","P","1992-09-28","08987654321","devi@ymail.co.id");
INSERT INTO user VALUES("M5","e0aafdd75c6b091a4153ea368b09ca91","MEMBER","Ria Ananda","Jakarta","4044","P","1993-02-18","08562456789","rianande@gmail.com");
INSERT INTO user VALUES("M6","809bdf3f15b4c34fb3410ad0d2f8319b","MEMBER","Lugas Bijak","Cimahi","40522","L","2002-01-05","08121456789","lugas@yahoo.co.id");
INSERT INTO user VALUES("M7","6a8fa9e86a7cbedf0571ad87cffc7b89","MEMBER","Wupi","Cimahi","40522","P","1993-10-26","085721212121","wupi@yahoo.com");
INSERT INTO user VALUES("PG1","ee61d621f12489791ce28b31409daee4","PEGAWAI","Stephanie Preselly","Jl. Melati 1 Sadang Serang Bandung","40123","P","1993-06-20","083828384858","stephanie@gmail.com");
INSERT INTO user VALUES("PG2","7d49e40f4b3d8f68c19406a58303f826","PEGAWAI","Lucky","Sadang Serang","40521","L","1995-07-17","08987654321","lucky@yahoo.co.id");
INSERT INTO user VALUES("PG3","98db0b07bba92340ab23fdde110814c1","PEGAWAI","Upi Kharismawati","cimahi","40522","P","1993-10-26","089662944123","upi@gmail.com");
INSERT INTO user VALUES("PG4","87ebbb2d964c28cdc1fb72a598502d3e","PEGAWAI","Danova Agni Lestari","Sadang Serang","40512","P","1980-01-01","081221221221","danov@ymail.co.id");



