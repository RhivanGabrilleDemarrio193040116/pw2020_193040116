-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 03:54 AM
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
-- Table structure for table `electronik`
--

CREATE TABLE IF NOT EXISTS `electronik` (
`id` int(11) NOT NULL,
  `Foto` varchar(500) NOT NULL,
  `Nama Barang` varchar(500) NOT NULL,
  `Kelebihan` varchar(500) NOT NULL,
  `Tanggal Rilis` varchar(500) NOT NULL,
  `Harga` varchar(500) NOT NULL,
  `Merek` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronik`
--

INSERT INTO `electronik` (`id`, `Foto`, `Nama Barang`, `Kelebihan`, `Tanggal Rilis`, `Harga`, `Merek`) VALUES
(1, 'Mac.jpg', 'Mac Pro', 'Dengan performa, ekspansi, dan konfigurasi tertinggi, ini adalah sistem yang dibuat untuk membantu kalangan \r\nprofesional  bekerja di luar segala batas yang ada.', '2019', 'US$ 5.999', 'Mac'),
(2, 'Dell.jpg', 'Dell UP3218K\r\n', 'UltraSharp 32 Ultra HD 8K', '23 Maret 2017', 'US$ 4.999', 'Dell'),
(3, 'Beats.jpg', 'Beats By Dre X Graff Custom Pro', 'dirancang khusus untuk seluruh pemain di final Super Bowl yaitu dari tim Denver Broncos dan Seattle Seahawks', '2 Februari 2014', 'US$ 25.000', 'Beats By Dre'),
(4, 'Samsung.jpg', 'Samsung 82 QLED Q60R 4K Smart TV', 'samsung menghadirkan Quantum Dot Display yang akan memanjakan mata dengan palet satu miliar warna dan Smart Hub yang \r\nmemberi akses ke TV, game, atau streaming film hanya dengan satu remote control saja', '2019', 'US$ 2,999', 'Samsung'),
(5, 'Lg.jpg', 'LG GC-M247SLUV', 'Inverter Linear Compressor,New Door-in-Door™,FRESH Balancer™,Moist Balance Crisper™,Kapasitas Besar,LED Lighting', '2014', 'US$ 104,990', 'LG'),
(6, 'Lg1.jpg', 'LG Mesin Cuci Front Loading FG1612H2V', 'LG Mesin Cuci Front Loading FG1612H2V", "Dua sistem pengeringan yang dapat dipilih sesuai dengan kebutuhan', '2018\r\n', 'US$ 1,044', 'LG'),
(7, 'Iphone.jpg', 'Iphone 11 pro max', 'Menggunakan chipset terkencang yang ada saat ini', '20 September 2019', 'US$ 1,099', 'apple'),
(8, 'Coffee.jpg', 'Royale 01 Espresso Veloce', 'mesin kopi espresso mewah yang diperuntukan bagi pencinta kopi kelas atas. Mesin yang dibuat oleh Super Voloce ini diproduksi secara terbatas, sehingga tidak semua orang dapat memiliki mesin kopi ini', '2019', 'US$ 1.000.000', 'Royal coffee maker'),
(9, 'Sharp.jpg', 'Sharp EC-A1RA', 'Ditanamkan dengan baterai 18 volt, Sharp EC-A1RA tidak memerlukan kabel, ini akan semakin memudahkan mobilitas atau menjangkau peralatan penuh debu di langit-langit ruanganmu', '2017', 'US$ 271', 'Sharp'),
(10, 'Setrika.jpg', 'Whizhome Steam Q G-665', 'Setrika uap yang satu ini memiliki ukuran yang kecil, sehingga mudah disimpan dan dibawa kemana-mana. Dilengkapi \r\n	                    dengan strong jet system sehingga dapat mengeluarkan uap yang kuat dan tidak akan membasahi pakaian', '2016', 'US$ 41.6', 'Wizhome');

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE IF NOT EXISTS `elektronik` (
`id` int(11) NOT NULL,
  `Foto` varchar(500) NOT NULL,
  `Nama Barang` varchar(500) NOT NULL,
  `Kelebihan` varchar(500) NOT NULL,
  `Tanggal Rilis` varchar(500) NOT NULL,
  `Harga` varchar(500) NOT NULL,
  `Merek` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `Foto`, `Nama Barang`, `Kelebihan`, `Tanggal Rilis`, `Harga`, `Merek`) VALUES
(1, 'Mac.jpg', 'Mac Pro', 'Dengan performa, ekspansi, dan konfigurasi tertinggi, ini adalah sistem yang dibuat untuk membantu kalangan \r\nprofesional  bekerja di luar segala batas yang ada.', '2019', 'US$ 5.999', 'Mac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `electronik`
--
ALTER TABLE `electronik`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `electronik`
--
ALTER TABLE `electronik`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
