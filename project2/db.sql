CREATE TABLE `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(32) DEFAULT NULL,
  `pengarang` varchar(32) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
  `email` varchar(32) NOT NULL,
  `pass` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`email`)
);

INSERT INTO `users` VALUES ('admin@dot.com', 'admin');

