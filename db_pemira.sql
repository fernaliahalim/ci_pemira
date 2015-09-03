-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2014 at 06:06 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pemira`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calon`
--

CREATE TABLE IF NOT EXISTS `tbl_calon` (
  `id_calon` char(4) NOT NULL,
  `nim_cabem` char(9) NOT NULL,
  `nama_cabem` varchar(50) NOT NULL,
  `nim_cawabem` char(9) NOT NULL,
  `nama_cawabem` varchar(50) NOT NULL,
  `img_url` text NOT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_calon`
--

INSERT INTO `tbl_calon` (`id_calon`, `nim_cabem`, `nama_cabem`, `nim_cawabem`, `nama_cawabem`, `img_url`) VALUES
('C001', 'J3D112101', 'Insan Hasanudin', 'J3J112104', 'Zulfikar Alfatih', 'assets/img/b.jpg'),
('C002', 'J3B112101', 'Andi Marwan', 'J3L112405', 'Sigit Hasannudin', 'assets/img/a2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
  `tgl_mulai` datetime NOT NULL,
  `tgl_akhir` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`tgl_mulai`, `tgl_akhir`) VALUES
('2014-12-11 20:18:21', '2014-12-25 23:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontakkami`
--

CREATE TABLE IF NOT EXISTS `tbl_kontakkami` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kontakkami`
--

INSERT INTO `tbl_kontakkami` (`nama`, `email`, `pesan`) VALUES
('Andika Wiryawan', 'andikajelek@gmail.com', 'hai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pk`
--

CREATE TABLE IF NOT EXISTS `tbl_pk` (
  `kode_pk` char(3) NOT NULL,
  `simbol_pk` char(1) NOT NULL,
  `nama_pk` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_pk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pk`
--

INSERT INTO `tbl_pk` (`kode_pk`, `simbol_pk`, `nama_pk`) VALUES
('KMN', 'A', 'Komunikasi'),
('EKW', 'B', 'Ekowisata'),
('INF', 'C', 'Manajemen Informatika'),
('TEK', 'D', 'Teknik Komputer'),
('JMP', 'E', 'Supervisor Jaminan Mutu Pangan'),
('GZI', 'F', 'Manajemen Industri Jasa Makanan dan Gizi'),
('TIB', 'G', 'Teknologi Industri Benih'),
('IKN', 'H', 'Teknologi Produksi Manajemen Perikanan Budidaya'),
('TNK', 'I', 'Teknologi dan Manajemen Ternak'),
('MAB', 'J', 'Manajemen Agribisnis'),
('MNI', 'K', 'Manajemen Industri'),
('KIM', 'L', 'Analisis Kimia'),
('LNK', 'M', 'Teknik dan Manajemen Lingkungan'),
('AKN', 'N', 'Akuntansi'),
('PVT', 'P', 'Paramedik Veteriner'),
('TMP', 'T', 'Teknologi dan Manajemen Produksi Perkebunan'),
('PPP', 'W', 'Produksi dan Pengembangan Pertanian Terpadu'),
('PKS', 'Z', 'Perkebunan Kelapa Sawit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE IF NOT EXISTS `tbl_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time_vote` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `time_vote`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `nim` char(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pk` char(3) NOT NULL,
  `password` varchar(50) NOT NULL,
  `priviledge` int(11) NOT NULL,
  `flag` char(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`nim`, `nama`, `pk`, `password`, `priviledge`, `flag`) VALUES
('J3C212210', 'Fernalia', 'INF', 'fc3cee5d6a37bd5732a96e6f87ffaf2d', 0, 'signup'),
('J3C112021', 'Selyz Darani Harahap', 'INF', '1012c1acd8f3d553cb6c64263bcc7738', 1, 'signup'),
('J3C112152', 'Andika Wiryawan', 'INF', '7e51eea5fa101ed4dade9ad3a7a072bb', 2, 'signup'),
('J3A212001', 'Silvi Yurisa', 'KMN', '42513881c5745ee8fa73969ce315ce6c', 2, 'signup'),
('J3B112108', 'Shanissalam WPP', 'EKW', 'b894efbb3ccb08b820f7b3ba3bb22ccb', 2, 'signup'),
('J3C212185', 'Nisful L Nikmah', 'INF', '4cf49ed737012a026800eaf4607da43a', 2, 'signup'),
('J3A112100', 'Satria Siregar', 'KMN', '123456', 2, ''),
('J3A112103', 'Sasa', 'KMN', 'f45731e3d39a1b2330bbf93e9b3de59e', 2, 'signup'),
('J3B112102', 'Rindu', 'EKW', 'c0bda2037f311cc2c57e138b1ac39fe9', 2, 'signup'),
('J3B112101', 'Nindi', 'EKW', 'e10adc3949ba59abbe56e057f20f883e', 2, 'signup'),
('J3D112111', 'Gina Rindu', 'TEK', '7df27de84ed79a46d75c7c57ad00f76f', 2, 'signup'),
('J3D212200', 'Dendi Abdul Rohim', 'TEK', '9d47cb51d31cc4adbdaa29cde5070c7c', 2, 'signup'),
('J3D212101', 'Rafdi Jaidi', 'TEK', '123456', 2, ''),
('J3E112101', 'Faisal Habibullah', 'JMP', 'f4668288fdbf9773dd9779d412942905', 2, 'signup'),
('J3E112102', 'Dessy Pratiwi', 'JMP', '123456', 2, ''),
('J3E112103', 'Ratih', 'JMP', '123456', 2, ''),
('J3F112101', 'Muhammad Fakhri', 'GZI', '68b91a181c612783782742faf60f1dff', 2, 'signup'),
('J3F112102', 'Siti Rohimah', 'GZI', '123456', 2, ''),
('J3G112101', 'Fahrizal', 'TIB', '0d3133e7ed48278b30af611b4a8cd833', 2, 'signup'),
('J3G112102', 'Windi', 'TIB', '123456', 2, ''),
('J3H112100', 'Ridho', 'IKN', '123456', 2, ''),
('J3H112101', 'Rizky', 'IKN', '49d8712dd6ac9c3745d53cd4be48284c', 2, 'signup'),
('J3H112102', 'Wulan', 'IKN', '123456', 2, ''),
('J3I112100', 'Desyana Intan Aristanti', 'TNK', 'ce9231e8425456d35fae06bbe1ffc4ef', 2, 'signup'),
('J3I112101', 'Kansha Kamila', 'TNK', '123456', 2, ''),
('J3I112102', 'Liza Apriliani', 'TNK', '123456', 2, ''),
('J3J112100', 'Lukman Nurhakim', 'MAB', 'b5bbc8cf472072baffe920e4e28ee29c', 2, 'signup'),
('J3J112101', 'Riska Lestari', 'MAB', '123456', 2, ''),
('J3J113102', 'Naylah Amalah', 'MAB', '79d3f42ed60bb21b8cbf1b9da8dd82d7', 2, 'signup'),
('J3K112100', 'Dhika', 'MNI', '0d2fab94da6704708f8eabf28dc68719', 2, 'signup'),
('J3K113111', 'Miftahussurur', 'MNI', '123456', 2, ''),
('J2L112100', 'Destya ', 'KIM', '123456', 2, ''),
('J3L112101', 'Muhammad Iqbal', 'KIM', '123456', 2, ''),
('J3M112100', 'Satrio Nugroho', 'LNK', '123456', 2, ''),
('J3M112101', 'Iis Tentia Agustin', 'LNK', '123456', 2, ''),
('J3M112102', 'Nesya Lestari', 'LNK', '123456', 2, ''),
('J3N212222', 'Ummi Hasnah', 'AKN', '123456', 2, ''),
('J3N212223', 'Venisya Aditya', 'AKN', '123456', 2, ''),
('J3N112100', 'Desvira', 'AKN', '123456', 2, ''),
('J3P112100', 'Anggit', 'PVT', '123456', 2, ''),
('J3P112101', 'Maya Gita', 'PVT', '123456', 2, ''),
('J3T112100', 'Rezi Bintari', 'TMP', '123456', 2, ''),
('J3T212121', 'Rahmah Budhi', 'TMP', '123456', 2, ''),
('J3T412101', 'Eko Saputra', 'TMP', '123456', 2, ''),
('J3W121212', 'Ceria Agnantria', 'PPP', '123456', 2, ''),
('J3W212122', 'Zhafiranisa Nadhirah', 'PPP', '123456', 2, ''),
('J3Z413100', 'Indra Indrawan', 'PKS', '123456', 2, ''),
('J3Z412101', 'Kevin', 'PKS', '123456', 2, ''),
('J3C212197', 'Nureli', 'INF', 'e6c17f694dd118477cb03c0b2c983e06', 2, 'signup'),
('J3C212214', 'Izni Andriyani Maulida', 'INF', '2ba1a692a85544bc0698c1d927779b1c', 2, 'signup'),
('J3L112104', 'Rendi', 'KIM', '123456', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vote`
--

CREATE TABLE IF NOT EXISTS `tbl_vote` (
  `id_vote` char(4) NOT NULL,
  `time_vote` datetime NOT NULL,
  `nim` char(9) NOT NULL,
  `id_calon` char(4) NOT NULL,
  PRIMARY KEY (`id_vote`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vote`
--

INSERT INTO `tbl_vote` (`id_vote`, `time_vote`, `nim`, `id_calon`) VALUES
('V001', '2014-11-11 06:53:11', 'J3C212210', 'C002'),
('V002', '2014-11-11 06:56:51', 'J3C112021', 'C001'),
('V003', '2014-11-11 06:57:21', 'J3C112152', 'C002'),
('V004', '2014-11-11 06:57:38', 'J3A212001', 'C002'),
('V005', '2014-11-11 06:58:03', 'J3B112108', 'C001'),
('V006', '2014-11-11 06:58:19', 'J3C212185', 'C002'),
('V007', '2014-11-11 06:58:48', 'J3A112103', 'C002'),
('V008', '2014-11-11 07:03:55', 'J3K112100', 'C001'),
('V009', '2014-11-11 07:07:57', 'J3J113102', 'C002'),
('V010', '2014-11-11 07:11:21', 'J3I112100', 'C001'),
('V011', '2014-11-11 07:12:36', 'J3H112101', 'C002'),
('V012', '2014-11-11 07:20:36', 'J3B112102', 'C001'),
('V013', '2014-11-11 07:22:05', 'J3G112101', 'C002'),
('V014', '2014-11-11 07:40:22', 'J3C212197', 'C001'),
('V015', '2014-11-11 11:35:12', 'J3F112101', 'C002'),
('V016', '2014-11-11 13:22:30', 'J3E112101', 'C001'),
('V017', '2014-11-11 14:19:52', 'J3D112111', 'C002'),
('V018', '2014-11-14 18:48:10', 'J3C212214', 'C002'),
('V019', '2014-11-17 20:06:34', 'J3D212200', 'C001'),
('V020', '2014-11-18 01:51:08', 'J3J112100', 'C001');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
