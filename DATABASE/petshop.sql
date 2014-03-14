/*
SQLyog Community v8.32 
MySQL - 5.1.36-community-log : Database - petshop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`petshop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `petshop`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

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

/*Data for the table `barang` */

insert  into `barang`(`id_barang`,`id_kategori_barang`,`nama_barang`,`direktori_gambar_barang`,`harga_barang`,`diskon`,`stok`) values (1,1,'Arsenal Jersey','gambar/baju 2.jpg',70000,0.1,50),(2,1,'Bwin Jersey','gambar/baju 3.jpg',75000,0.1,50),(3,1,'Chelsea Jersey','gambar/baju 1.jpg',75000,0.05,60),(4,1,'Star Wars Yoda Dog T-Shirt','gambar/baju9.jpg',55000,0,49),(5,1,'Petco Smoochie Pooch Pink Polk','gambar/baju2.jpg',45000,0,49),(6,1,'Holiday Party Dog Dress','gambar/baju3.jpg',50000,0.05,49),(7,5,'Petco wag-a-tude Camo Beanie','gambar/aksesoris8.jpg',35000,0,50),(8,4,'Pe4ate Melamine Bowls Pink He','gambar/petmate.jpg',30000,0,49),(9,6,'Mid West Metal Product Co','gambar/Mid-West-Metal-Products-Co.-Quiet-Time-Fashion-Bed-2.jpg',150000,0.05,49),(10,6,'Dog Gone Smart Bed Co Large Na','gambar/Dog-Gone-Smart-Bed-Co.-Smart-Bed-Rectangular-.jpg',200000,0.05,48),(11,1,'Petco red & Gray Reversible Cozy Coat','gambar/baju10.jpg',65000,0,49),(12,2,'Petco Smoochie Pooch Pearl Dog Hairbows','gambar/aksesoris9.jpg',20000,0,50),(13,1,'Petco wag-a-tude Brown Leather Dog Jacket','gambar/baju 11.jpg',55000,0,50),(14,1,'Petco Wag-a-tude Woof Dog Hoodie','gambar/baju 12.jpg',45000,0,48),(15,1,'Petco Wag-a-tude Checkered Shearling Bomber Dog Ja','gambar/baju 13.jpg',65000,0,50),(16,1,'Petco wag-a-tude Fuzzy Reindeer Hoodie','gambar/baju14.jpg',55000,0,50),(17,1,'Petco Wag-a-tude black plaid Dog Hoodie','gambar/baju15.jpg',45000,0,50),(18,2,'Petco Smoochie Pooch Pink Rhinestone Dog Hairbows','gambar/aksesoris1.jpg',25000,0,48),(19,2,'Petco Holiday Light Up Dog Antlers','gambar/aksesoris2.jpg',28000,0,50),(20,3,'Petco Smoochie Pooch Leopard Faux Fur Dog Shoes','gambar/aksesoris6.jpg',70000,0,49),(21,1,'Petco wag-a-tude Sequin Santa Dog Haress&Hat','gambar/baju7_2.jpg',40000,0,50),(22,6,'Elephant Bed','gambar/tempat tidur 1_2.jpg',300000,0.05,50),(23,1,'Santa Clause','gambar/baju17.jpg',65000,0.05,50),(24,3,'Pink Shoes','gambar/aksesoris5.jpg',120000,0.05,50);

/*Table structure for table `detail_pembelian_barang` */

DROP TABLE IF EXISTS `detail_pembelian_barang`;

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

/*Data for the table `detail_pembelian_barang` */

insert  into `detail_pembelian_barang`(`id_nota_barang`,`id_barang`,`harga_barang`,`diskon`,`kuantiti`,`subtotal`) values ('NT1',10,200000,0.05,1,190000),('NT2',5,45000,0,1,45000),('NT3',3,75000,0.1,1,67500),('NT3',4,55000,0,1,55000),('NT4',6,50000,0.05,1,47500),('NT4',8,30000,0,1,30000),('NT5',20,70000,0,1,70000),('NT5',14,45000,0,2,90000),('NT5',9,150000,0.05,1,142500),('NT6',18,25000,0,2,50000),('NT6',11,65000,0,1,65000),('NT6',10,200000,0.05,1,190000);

/*Table structure for table `detail_pembelian_hewan` */

DROP TABLE IF EXISTS `detail_pembelian_hewan`;

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

/*Data for the table `detail_pembelian_hewan` */

insert  into `detail_pembelian_hewan`(`id_nota_hewan`,`id_hewan`,`harga_hewan`,`diskon`,`kuantiti`,`subtotal`) values ('NH1',3,3200000,0.1,1,2980000),('NH1',6,50000,0,2,100000),('NH2',1,2500000,0.05,1,2375000),('NH3',6,50000,0,4,200000),('NH4',3,3200000,0.1,1,2880000),('NH5',2,1752500,0.05,1,1664875),('NH6',6,50000,0,1,50000);

/*Table structure for table `detail_perawatan` */

DROP TABLE IF EXISTS `detail_perawatan`;

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `detail_perawatan` */

insert  into `detail_perawatan`(`id_detail_perawatan`,`id_perawatan`,`id_kategori_hewan`,`harga_perawatan`,`diskon`) values (1,1,1,25000,0),(2,1,3,20000,0),(3,2,1,10000,0),(4,2,3,10000,0),(5,3,1,35000,0.05),(6,3,3,32500,0.05),(7,4,1,50000,0.05),(8,4,3,50000,0.05),(9,5,1,45000,0),(10,5,3,45000,0.05),(11,6,1,45000,0);

/*Table structure for table `detail_transaksi_perawatan` */

DROP TABLE IF EXISTS `detail_transaksi_perawatan`;

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

/*Data for the table `detail_transaksi_perawatan` */

insert  into `detail_transaksi_perawatan`(`id_nota_perawatan`,`id_detail_perawatan`,`harga_perawatan`,`diskon`,`kuantiti`,`subtotal`) values ('NP1',1,25000,0,1,25000),('NP1',5,35000,0.05,1,33250),('NP2',8,50000,0.05,1,47500),('NP3',11,45000,0,1,45000),('NP3',1,25000,0,1,25000),('NP4',6,32500,0.05,1,30875),('NP5',2,20000,0,1,20000),('NP5',4,10000,0,1,10000),('NP6',1,25000,0,1,25000);

/*Table structure for table `hewan` */

DROP TABLE IF EXISTS `hewan`;

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

/*Data for the table `hewan` */

insert  into `hewan`(`id_hewan`,`id_kategori_hewan`,`nama_hewan`,`direktori_gambar_hewan`,`harga_hewan`,`diskon`,`stok`) values (1,1,'Basenji','gambar/basenji.png',2500000,0.05,15),(2,3,'Munchkin','gambar/munchkin.jpg',1752500,0.05,14),(3,3,'Abyssinian','gambar/abyssinian.jpg',3200000,0.1,14),(4,1,'Doberman','gambar/doberman.jpg',5700000,0.07,15),(5,3,'Tiffany','gambar/kucing-tiffany.jpg',1500000,0,20),(6,2,'Roborovski','gambar/robo.jpg',50000,0,49);

/*Table structure for table `kategori_barang` */

DROP TABLE IF EXISTS `kategori_barang`;

CREATE TABLE `kategori_barang` (
  `id_kategori_barang` int(11) NOT NULL,
  `nama_kategori_barang` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori_barang` */

insert  into `kategori_barang`(`id_kategori_barang`,`nama_kategori_barang`) values (1,'Baju'),(2,'Pita'),(3,'Sepatu'),(4,'Tempat Makan'),(5,'Topi'),(6,'Tempat Tidur'),(7,'Serokan'),(8,'Shampo');

/*Table structure for table `kategori_hewan` */

DROP TABLE IF EXISTS `kategori_hewan`;

CREATE TABLE `kategori_hewan` (
  `id_kategori_hewan` int(11) NOT NULL,
  `nama_kategori_hewan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_hewan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori_hewan` */

insert  into `kategori_hewan`(`id_kategori_hewan`,`nama_kategori_hewan`) values (1,'Anjing'),(2,'Hamster'),(3,'Kucing'),(4,'Unggas'),(5,'Kelinci');

/*Table structure for table `perawatan` */

DROP TABLE IF EXISTS `perawatan`;

CREATE TABLE `perawatan` (
  `id_perawatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perawatan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_perawatan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `perawatan` */

insert  into `perawatan`(`id_perawatan`,`nama_perawatan`) values (1,'Mandi'),(2,'Potong Kuku'),(3,'Cukur'),(4,'Pijat'),(5,'Salon'),(6,'Renang'),(7,'Warna Bulu');

/*Table structure for table `temp` */

DROP TABLE IF EXISTS `temp`;

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

/*Data for the table `temp` */

insert  into `temp`(`no`,`nama_lengkap`,`password`,`alamat`,`kode_pos`,`jk`,`tgl_lahir`,`no_telp`,`email`) values (8,'Wupi Ocktavia','482d087d46429d295c32591a6fc38d91','Cigugur Tengah Cimahi','40522','P','1993-10-26','085721212121','wupiocktavia@yahoo.com');

/*Table structure for table `transaksi_pembelian_barang` */

DROP TABLE IF EXISTS `transaksi_pembelian_barang`;

CREATE TABLE `transaksi_pembelian_barang` (
  `id_nota_barang` char(8) NOT NULL,
  `id_user` char(8) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_harga` double NOT NULL,
  PRIMARY KEY (`id_nota_barang`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `transaksi_pembelian_barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi_pembelian_barang` */

insert  into `transaksi_pembelian_barang`(`id_nota_barang`,`id_user`,`tgl_transaksi`,`total_harga`) values ('NT1','M7','2014-01-05',190000),('NT2','M1','2014-01-05',45000),('NT3','M2','2014-01-05',122500),('NT4','M5','2014-01-05',77500),('NT5','M7','2014-01-05',302500),('NT6','M7','2014-01-08',305000);

/*Table structure for table `transaksi_pembelian_hewan` */

DROP TABLE IF EXISTS `transaksi_pembelian_hewan`;

CREATE TABLE `transaksi_pembelian_hewan` (
  `id_nota_hewan` char(8) NOT NULL,
  `id_user` char(8) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_harga` double NOT NULL,
  PRIMARY KEY (`id_nota_hewan`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `transaksi_pembelian_hewan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi_pembelian_hewan` */

insert  into `transaksi_pembelian_hewan`(`id_nota_hewan`,`id_user`,`tgl_transaksi`,`total_harga`) values ('NH1','M7','2014-01-05',3080000),('NH2','M2','2014-01-05',2375000),('NH3','M4','2014-01-06',200000),('NH4','M1','2014-01-16',2880000),('NH5','M2','2014-01-16',1664875),('NH6','M6','2014-01-16',50000);

/*Table structure for table `transaksi_perawatan` */

DROP TABLE IF EXISTS `transaksi_perawatan`;

CREATE TABLE `transaksi_perawatan` (
  `id_nota_perawatan` char(8) NOT NULL,
  `id_user` char(8) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_harga` double NOT NULL,
  PRIMARY KEY (`id_nota_perawatan`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `transaksi_perawatan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi_perawatan` */

insert  into `transaksi_perawatan`(`id_nota_perawatan`,`id_user`,`tgl_transaksi`,`total_harga`) values ('NP1','M2','2014-01-05',58250),('NP2','M4','2014-01-05',47500),('NP3','M1','2014-01-06',70000),('NP4','M4','2014-01-06',30875),('NP5','M7','2014-01-17',30000),('NP6','M2','2014-01-17',25000);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

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

/*Data for the table `user` */

insert  into `user`(`id_user`,`password`,`status_akses`,`nama_lengkap`,`alamat`,`kode_pos`,`jk`,`tgl_lahir`,`no_telp`,`email`) values ('AD1','15744c1118c658c737f40b4a4f8b6a70','ADMIN','Wupi Ocktavia K','Kp.Tangkil RT 06 RW 07 NO 179 Cimahi','40522','P','1993-10-26','085721139139','wupi@ymail.com'),('M1','f11d50d63d3891a44c332e46d6d7d561','MEMBER','Fahmi Khaerul','Jl. Radio Cililin','40222','L','1993-08-27','085624567890','fahmi@yahoo.com'),('M2','faac762ff2fcaa4b3086ee397e991af8','MEMBER','Fani','pangandaran','41234','P','1993-06-20','083891234567','fani@gmail.com'),('M3','4093fed663717c843bea100d17fb67c8','MEMBER','Putri','Jakarta','40567','P','1993-11-26','087812345678','putri@yahoo.com'),('M4','e4c74d5b8d66e9e53fcdf9f0a9fc2cd2','MEMBER','Devi','Soreang','40123','P','1992-09-28','08987654321','devi@ymail.co.id'),('M5','e0aafdd75c6b091a4153ea368b09ca91','MEMBER','Ria Ananda','Jakarta','4044','P','1993-02-18','08562456789','rianande@gmail.com'),('M6','809bdf3f15b4c34fb3410ad0d2f8319b','MEMBER','Lugas Bijak','Cimahi','40522','L','2002-01-05','08121456789','lugas@yahoo.co.id'),('M7','6a8fa9e86a7cbedf0571ad87cffc7b89','MEMBER','Wupi','Cimahi','40522','P','1993-10-26','085721212121','wupi@yahoo.com'),('PG1','ee61d621f12489791ce28b31409daee4','PEGAWAI','Stephanie Preselly','Jl. Melati 1 Sadang Serang Bandung','40123','P','1993-06-20','083828384858','stephanie@gmail.com'),('PG2','7d49e40f4b3d8f68c19406a58303f826','PEGAWAI','Lucky','Sadang Serang','40521','L','1995-07-17','08987654321','lucky@yahoo.co.id'),('PG3','98db0b07bba92340ab23fdde110814c1','PEGAWAI','Upi Kharismawati','cimahi','40522','P','1993-10-26','089662944123','upi@gmail.com'),('PG4','87ebbb2d964c28cdc1fb72a598502d3e','PEGAWAI','Danova Agni Lestari','Sadang Serang','40512','P','1980-01-01','081221221221','danov@ymail.co.id');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
