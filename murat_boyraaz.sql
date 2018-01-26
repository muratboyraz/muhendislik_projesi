# Host: localhost  (Version 5.5.5-10.1.28-MariaDB)
# Date: 2018-01-26 14:26:33
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "ogrenci"
#

DROP TABLE IF EXISTS `ogrenci`;
CREATE TABLE `ogrenci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `fakulte` int(11) NOT NULL,
  `bolum` int(11) NOT NULL,
  `kayit_tarihi` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "ogrenci"
#

