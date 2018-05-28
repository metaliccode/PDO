-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2016 at 08:38 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_telepon`) VALUES
(1, '16001', 'Danang Kusuma', 'Bandar Lampung', '1990-02-01', 'Laki-laki', 'Islam', 'Jalan Gatot Subroto No. 10, Bandar Lampung', '085758857775'),
(2, '16002', 'Isyana Sarasvati', 'Jakarta', '1993-05-02', 'Perempuan', 'Islam', 'Jalan Pagar Alam No. 15, Kedaton, Bandar Lampung', '085789892909'),
(3, '16003', 'Indra Styawantoro', 'Purbolinggo', '1991-05-15', 'Laki-laki', 'Islam', 'Perum Griya Gedung Meneng Blok C2 No. 2, Rajabasa, Bandar Lampung', '085669919769'),
(4, '16004', 'Maudy Ayunda', 'Jakarta', '1994-12-19', 'Perempuan', 'Islam', 'Jalan Radin Intan No. 77, Tanjung Karang, Bandar Lampung', '089977955772'),
(5, '16005', 'Valentino Rossi', 'Metro', '1979-03-16', 'Laki-laki', 'Islam', 'Jalan Zaenal Abidin Pagaralam No. 1, Bandar Lampung', '081922919212'),
(6, '16006', 'Raisa Andriana', 'Jakarta', '1990-06-06', 'Perempuan', 'Islam', 'Jalan Yos Sudarso No. 135, Bandar Lampung', '081388955767'),
(7, '16007', 'Cristiano Ronaldo', 'Teluk Betung', '1986-02-25', 'Laki-laki', 'Islam', 'Jalan Teuku Umar No. 52, Kedaton Bandar Lampung', '081269962201'),
(8, '16008', 'M Muzaqi', '', '0000-00-00', '', '', '', ''),
(9, '099023022', 'Nia Ramadhani', 'Jakarta', '1996-02-01', 'Perempuan', 'Islam', 'Cengkareng Barat', '12345678'),
(10, '109209381', 'Frienly Faisal', '', '0000-00-00', 'Laki-laki', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
