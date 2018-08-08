/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.19-MariaDB : Database - db_skkni
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_skkni` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_skkni`;

/*Table structure for table `tbl_peserta` */

DROP TABLE IF EXISTS `tbl_peserta`;

CREATE TABLE `tbl_peserta` (
  `nama` varchar(50) DEFAULT NULL,
  `nik` int(15) NOT NULL,
  `hp` int(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `skema` varchar(50) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `rekomendasi` varchar(50) DEFAULT NULL,
  `tgl_sertifikat` date DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `organisasi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_peserta` */

insert  into `tbl_peserta`(`nama`,`nik`,`hp`,`email`,`skema`,`tempat`,`rekomendasi`,`tgl_sertifikat`,`tgl_lhr`,`organisasi`) values (NULL,45,NULL,NULL,NULL,NULL,NULL,NULL,'2018-08-07',NULL),('4535',55,0,'','--PILIH SKEMA SERTIFIKASI--','--PILIH TEMPAT UJI KOMPETENSI--','','0000-00-00','2018-08-07',''),('fg',67,9,'ewy@gmail.com','Networking Administrator Madya','Kominfo jambi 8 Agustus 2018','andnm','2018-07-18','2018-08-07','STMIK Nurdin Hamzah');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
