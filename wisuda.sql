-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Feb 2025 pada 15.10
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

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
-- Struktur dari tabel `tbl_akun`
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
-- Dumping data untuk tabel `tbl_akun`
--

INSERT INTO `tbl_akun` (`id_user`, `user`, `pass`, `email`, `level`, `reset_token`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Belum Diatur', 1, 'Belum Diatur'),
(2, 'akademik', '202cb962ac59075b964b07152d234b70', 'Belum Diatur', 2, 'Belum Diatur'),
(3, 'keuangan', '202cb962ac59075b964b07152d234b70', 'Belum Diatur', 3, 'Belum Diatur'),
(4, 'toga', '202cb962ac59075b964b07152d234b70', 'Belum Diatur', 4, 'Belum Diatur'),
(5, 'foto', '202cb962ac59075b964b07152d234b70', 'Belum Diatur', 5, 'Belum Diatur'),
(6, 'mhs', '202cb962ac59075b964b07152d234b70', 'mhs@unkartur.com', 6, 'Belum Diatur'),
(16, 'A01.051.005', '001d2d283b7f3c7378e363313b483e51', 'Belum Diatur', 6, 'Belum Diatur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhs`
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
  `sts_tamu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id_mhs`, `nim`, `nama`, `lok_lahir`, `tgl_lahir`, `fakultas`, `prodi`, `ipk`, `skripsi`, `alamat`, `email`, `hp`, `size`, `ambil_toga`, `foto_almet`, `foto_keluarga`, `sts_foto`, `tamu`, `sts_wsd`, `sts_toga`, `sts_tamu`) VALUES
(1, 'mhs', 'nama', 'smg', '050225', 'asd', 'asd', 4, 'asd', 'Semarang', 'mhs@unkartur.com', '01234567890', 'XL', 1, 'https://drive.google.com/file/d/1C5qx80Wm10BQjQPBrcuNH44yYnvIZEEF/view?usp=sharing', 'https://drive.google.com/file/d/1C5qx80Wm10BQjQPBrcuNH44yYnvIZEEF/view?usp=sharing', 3, 1, 0, 1, 0),
(8, 'A01.051.005', 'John Doe', 'Semarang', '120104', 'Sains dan Teknologi', 'Sistem Informasi', 3.5, 'Belum Diatur', 'Belum Diatur', 'Belum Diatur', 'Belum Diatur', 'Belum Diatur', 0, 'Belum Diatur', 'Belum Diatur', 3, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_toga`
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
-- Dumping data untuk tabel `tbl_toga`
--

INSERT INTO `tbl_toga` (`id_toga`, `nim`, `baju`, `topi`, `skecel`, `samir`, `logo`, `selendang`, `sts_selendang`) VALUES
(1, 'mhs', 1, 1, 0, 1, 1, 'Cumlaude', 1),
(4, 'A01.051.005', 0, 0, 0, 0, 0, 'Belum Diatur', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id_mhs`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indeks untuk tabel `tbl_toga`
--
ALTER TABLE `tbl_toga`
  ADD PRIMARY KEY (`id_toga`),
  ADD KEY `nimToga` (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_toga`
--
ALTER TABLE `tbl_toga`
  MODIFY `id_toga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_toga`
--
ALTER TABLE `tbl_toga`
  ADD CONSTRAINT `nimToga` FOREIGN KEY (`nim`) REFERENCES `tbl_mhs` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
