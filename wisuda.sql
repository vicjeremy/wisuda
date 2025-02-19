-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2025 at 12:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisuda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_user` int(11) NOT NULL,
  `user` varchar(255) DEFAULT 'Belum Diatur',
  `pass` varchar(255) DEFAULT 'Belum Diatur',
  `email` varchar(255) DEFAULT 'Belum Diatur',
  `level` int(11) DEFAULT 6,
  `reset_token` varchar(255) DEFAULT 'Belum Diatur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id_user`, `user`, `pass`, `email`, `level`, `reset_token`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Belum Diatur', 1, 'Belum Diatur'),
(2, 'akademik', '202cb962ac59075b964b07152d234b70', 'Belum Diatur', 2, 'Belum Diatur'),
(3, 'keuangan', '202cb962ac59075b964b07152d234b70', 'Belum Diatur', 3, 'Belum Diatur'),
(4, 'toga', '202cb962ac59075b964b07152d234b70', 'Belum Diatur', 4, 'Belum Diatur'),
(5, 'foto', '202cb962ac59075b964b07152d234b70', 'Belum Diatur', 5, 'Belum Diatur'),
(6, 'mhs', '202cb962ac59075b964b07152d234b70', 'Belum Diatur', 6, 'Belum Diatur'),
(11, 'A01.051.005', '001d2d283b7f3c7378e363313b483e51', 'Belum Diatur', 6, 'Belum Diatur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT 'Belum Diatur',
  `lok_lahir` varchar(50) DEFAULT 'Belum Diatur',
  `tgl_lahir` varchar(255) DEFAULT 'Belum Diatur',
  `fakultas` varchar(50) DEFAULT 'Belum Diatur',
  `prodi` varchar(50) DEFAULT 'Belum Diatur',
  `ipk` float DEFAULT 0,
  `skripsi` varchar(255) DEFAULT 'Belum Diatur',
  `alamat` varchar(255) DEFAULT 'Belum Diatur',
  `email` varchar(255) DEFAULT 'Belum Diatur',
  `hp` varchar(255) DEFAULT 'Belum Diatur',
  `size` varchar(20) DEFAULT 'Belum Diatur',
  `ambil_toga` int(11) DEFAULT 0,
  `foto_almet` text DEFAULT 'Belum Diatur',
  `foto_keluarga` varchar(255) DEFAULT 'Belum Diatur',
  `sts_foto` int(11) DEFAULT 0,
  `tamu` int(11) DEFAULT 0,
  `sts_wsd` int(11) DEFAULT 0,
  `sts_toga` int(11) DEFAULT 0,
  `sts_tamu` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id_mhs`, `nim`, `nama`, `lok_lahir`, `tgl_lahir`, `fakultas`, `prodi`, `ipk`, `skripsi`, `alamat`, `email`, `hp`, `size`, `ambil_toga`, `foto_almet`, `foto_keluarga`, `sts_foto`, `tamu`, `sts_wsd`, `sts_toga`, `sts_tamu`) VALUES
(1, '123', 'nama', 'smg', '123', 'asd', 'asd', 12, 'asd', 'asd', 'asd', 'asd', 'L', 1, 'https://www.google.com/', 'https://www.google.com/', 2, 1, 1, 1, 1),
(4, 'A01.051.005', 'John Doe', 'Semarang', '120104', 'Sains dan Teknologi', 'Sistem Informasi', 3.5, 'Belum Diatur', 'Belum Diatur', 'Belum Diatur', 'Belum Diatur', 'Belum Diatur', 0, 'Belum Diatur', 'Belum Diatur', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toga`
--

CREATE TABLE `tbl_toga` (
  `id_toga` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `baju` int(11) DEFAULT 0,
  `topi` int(11) DEFAULT 0,
  `skecel` int(11) DEFAULT 0,
  `samir` int(11) DEFAULT 0,
  `logo` int(11) DEFAULT 0,
  `selendang` varchar(255) DEFAULT 'Belum Diatur',
  `sts_selendang` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_toga`
--

INSERT INTO `tbl_toga` (`id_toga`, `nim`, `baju`, `topi`, `skecel`, `samir`, `logo`, `selendang`, `sts_selendang`) VALUES
(1, '123', 1, 1, 1, 1, 1, 'Cumlaude', 1),
(5, 'A01.051.005', 0, 0, 0, 0, 0, 'Belum Diatur', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tbl_toga`
--
ALTER TABLE `tbl_toga`
  ADD PRIMARY KEY (`id_toga`),
  ADD KEY `nim_toga` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_toga`
--
ALTER TABLE `tbl_toga`
  MODIFY `id_toga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_toga`
--
ALTER TABLE `tbl_toga`
  ADD CONSTRAINT `nim_toga` FOREIGN KEY (`nim`) REFERENCES `tbl_mhs` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
