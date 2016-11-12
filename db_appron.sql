-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2016 at 01:09 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_appron`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_komentar`
--

CREATE TABLE `t_komentar` (
  `id_komentar` int(20) NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `id_resep` int(10) DEFAULT NULL,
  `komentar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_resep`
--

CREATE TABLE `t_resep` (
  `id_resep` int(10) NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text,
  `resep` text,
  `cara_memasak` text,
  `foto` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_resep`
--

INSERT INTO `t_resep` (`id_resep`, `username`, `judul`, `deskripsi`, `resep`, `cara_memasak`, `foto`, `video`) VALUES
(1, 'zahrafz', 'Ayam Rica rica', NULL, 'Ayam\r\nDaun Kemangi\r\nDaun Jeruk\r\nSereh, Memarkan\r\nGula Pasir\r\nGaram\r\nAir\r\nBumbu Yg Dihaluskan :\r\nBawang Merah\r\nBawang Putih\r\nCabe Merah Keriting\r\nCabe Rawit\r\nJahe\r\nTomat Merah', 'Cuci ayam, lumuri dgn jeruk nipis & garam, diamkan beberapa menit, lalu goreng hingga agak kecoklatan\r\nUlek bumbu yg dihaluskan, lalu tumis bersama daun jeruk & sereh hingga mateng\r\nMasukkan ayam, garam & gula pasir. Lalu tambahkan sedikit air.\r\nSetelah air meresap masukkan daun kemangi\r\nAngkat & sajikan', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `username` varchar(12) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `birth_date` date NOT NULL,
  `bio` text NOT NULL,
  `address` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`username`, `fullname`, `age`, `birth_date`, `bio`, `address`, `password`, `email`, `foto`, `level`) VALUES
('zahrafz', 'Fatimah Az-Zahra', 17, '1999-10-16', 'let''s cooking!', 'somewhere over the rainbow', '870b1dd4674b0817a20ddd77cee5f1826f4fa46c', 'azzahrafz@gmail.com', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_komentar`
--
ALTER TABLE `t_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_user` (`username`),
  ADD KEY `id_resep` (`id_resep`);

--
-- Indexes for table `t_resep`
--
ALTER TABLE `t_resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_user` (`username`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_komentar`
--
ALTER TABLE `t_komentar`
  MODIFY `id_komentar` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_resep`
--
ALTER TABLE `t_resep`
  MODIFY `id_resep` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_komentar`
--
ALTER TABLE `t_komentar`
  ADD CONSTRAINT `t_komentar_ibfk_1` FOREIGN KEY (`id_resep`) REFERENCES `t_resep` (`id_resep`),
  ADD CONSTRAINT `t_komentar_ibfk_2` FOREIGN KEY (`username`) REFERENCES `t_user` (`username`);

--
-- Constraints for table `t_resep`
--
ALTER TABLE `t_resep`
  ADD CONSTRAINT `t_resep_ibfk_1` FOREIGN KEY (`username`) REFERENCES `t_user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
