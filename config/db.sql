CREATE DATABASE IF NOT EXISTS `db_beasiswa`;

USE `db_beasiswa`;

CREATE TABLE IF NOT EXISTS `pendaftar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `semester` int NOT NULL,
  `ipk` decimal(3,2) NOT NULL,
  `pilihan_beasiswa` varchar(64) NOT NULL,
  `berkas` varchar(64) NOT NULL,
  `status_ajuan` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
);

INSERT INTO `pendaftar` 
(`id`,`email`, `nama`, `no_hp`, `nim`, `semester`, `ipk`, `pilihan_beasiswa`, `berkas`, `status_ajuan`) 
VALUES
( 1, '2243010@wicida.ac.id', 'Daniel', '081234567890','2243010', 3, 3.55, 'Beasiswa Prestasi', 'berkas.pdf', 0);