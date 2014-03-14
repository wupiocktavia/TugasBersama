CREATE DATABASE petshop;
USE petshop;

CREATE TABLE user
(
	id_user char(8) not null,
	password varchar(50) not null,
	status_akses char(8) not null,
	nama_lengkap varchar(30) not null,
	alamat varchar(50) not null,
	kode_pos char(6) not null,
	jk enum('L','P') not null,
	tgl_lahir date,
	no_telp varchar(12) not null,
	email varchar(50) not null,
	PRIMARY KEY (id_user)
)
ENGINE=InnoDb;

CREATE TABLE transaksi_pembelian_barang
(
	id_nota_barang char(8) not null,
	id_user char(8) not null,
	tgl_transaksi date not null,
	total_harga double not null,
	PRIMARY KEY (id_nota_barang),
	FOREIGN KEY (id_user) REFERENCES user(id_user) ON DELETE RESTRICT ON UPDATE CASCADE	
)
ENGINE=InnoDb;

CREATE TABLE kategori_barang
(
	id_kategori_barang int auto_increment not null,
	nama_kategori_barang varchar(20),
	PRIMARY KEY (id_kategori_barang)
)
ENGINE=InnoDb;

CREATE TABLE barang
(
		id_barang int auto_increment not null,
		id_kategori_barang int not null,
		nama_barang varchar(50),
		direktori_gambar_barang varchar(100),
		harga_barang double,
		diskon float,
		stok int,
		PRIMARY KEY (id_barang),
		FOREIGN KEY (id_kategori_barang) REFERENCES kategori_barang (id_kategori_barang)
)
ENGINE=InnoDb;

CREATE TABLE detail_pembelian_barang
(
	id_nota_barang char(8) not null,
	id_barang int,
	harga_barang double,
	diskon float,
	kuantiti int,
	subtotal double,
	FOREIGN KEY (id_nota_barang) REFERENCES transaksi_pembelian_barang (id_nota_barang),
	FOREIGN KEY (id_barang) REFERENCES barang (id_barang) ON DELETE RESTRICT ON UPDATE CASCADE
) 
ENGINE=InnoDb;

CREATE TABLE transaksi_pembelian_hewan
(
	id_nota_hewan char(8) not null,
	id_user char(8) not null,
	tgl_transaksi date not null,
	total_harga double not null,
	PRIMARY KEY (id_nota_hewan),
	FOREIGN KEY (id_user) REFERENCES user(id_user) ON DELETE RESTRICT ON UPDATE CASCADE	
)
ENGINE=InnoDb;

CREATE TABLE kategori_hewan
(
	id_kategori_hewan INT AUTO_INCREMENT not null,
	nama_kategori_hewan varchar(20),
	PRIMARY KEY (id_kategori_hewan)
)
ENGINE=InnoDb;

CREATE TABLE hewan
(
		id_hewan int auto_increment not null,
		id_kategori_hewan int not null,
		nama_hewan varchar(50),
		direktori_gambar_hewan varchar(100),
		harga_hewan double,
		diskon float,
		stok int,
		PRIMARY KEY (id_hewan),
		FOREIGN KEY (id_kategori_hewan) REFERENCES kategori_hewan (id_kategori_hewan)
)
ENGINE=InnoDb;

CREATE TABLE detail_pembelian_hewan
(
	id_nota_hewan char(8) not null,
	id_hewan int,
	harga_barang double,
	diskon float,
	kuantiti int,
	subtotal double,
	FOREIGN KEY (id_nota_hewan) REFERENCES transaksi_pembelian_hewan (id_nota_hewan),
	FOREIGN KEY (id_hewan) REFERENCES hewan (id_hewan) ON DELETE RESTRICT ON UPDATE CASCADE
) 
ENGINE=InnoDb;

CREATE TABLE transaksi_perawatan
(
	id_nota_perawatan char(8) not null,
	id_user char(8) not null,
	tgl_transaksi date not null,
	total_harga double not null,
	PRIMARY KEY (id_nota_perawatan),
	FOREIGN KEY (id_user) REFERENCES user(id_user) ON DELETE RESTRICT ON UPDATE CASCADE	
)
ENGINE=InnoDb;

CREATE TABLE perawatan
(
	id_perawatan int auto_increment not null,
	nama_perawatan varchar(20),
	PRIMARY KEY (id_perawatan)
)
ENGINE=InnoDb;

CREATE TABLE detail_perawatan
(
	id_detail_perawatan int not null,
	id_perawatan int not null,
	id_kategori_hewan int not null,
	harga_perawatan double,
	diskon float,
	PRIMARY KEY (id_detail_perawatan),
	FOREIGN KEY (id_perawatan) REFERENCES perawatan (id_perawatan) ,
	FOREIGN KEY (id_kategori_hewan) REFERENCES kategori_hewan (id_kategori_hewan)
)
ENGINE=InnoDb;

CREATE TABLE detail_transaksi_perawatan
(
	id_nota_perawatan char(8) not null,
	id_detail_perawatan int ,
	harga_perawatan double,
	diskon float,
	kuantiti int,
	subtotal double,
	FOREIGN KEY (id_nota_perawatan) REFERENCES transaksi_perawatan (id_nota_perawatan),
	FOREIGN KEY (id_detail_perawatan) REFERENCES detail_perawatan (id_detail_perawatan)
) 
ENGINE=InnoDb;