/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 5.5.16 : Database - yt_kendaraan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`yt_kendaraan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `yt_kendaraan`;

/*Table structure for table `tbl_kendaraan` */

DROP TABLE IF EXISTS `tbl_kendaraan`;

CREATE TABLE `tbl_kendaraan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nopol` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kendaraan` */

insert  into `tbl_kendaraan`(`id`,`nopol`,`merk`) values 
(10,'B 101 OPR','Toyota Veloz'),
(11,'B 102 OPR','Toyota Veloz'),
(12,'B 103 OPR','Toyota Innova'),
(13,'B 104 OPR','Suzuki Ertiga'),
(14,'B 105 OPR','Suzuki Ertiga');

/*Table structure for table `tbl_pinjam` */

DROP TABLE IF EXISTS `tbl_pinjam`;

CREATE TABLE `tbl_pinjam` (
  `id` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'On Process',
  `iduser` int(10) NOT NULL,
  `nopol` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pinjam` */

insert  into `tbl_pinjam`(`id`,`tgl`,`keterangan`,`status`,`iduser`,`nopol`) values 
('TRX000001','2023-06-28','Meeting Koordinasi','APPROVE',2,'B 101 OPR'),
('TRX000002','2023-06-28','Seminar Cloud X','APPROVE',1,'B 102 OPR');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `hak_akses` enum('admin','user') NOT NULL,
  `divisi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`username`,`password`,`nama_user`,`hak_akses`,`divisi`) values 
(1,'budi','9c5fa085ce256c7c598f6710584ab25d','Budi Pras','user','IT'),
(2,'dewi','fde0b737496c53bb85d07b31a02985a3','Dewi Anjar','user','GA'),
(5,'admin','0192023a7bbd73250516f069df18b500','Admin','admin','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
