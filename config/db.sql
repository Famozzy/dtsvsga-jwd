CREATE TABLE IF NOT EXISTS `pendaftar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `semester` int NOT NULL,
  `ipk` decimal(3,1) NOT NULL,
  `pilihan_beasiswa` varchar(64) NOT NULL,
  `berkas` LONGBLOB NOT NULL,
  `status_ajuan` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
)
