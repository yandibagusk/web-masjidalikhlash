/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.14-MariaDB : Database - masjidalikhlash
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`masjidalikhlash` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `masjidalikhlash`;

/*Table structure for table `kegiatan` */

DROP TABLE IF EXISTS `kegiatan`;

CREATE TABLE `kegiatan` (
  `id_kegiatan` varchar(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `waktu` varchar(100) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `submitted_on` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan` */

insert  into `kegiatan`(`id_kegiatan`,`nama`,`tempat`,`waktu`,`deskripsi`,`foto`,`submitted_on`) values 
('KG001','Muharram Fest','Komplek Masjid Al Ikhlash Kembang','20 Agustus 2020','<p>Muharram Fest adalah sebuah event</p>\r\n','IMG_8281.jpg','2020-02-14 13:36:14'),
('KG002','Pengajian Rutin','Serambi Masjid Al Ikhlash','Setiap Malam Sabtu','','10daysJE.jpg','2020-02-17 09:11:01');

/*Table structure for table `posting` */

DROP TABLE IF EXISTS `posting`;

CREATE TABLE `posting` (
  `id_posting` varchar(10) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` longtext DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `submitted_on` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_posting`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `posting` */

insert  into `posting`(`id_posting`,`judul`,`isi`,`foto`,`kategori`,`submitted_on`) values 
('P002','Keutamaan Berjalan Menuju Masjid','<p style=\"text-align:justify\">Sesungguhnya, pahala yang paling besar adalah yang paling jauh rumahnya dari masjid.&nbsp;&nbsp;Para&nbsp;<em>fuqaha&nbsp;</em>(ulama ahli fiqih)&nbsp;<em>rahimahumullah&nbsp;</em>menegaskan dianjurkannya memperpendek langkah menuju masjid dan tidak tergesa-gesa (alias berjalan dengan tenang) ketika menuju masjid. Hal ini untuk memperbanyak pahala kebaikan ketika berjalan menuju masjid, berdasarkan berbagai dalil yang menunjukkan adanya keutamaan memperbanyak langkah menuju masjid.&nbsp;<strong>[1]</strong></p>\r\n\r\n<p style=\"text-align:justify\">Dari Abu Hurairah&nbsp;<em>radhiyallahu &lsquo;anhu,&nbsp;</em>Rasulullah&nbsp;<em>shallallahu &lsquo;alaihi wa sallam&nbsp;</em>bersabda,</p>\r\n\r\n<p style=\"text-align:justify\">Ø£ÙŽÙ„ÙŽØ§ Ø£ÙŽØ¯ÙÙ„Ù‘ÙÙƒÙÙ…Ù’ Ø¹ÙŽÙ„ÙŽÙ‰ Ù…ÙŽØ§ ÙŠÙŽÙ…Ù’Ø­ÙÙˆ Ø§Ù„Ù„Ù‡Ù Ø¨ÙÙ‡Ù Ø§Ù„Ù’Ø®ÙŽØ·ÙŽØ§ÙŠÙŽØ§ØŒ ÙˆÙŽÙŠÙŽØ±Ù’ÙÙŽØ¹Ù Ø¨ÙÙ‡Ù Ø§Ù„Ø¯Ù‘ÙŽØ±ÙŽØ¬ÙŽØ§ØªÙØŸ Ù‚ÙŽØ§Ù„ÙÙˆØ§: Ø¨ÙŽÙ„ÙŽÙ‰ ÙŠÙŽØ§ Ø±ÙŽØ³ÙÙˆÙ„ÙŽ Ø§Ù„Ù„Ù‡Ù Ù‚ÙŽØ§Ù„ÙŽ: Ø¥ÙØ³Ù’Ø¨ÙŽØ§ØºÙ Ø§Ù„Ù’ÙˆÙØ¶ÙÙˆØ¡Ù Ø¹ÙŽÙ„ÙŽÙ‰ Ø§Ù„Ù’Ù…ÙŽÙƒÙŽØ§Ø±ÙÙ‡ÙØŒ ÙˆÙŽÙƒÙŽØ«Ù’Ø±ÙŽØ©Ù Ø§Ù„Ù’Ø®ÙØ·ÙŽØ§ Ø¥ÙÙ„ÙŽÙ‰ Ø§Ù„Ù’Ù…ÙŽØ³ÙŽØ§Ø¬ÙØ¯ÙØŒ ÙˆÙŽØ§Ù†Ù’ØªÙØ¸ÙŽØ§Ø±Ù Ø§Ù„ØµÙ‘ÙŽÙ„ÙŽØ§Ø©Ù Ø¨ÙŽØ¹Ù’Ø¯ÙŽ Ø§Ù„ØµÙ‘ÙŽÙ„ÙŽØ§Ø©ÙØŒ ÙÙŽØ°ÙŽÙ„ÙÙƒÙÙ…Ù Ø§Ù„Ø±Ù‘ÙØ¨ÙŽØ§Ø·Ù</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;Maukah kalian aku tunjukkan kepada suatu amal yang dapat menghapus kesalahan (dosa) dan meninggikan derajat?&rdquo; Para sahabat menjawab, &rdquo;Ya, wahai Rasulullah.&rdquo; Rasulullah bersabda<strong>, &rdquo;(Yaitu)</strong>&nbsp;<strong>menyempurnakan wudhu dalam kondisi sulit,&nbsp;</strong>banyaknya langkah menuju masjid, menunggu shalat setelah mendirikan shalat. Itulah&nbsp;<em>ar-ribath&nbsp;</em>(kebaikan yang banyak).&rdquo;&nbsp;<strong>(HR. Muslim no. 251)</strong></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Berjalan Menuju Masjid Meskipun Jauh</strong></p>\r\n\r\n<p style=\"text-align:justify\">Dari Abu Musa&nbsp;<em>radhiyallahu &lsquo;anhu,&nbsp;</em>Rasulullah&nbsp;<em>shallallahu &lsquo;alaihi wa sallam&nbsp;</em>bersabda,</p>\r\n\r\n<p style=\"text-align:justify\">Ø£ÙŽØ¹Ù’Ø¸ÙŽÙ…Ù Ø§Ù„Ù†Ù‘ÙŽØ§Ø³Ù Ø£ÙŽØ¬Ù’Ø±Ù‹Ø§ ÙÙÙŠ Ø§Ù„ØµÙ‘ÙŽÙ„Ø§ÙŽØ©Ù Ø£ÙŽØ¨Ù’Ø¹ÙŽØ¯ÙÙ‡ÙÙ…Ù’ØŒ ÙÙŽØ£ÙŽØ¨Ù’Ø¹ÙŽØ¯ÙÙ‡ÙÙ…Ù’ Ù…ÙŽÙ…Ù’Ø´Ù‹Ù‰ ÙˆÙŽØ§Ù„Ù‘ÙŽØ°ÙÙŠ ÙŠÙŽÙ†Ù’ØªÙŽØ¸ÙØ±Ù Ø§Ù„ØµÙ‘ÙŽÙ„Ø§ÙŽØ©ÙŽ Ø­ÙŽØªÙ‘ÙŽÙ‰ ÙŠÙØµÙŽÙ„Ù‘ÙÙŠÙŽÙ‡ÙŽØ§ Ù…ÙŽØ¹ÙŽ Ø§Ù„Ø¥ÙÙ…ÙŽØ§Ù…Ù Ø£ÙŽØ¹Ù’Ø¸ÙŽÙ…Ù Ø£ÙŽØ¬Ù’Ø±Ù‹Ø§ Ù…ÙÙ†ÙŽ Ø§Ù„Ù‘ÙŽØ°ÙÙŠ ÙŠÙØµÙŽÙ„Ù‘ÙÙŠØŒ Ø«ÙÙ…Ù‘ÙŽ ÙŠÙŽÙ†ÙŽØ§Ù…Ù</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;Orang yang paling banyak mendapatkan pahala dalam shalat adalah mereka yang paling jauh (jarak rumahnya ke masjid), karena paling jauh jarak perjalanannya menuju masjid. Dan orang yang menunggu shalat hingga dia melaksanakan shalat bersama imam itu lebih besar pahalanya dari orang yang melaksanakan shalat kemudian tidur.&rdquo;&nbsp;<strong>(HR. Bukhari no. 651 dan Muslim no. 662)</strong></p>\r\n\r\n<p style=\"text-align:justify\">Hadits-hadits tersebut menunjukkan keutamaan rumah yang jauh dari masjid, karena banyaknya langkah menuju masjid yang membuahkan pahala yang besar. Besarnya pahala itu karena jauhnya rumah dari masjid dan juga karena bolak-balik pergi ke masjid.</p>\r\n\r\n<p style=\"text-align:justify\">Dari &lsquo;Ubay bin Ka&rsquo;ab&nbsp;<em>radhiyallahu &lsquo;anhu,&nbsp;</em>dia berkata,</p>\r\n\r\n<p style=\"text-align:justify\">ÙƒÙŽØ§Ù†ÙŽ Ø±ÙŽØ¬ÙÙ„ÙŒ Ù„ÙŽØ§ Ø£ÙŽØ¹Ù’Ù„ÙŽÙ…Ù Ø±ÙŽØ¬ÙÙ„Ù‹Ø§ Ø£ÙŽØ¨Ù’Ø¹ÙŽØ¯ÙŽ Ù…ÙÙ†ÙŽ Ø§Ù„Ù’Ù…ÙŽØ³Ù’Ø¬ÙØ¯Ù Ù…ÙÙ†Ù’Ù‡ÙØŒ ÙˆÙŽÙƒÙŽØ§Ù†ÙŽ Ù„ÙŽØ§ ØªÙØ®Ù’Ø·ÙØ¦ÙÙ‡Ù ØµÙŽÙ„ÙŽØ§Ø©ÙŒØŒ Ù‚ÙŽØ§Ù„ÙŽ: ÙÙŽÙ‚ÙÙŠÙ„ÙŽ Ù„ÙŽÙ‡Ù: Ø£ÙŽÙˆÙ’ Ù‚ÙÙ„Ù’ØªÙ Ù„ÙŽÙ‡Ù: Ù„ÙŽÙˆÙ’ Ø§Ø´Ù’ØªÙŽØ±ÙŽÙŠÙ’ØªÙŽ Ø­ÙÙ…ÙŽØ§Ø±Ù‹Ø§ ØªÙŽØ±Ù’ÙƒÙŽØ¨ÙÙ‡Ù ÙÙÙŠ Ø§Ù„Ø¸Ù‘ÙŽÙ„Ù’Ù…ÙŽØ§Ø¡ÙØŒ ÙˆÙŽÙÙÙŠ Ø§Ù„Ø±Ù‘ÙŽÙ…Ù’Ø¶ÙŽØ§Ø¡ÙØŒ Ù‚ÙŽØ§Ù„ÙŽ: Ù…ÙŽØ§ ÙŠÙŽØ³ÙØ±Ù‘ÙÙ†ÙÙŠ Ø£ÙŽÙ†Ù‘ÙŽ Ù…ÙŽÙ†Ù’Ø²ÙÙ„ÙÙŠ Ø¥ÙÙ„ÙŽÙ‰ Ø¬ÙŽÙ†Ù’Ø¨Ù Ø§Ù„Ù’Ù…ÙŽØ³Ù’Ø¬ÙØ¯ÙØŒ Ø¥ÙÙ†Ù‘ÙÙŠ Ø£ÙØ±ÙÙŠØ¯Ù Ø£ÙŽÙ†Ù’ ÙŠÙÙƒÙ’ØªÙŽØ¨ÙŽ Ù„ÙÙŠ Ù…ÙŽÙ…Ù’Ø´ÙŽØ§ÙŠÙŽ Ø¥ÙÙ„ÙŽÙ‰ Ø§Ù„Ù’Ù…ÙŽØ³Ù’Ø¬ÙØ¯ÙØŒ ÙˆÙŽØ±ÙØ¬ÙÙˆØ¹ÙÙŠ Ø¥ÙØ°ÙŽØ§ Ø±ÙŽØ¬ÙŽØ¹Ù’ØªÙ Ø¥ÙÙ„ÙŽÙ‰ Ø£ÙŽÙ‡Ù’Ù„ÙÙŠØŒ ÙÙŽÙ‚ÙŽØ§Ù„ÙŽ Ø±ÙŽØ³ÙÙˆÙ„Ù Ø§Ù„Ù„Ù‡Ù ØµÙŽÙ„Ù‘ÙŽÙ‰ Ø§Ù„Ù„Ù‡Ù Ø¹ÙŽÙ„ÙŽÙŠÙ’Ù‡Ù ÙˆÙŽØ³ÙŽÙ„Ù‘ÙŽÙ…ÙŽ: Ù‚ÙŽØ¯Ù’ Ø¬ÙŽÙ…ÙŽØ¹ÙŽ Ø§Ù„Ù„Ù‡Ù Ù„ÙŽÙƒÙŽ Ø°ÙŽÙ„ÙÙƒÙŽ ÙƒÙÙ„Ù‘ÙŽÙ‡Ù</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;Seseorang yang setahuku tidak ada lagi yang lebih jauh (rumahnya) dari masjid, dan dia tidak pernah ketinggalan dari shalat. &lsquo;Ubay berkata, maka ia diberi saran atau kusarankan, &ldquo;Bagaimana sekiranya jika kamu membeli keledai untuk kamu kendarai saat gelap atau saat panas terik?&rdquo; Laki-laki itu menjawab, &ldquo;Aku tidak ingin rumahku di samping masjid, sebab aku ingin jalanku ke masjid dan kepulanganku ke rumah semua dicatat (pahala).&rdquo; Maka Rasulullah&nbsp;<em>shallallahu &lsquo;alaihi wa sallam</em>&nbsp;bersabda, &ldquo;Allah&nbsp;<em>Ta&rsquo;ala</em>&nbsp;telah kumpulkan untukmu semuanya tadi.&rdquo;&nbsp;<strong>(HR. Muslim no. 663)</strong></p>\r\n\r\n<p style=\"text-align:justify\">Lihatlah saudaraku, adanya pahala yang besar dari Allah&nbsp;<em>Ta&rsquo;ala</em>&nbsp;bagi orang-orang yang pergi menuju masjid dan juga ketika berjalan pulang dari masjid. Oleh karena itu, sahabat tersebut lebih memilih untuk berjalan kaki meskipun rumahnya jauh dari masjid.</p>\r\n\r\n<p style=\"text-align:justify\">Dari Abu Hurairah&nbsp;<em>radhiyallahu &lsquo;anhu,&nbsp;</em>Rasulullah&nbsp;<em>shallallahu &lsquo;alaihi wa sallam&nbsp;</em>bersabda,</p>\r\n\r\n<p style=\"text-align:justify\">Ù…ÙŽÙ†Ù’ ØªÙŽØ·ÙŽÙ‡Ù‘ÙŽØ±ÙŽ ÙÙÙŠ Ø¨ÙŽÙŠÙ’ØªÙÙ‡ÙØŒ Ø«ÙÙ…Ù‘ÙŽ Ù…ÙŽØ´ÙŽÙ‰ Ø¥ÙÙ„ÙŽÙ‰ Ø¨ÙŽÙŠÙ’ØªÙ Ù…ÙŽÙ†Ù’ Ø¨ÙÙŠÙÙˆØªÙ Ø§Ù„Ù„Ù‡Ù Ù„ÙÙŠÙŽÙ‚Ù’Ø¶ÙÙŠÙŽ ÙÙŽØ±ÙÙŠØ¶ÙŽØ©Ù‹ Ù…ÙÙ†Ù’ ÙÙŽØ±ÙŽØ§Ø¦ÙØ¶Ù Ø§Ù„Ù„Ù‡ÙØŒ ÙƒÙŽØ§Ù†ÙŽØªÙ’ Ø®ÙŽØ·Ù’ÙˆÙŽØªÙŽØ§Ù‡Ù Ø¥ÙØ­Ù’Ø¯ÙŽØ§Ù‡ÙÙ…ÙŽØ§ ØªÙŽØ­ÙØ·Ù‘Ù Ø®ÙŽØ·ÙÙŠØ¦ÙŽØ©Ù‹ØŒ ÙˆÙŽØ§Ù„Ù’Ø£ÙØ®Ù’Ø±ÙŽÙ‰ ØªÙŽØ±Ù’ÙÙŽØ¹Ù Ø¯ÙŽØ±ÙŽØ¬ÙŽØ©Ù‹</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;Barangsiapa bersuci di rumahnya, kemudian berjalan ke salah satu rumah Allah (masjid) untuk melaksanakan kewajiban yang Allah tetapkan, maka kedua langkahnya, yang satu menghapus kesalahan dan satunya lagi meninggikan derajat.&rdquo;&nbsp;<strong>(HR. Muslim no. 666)</strong></p>\r\n\r\n<p style=\"text-align:justify\">Dalam hadits-hadits tersebut dan yang lainnya, terdapat motivasi untuk bersungguh-sungguh mendatangi masjid dengan berjalan kaki, bukan dengan naik kendaraan, meskipun rumahnya agak jauh. Hal ini dengan catatan, selama hal itu tidak menimbulkan&nbsp;<em>masyaqqah&nbsp;</em>(kesulitan) dan juga selama tidak ada&nbsp;<em>&lsquo;udzur&nbsp;</em>(misalnya, sudah tua renta dan yang lainnya). Juga motivasi agar tidak membiasakan diri naik kendaraan ketika menuju masjid, jika jarak masjid tersebut masih bisa terjangkau dengan berjalan kaki.&nbsp;<strong>[2]</strong></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Penulis : M.Saifudin Hakim</strong></p>\r\n','pahala jalan ke masjid yang lebih jauh.jpg','Artikel','2020-02-15 20:55:50'),
('P003','Mengapa Ghibah Disamakan Dengan Memakan Bangkai Manusia?','<p dir=\"ltr\" style=\"text-align:justify\">Allah &lsquo;<em>azza wa jalla</em>&nbsp;berfirman,</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">ÙˆÙŽÙ„ÙŽØ§ ÙŠÙŽØºÙ’ØªÙŽØ¨Ù’ Ø¨ÙŽØ¹Ù’Ø¶ÙÙƒÙÙ…Ù’ Ø¨ÙŽØ¹Ù’Ø¶Ù‹Ø§ Ûš Ø£ÙŽÙŠÙØ­ÙØ¨Ù‘Ù Ø£ÙŽØ­ÙŽØ¯ÙÙƒÙÙ…Ù’ Ø£ÙŽÙ†Ù’ ÙŠÙŽØ£Ù’ÙƒÙÙ„ÙŽ Ù„ÙŽØ­Ù’Ù…ÙŽ Ø£ÙŽØ®ÙÙŠÙ‡Ù Ù…ÙŽÙŠÙ’ØªÙ‹Ø§ ÙÙŽÙƒÙŽØ±ÙÙ‡Ù’ØªÙÙ…ÙÙˆÙ‡Ù Ûš ÙˆÙŽØ§ØªÙ‘ÙŽÙ‚ÙÙˆØ§ Ø§Ù„Ù„Ù‘ÙŽÙ‡ÙŽ Ûš Ø¥ÙÙ†Ù‘ÙŽ Ø§Ù„Ù„Ù‘ÙŽÙ‡ÙŽ ØªÙŽÙˆÙ‘ÙŽØ§Ø¨ÙŒ Ø±ÙŽØ­ÙÙŠÙ…ÙŒ</p>\r\n\r\n<p dir=\"\" style=\"text-align:justify\">&ldquo;<em>Dan janganlah kalian saling menggunjing. Adakah seorang diantara kamu yang suka memakan daging saudaranya yang sudah mati? Maka tentulah kamu merasa jijik kepadanya. Dan bertakwalah kepada Allah. Sesungguhnya Allah Maha Penerima Taubat lagi Maha Penyayang</em>&rdquo; (QS. Al-Hujurat: 12).</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Dalam ayat di atas, Allah&nbsp;<em>ta&rsquo;ala</em>&nbsp;menyamakan orang yang mengghibah saudaranya seperti memakan bangkai saudaranya tersebut. Apa rahasia dari penyamaan ini?</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Imam Qurthubi dalam tafsirnya menjelaskan, &ldquo;Ini adalah permisalan yang amat mengagumkan, diantara rahasianya adalah:</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Pertama</strong>, karena ghibah mengoyak kehormatan orang lain, layaknya seorang yang memakan daging, daging tersebut akan terkoyak dari kulitnya. Mengoyak kehormatan atau harga diri, tentu lebih buruk keadaannya.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Kedua</strong>, Allah ta&rsquo;ala menjadikan &ldquo;bangkai daging saudaranya&rdquo; sebagai permisalan, bukan daging hewan. Hal ini untuk menerangkan bahwa ghibah itu amatlah dibenci.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Ketiga</strong>, Allah ta&rsquo;ala menyebut orang yang dighibahi tersebut sebagai mayit. Karena orang yang sudah mati, dia tidak kuasa untuk membela diri. Seperti itu juga orang yang sedang dighibahi, dia tidak berdaya untuk membela kehormatan dirinya.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Keempat</strong>, Allah menyebutkan ghibah dengan permisalan yang amat buruk, agar hamba-hambaNya menjauhi dan merasa jijik dengan perbuatan tercela tersebut&rdquo; (Lihat:&nbsp;<em>Tafsir Al-Qurtubi</em>&nbsp;16/335), lihat juga:&nbsp;<em>I&rsquo;laamul Muwaqqi&rsquo;iin</em>&nbsp;1/170).</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Syaikh Abdurrahman bin Nashir As-Sa&rsquo;di menjelaskan, &ldquo;Ayat di atas menerangkan sebuah ancaman yang keras dari perbuatan ghibah. Dan bahwasanya ghibah termasuk dosa besar. Karena Allah menyamakannya dengan memakan daging mayit, dan hal tersebut termasuk dosa besar. &rdquo; (<em>Tafsir As-Sa&rsquo;di,</em>&nbsp;hal. 745).</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><em>Wallahu a&rsquo;lam</em>.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">*Faidah ini didapat dari buku:&nbsp;<em>Al-fawaidul majmu&rsquo;ah fi syarhi fushul al-adab wa makaarimil akhlaq al-masyruu&rsquo;ah</em>. Karya Syaikh Abdullah bin Sholih Al-Fauzan.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Penulis : Ahmad Anshori</strong></p>\r\n','membantah-dengan-cacian-810x500.png','Artikel','2020-02-15 21:04:40'),
('P004','Madin','<p>Adakan outbound</p>\r\n','photo6084820334957144667.jpg','Berita','2020-02-15 21:18:54');

/*Table structure for table `saran` */

DROP TABLE IF EXISTS `saran`;

CREATE TABLE `saran` (
  `id_saran` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `saran` text DEFAULT NULL,
  PRIMARY KEY (`id_saran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `saran` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `hak_akses` varchar(15) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Deactive',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`,`hak_akses`,`status`) values 
('U001','admin','admin','Superadmin','Aktif'),
('U002','yandi','yandee','Admin','Aktif');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
