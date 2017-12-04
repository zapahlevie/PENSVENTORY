-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2017 at 11:24 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `id_user` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `jumlah`, `harga`, `gambar`, `deskripsi`, `id_user`) VALUES
(19, 'microphone', 10, 5000, 'file_1482293800.jpg', 'microphone baru, bermerk, suara jernih dijamin, masih bergaransi', 3),
(27, 'Speaker, amplifier', 3, 20000, 'file_1482294184.jpg', 'amplifier merk marshall, bass powerfull, pro pad equalizer high quality sound effect', 3),
(29, 'kabel vga panjang', 1, 0, 'file_1482295254.jpg', 'vga cable blue 5meter', 3),
(31, 'galon', 2, 0, 'file_1482295558.jpg', 'galon (tanpa pompa)', 10),
(32, 'Motor', 1, 20000, 'file_1482295690.jpg', 'All-New-Honda-CBR150R, mulus ramah sama orang lain', 10),
(33, 'Bantal', 6, 10000, 'file_1482305558.jpg', 'Bantal warna warni beraneka rasa, empuk berkaulitas, bikin nyamin, setia menemani disaat sendiri', 11),
(35, 'pulpen', 4, 1000, 'file_1482312033.jpg', 'warna-warni', 12),
(36, 'AC', 5, 100000, 'file_1484559692.jpg', 'Pendingin Ruangan yang sangat Mantab', 3);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_peminjam` int(5) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jumlah` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_barang` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_barang` (`id_barang`),
  KEY `id_user` (`id_user`),
  KEY `jumlah` (`jumlah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_peminjam`, `tanggal_pinjam`, `tanggal_kembali`, `jumlah`, `id_user`, `id_barang`) VALUES
(4, 3, '2017-01-05', '2017-01-07', 6, 11, 33),
(5, 11, '2017-01-18', '2017-01-19', 11, 3, 19),
(6, 11, '2017-01-16', '2017-01-17', 5, 3, 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hp` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `hp`) VALUES
(3, 'user', 'user@user.com', 'user', 5781),
(10, 'joko', 'joko@google.com', 'joko', 7766),
(11, 'pensventory', 'pens@ventory.com', 'pensventory', 218080),
(12, 'maimunah', 'mai@munah@.com', 'maimunah', 1122);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
