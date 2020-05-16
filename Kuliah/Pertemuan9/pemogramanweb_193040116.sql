-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 03:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pw_193040116`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemogramanweb_193040116`
--

CREATE TABLE IF NOT EXISTS `pemogramanweb_193040116` (
`id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Fakultas` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemogramanweb_193040116`
--

INSERT INTO `pemogramanweb_193040116` (`id`, `nama`, `nrp`, `email`, `Fakultas`, `gambar`) VALUES
(1, 'Sandhika Galih', '043040023', 'sandhikagalih@unpas.ac.id', 'Teknik Informatika', 'sandhikagalih.jpeg'),
(2, 'Doddy', '133304012', 'doddy@yahoo.com', 'Teknik Industri', 'doddy.png'),
(3, 'Upin', '183040972', 'upin@gmail.com', 'TeknikInnformatika', 'upin.jpg'),
(4, 'ipin', '183040890', 'ipin@gmail.com', 'Teknik Informatika', 'ipin.jpg'),
(5, 'budi', '193020987', 'budi@gmail.com', 'Teknik Informatika', 'budi.jpg'),
(6, 'Andi', '193030987', 'Andi@gmail.com', 'Teknik Mesin', 'Andi.jpg'),
(7, 'Tono', '193050309', 'Tono@gmail.com', 'Teknik Lingkungan', 'Tono,jpg'),
(8, 'Anton', '193060198', 'Anton@gmail.com', 'Teknik perancangan kota', 'Anton.jpg'),
(9, 'Adit', '193020857', 'Adit@gmail.com', 'Teknik Pangan', 'Adit.jpg'),
(10, 'dicky', '193010873', 'dicky@gmail.com', 'Teknik Industri', 'dicky.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemogramanweb_193040116`
--
ALTER TABLE `pemogramanweb_193040116`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemogramanweb_193040116`
--
ALTER TABLE `pemogramanweb_193040116`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
