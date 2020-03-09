DROP TABLE makanan;

CREATE TABLE `makanan` (
  `idmakanan` int(2) NOT NULL AUTO_INCREMENT,
  `namamakanan` varchar(50) DEFAULT NULL,
  `harga` int(4) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `createdby` int(4) DEFAULT NULL,
  PRIMARY KEY (`idmakanan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO makanan VALUES("4","Lalapan Ayam","1111","makanan-20181105132955.jpg","2018-11-05 21:29:55","1");



DROP TABLE meja;

CREATE TABLE `meja` (
  `idmeja` int(2) NOT NULL AUTO_INCREMENT,
  `namameja` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdby` int(4) DEFAULT NULL,
  PRIMARY KEY (`idmeja`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO meja VALUES("1","Meja 1","2018-11-05 10:50:46","1");



DROP TABLE minuman;

CREATE TABLE `minuman` (
  `idminuman` int(2) NOT NULL AUTO_INCREMENT,
  `namaminuman` varchar(50) DEFAULT NULL,
  `harga` int(4) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `createdby` int(4) DEFAULT NULL,
  PRIMARY KEY (`idminuman`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO minuman VALUES("4","aaaa","11111","minuman-20181105132835.png","2018-11-05 21:28:35","1");



DROP TABLE pesanan;

CREATE TABLE `pesanan` (
  `idpesanan` int(4) NOT NULL AUTO_INCREMENT,
  `meja_idmeja` int(2) NOT NULL,
  `tanggal` date NOT NULL,
  `namapesanan` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `status` enum('baru','proses','selesai','') NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`idpesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE users;

CREATE TABLE `users` (
  `idusers` int(2) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdby` int(4) DEFAULT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO users VALUES("1","Administrator","admin","admin","2018-11-01 00:00:00","1");
INSERT INTO users VALUES("2","Papua Code","user","user","2018-11-05 21:51:50","1");



