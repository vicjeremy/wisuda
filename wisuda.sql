-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2025 at 08:20 AM
-- Server version: 8.4.3
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
  `id_user` int NOT NULL,
  `user` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `level` int DEFAULT NULL,
  `reset_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id_user`, `user`, `pass`, `email`, `level`, `reset_token`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', NULL, 1, NULL),
(2, 'akademik', '202cb962ac59075b964b07152d234b70', NULL, 2, NULL),
(3, 'keuangan', '202cb962ac59075b964b07152d234b70', NULL, 3, NULL),
(4, 'toga', '202cb962ac59075b964b07152d234b70', NULL, 4, NULL),
(5, 'foto', '202cb962ac59075b964b07152d234b70', NULL, 5, NULL),
(6, 'mhs', '202cb962ac59075b964b07152d234b70', NULL, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `lok_lahir` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `tgl_lahir` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `fakultas` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `prodi` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `skripsi` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `hp` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `size` varchar(5) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `ambil_toga` int DEFAULT NULL,
  `foto_almet` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `foto_keluarga` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `sts_foto` int DEFAULT NULL,
  `tamu` int DEFAULT NULL,
  `sts_wsd` int DEFAULT NULL,
  `sts_toga` int DEFAULT NULL,
  `sts_tamu` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`nim`, `nama`, `lok_lahir`, `tgl_lahir`, `fakultas`, `prodi`, `ipk`, `skripsi`, `alamat`, `email`, `hp`, `size`, `ambil_toga`, `foto_almet`, `foto_keluarga`, `sts_foto`, `tamu`, `sts_wsd`, `sts_toga`, `sts_tamu`) VALUES
('123', 'nama', 'smg', '123', 'asd', 'asd', 123, 'asd', 'asd', 'asd', 'asd', 'L', 1, 'https://www.google.com/', 'https://www.google.com/', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toga`
--

CREATE TABLE `tbl_toga` (
  `id_toga` int NOT NULL,
  `nim` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `baju` int DEFAULT NULL,
  `topi` int DEFAULT NULL,
  `skecel` int DEFAULT NULL,
  `samir` int DEFAULT NULL,
  `logo` int DEFAULT NULL,
  `selendang` varchar(255) DEFAULT NULL,
  `sts_selendang` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_toga`
--

INSERT INTO `tbl_toga` (`id_toga`, `nim`, `baju`, `topi`, `skecel`, `samir`, `logo`, `selendang`, `sts_selendang`) VALUES
(1, '123', 1, 1, 1, 1, 1, 'Cumlaude', 1);

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
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_toga`
--
ALTER TABLE `tbl_toga`
  ADD PRIMARY KEY (`id_toga`),
  ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_toga`
--
ALTER TABLE `tbl_toga`
  MODIFY `id_toga` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_toga`
--
ALTER TABLE `tbl_toga`
  ADD CONSTRAINT `nim` FOREIGN KEY (`nim`) REFERENCES `tbl_mhs` (`nim`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
