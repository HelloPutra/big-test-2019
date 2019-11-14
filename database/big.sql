/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - db_big
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_big` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_big`;

/*Table structure for table `tb_komoditas` */

DROP TABLE IF EXISTS `tb_komoditas`;

CREATE TABLE `tb_komoditas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengelola` int(11) NOT NULL,
  `id_konfirmasi` int(11) DEFAULT NULL,
  `nama_komoditas` varchar(255) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `tanggal` date NOT NULL,
  `konfirmasi` enum('YES','NO','WAIT') NOT NULL DEFAULT 'WAIT',
  PRIMARY KEY (`id`),
  KEY `id_pengelola` (`id_pengelola`),
  KEY `id_konfirmasi` (`id_konfirmasi`),
  CONSTRAINT `tb_komoditas_ibfk_1` FOREIGN KEY (`id_pengelola`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_komoditas_ibfk_2` FOREIGN KEY (`id_konfirmasi`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tb_komoditas` */

insert  into `tb_komoditas`(`id`,`id_pengelola`,`id_konfirmasi`,`nama_komoditas`,`satuan`,`harga`,`tanggal`,`konfirmasi`) values 
(1,1,1,'Air Mineral','Dus',13000,'2019-11-14','WAIT'),
(2,1,1,'Beras','Kg',15000,'2019-11-14','YES'),
(11,1,1,'Buku Binder','Pcs',30000,'2019-11-14','WAIT'),
(12,2,2,'Makanan Ringan','Pcs',2500,'2019-11-14','WAIT');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `keterangan` text,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','surveyor','pengunjung') DEFAULT NULL,
  `edited` datetime NOT NULL,
  `id_konfirmasi` int(11) DEFAULT NULL,
  `allowed` enum('YES','NO') NOT NULL DEFAULT 'NO',
  PRIMARY KEY (`id`),
  KEY `id_konfirmasi` (`id_konfirmasi`),
  CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_konfirmasi`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`nama`,`keterangan`,`username`,`password`,`role`,`edited`,`id_konfirmasi`,`allowed`) values 
(1,'admin web',NULL,'admin','$2a$08$Lhk.JEvo5RsHkloDl/117uZcBoFwIvoXrvy6KIp/BB.en3n5EGiwa','admin','2019-11-14 13:37:01',NULL,'NO'),
(2,'surveyor web',NULL,'surveyor1','$2a$08$Lhk.JEvo5RsHkloDl/117uZcBoFwIvoXrvy6KIp/BB.en3n5EGiwa','surveyor','2019-11-14 23:03:57',1,'YES');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
