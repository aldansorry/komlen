-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 09:38 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komlen`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(11) NOT NULL,
  `kode` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `judul` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `fk_mahasiswa` int(11) NOT NULL,
  `fk_lingkup_keluhan` int(11) NOT NULL,
  `fk_unit_kerja` int(11) NOT NULL,
  `is_readed` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id`, `kode`, `tanggal`, `judul`, `keluhan`, `solusi`, `status`, `fk_mahasiswa`, `fk_lingkup_keluhan`, `fk_unit_kerja`, `is_readed`) VALUES
(1, 'KEL1', '2018-01-17 00:00:00', '1', '1', '1', 1, 2, 1, 1, 1),
(2, 'KEL2', '2018-01-30 00:00:00', '222', '2', '2', 1, 2, 1, 1, 1),
(3, 'KEL3', '2018-02-22 00:00:00', 'Keluhan1', 'Kamar mandi kotor', 'tlg bersihin', 1, 3, 1, 1, 1),
(4, 'KEL4', '2018-03-31 00:00:00', 'Kamar Mandi Kotor', 'bauuuuu', 'dibershin y', 1, 5, 1, 1, 1),
(5, 'KEL5', '2018-05-31 00:00:00', 'Kebersihan', 'asd', 'asd', 1, 2, 1, 1, 0),
(6, 'KEL6', '2018-10-25 00:00:00', 'Kotor', 'Kurang Bersih', 'Dibersihkan', 1, 4, 1, 2, 0),
(7, 'KEL7', '2018-11-07 00:00:00', '1', '2', '2', 1, 2, 2, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama`) VALUES
(1, 'admin'),
(2, 'operator'),
(3, 'responser');

-- --------------------------------------------------------

--
-- Table structure for table `lingkup_keluhan`
--

CREATE TABLE `lingkup_keluhan` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lingkup_keluhan`
--

INSERT INTO `lingkup_keluhan` (`id`, `kode`, `nama`) VALUES
(1, 'LK1', 'Lingkungan'),
(2, 'LK2', 'Kegiatan Belajar Mengajar');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `alamat`, `telp`, `email`, `username`, `password`) VALUES
(2, '1', '1', '1', '1', '1@asd.com', '1', 'c4ca4238a0b923820dcc509a6f75849b'),
(3, '2352342342', 'Aldhan', 'Lumajang', '0899898', 'aldansorry@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, '181031000004', 'dita', 'malang', '082245414188', 'frtiarad@gmail.com', 'dita', '104ba663a9ecd58a552be12051ee1513'),
(5, '181031000005', 'JelitaSekarMelati', 'Magetan', '08899282288', 'jelitasm@gmail.com', 'jelita', '222609554b94fcf8a0befd7c3ce47b03');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nik` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nik`, `nama`, `alamat`, `telp`, `email`, `username`, `password`, `fk_level`) VALUES
(1, '112312312123', 'asd', '1', '1', '1@asd.com', '1', '96e79218965eb72c92a549dd5a330112', 1);

-- --------------------------------------------------------

--
-- Table structure for table `respon`
--

CREATE TABLE `respon` (
  `id` int(11) NOT NULL,
  `balasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_keluhan` int(11) NOT NULL,
  `fk_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `respon`
--

INSERT INTO `respon` (`id`, `balasan`, `fk_keluhan`, `fk_petugas`) VALUES
(1, '1111111', 1, 1),
(2, '1222', 1, 1),
(3, '2222', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id` int(11) NOT NULL,
  `kode` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_kerja`
--

INSERT INTO `unit_kerja` (`id`, `kode`, `nama`) VALUES
(1, 'UK1', 'Gedung AF'),
(2, 'UK6', 'Gedung AG'),
(3, 'UK7', 'Sipil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `fk_mahasiswa` (`fk_mahasiswa`),
  ADD KEY `fk_lingkup_keluhan` (`fk_lingkup_keluhan`),
  ADD KEY `fk_unit_kerja` (`fk_unit_kerja`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lingkup_keluhan`
--
ALTER TABLE `lingkup_keluhan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `fk_level` (`fk_level`);

--
-- Indexes for table `respon`
--
ALTER TABLE `respon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_keluhan` (`fk_keluhan`),
  ADD KEY `fk_petugas` (`fk_petugas`);

--
-- Indexes for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lingkup_keluhan`
--
ALTER TABLE `lingkup_keluhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `respon`
--
ALTER TABLE `respon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`fk_unit_kerja`) REFERENCES `unit_kerja` (`id`),
  ADD CONSTRAINT `keluhan_ibfk_2` FOREIGN KEY (`fk_lingkup_keluhan`) REFERENCES `lingkup_keluhan` (`id`),
  ADD CONSTRAINT `keluhan_ibfk_3` FOREIGN KEY (`fk_mahasiswa`) REFERENCES `mahasiswa` (`id`);

--
-- Constraints for table `respon`
--
ALTER TABLE `respon`
  ADD CONSTRAINT `respon_ibfk_1` FOREIGN KEY (`fk_petugas`) REFERENCES `petugas` (`id`),
  ADD CONSTRAINT `respon_ibfk_2` FOREIGN KEY (`fk_keluhan`) REFERENCES `keluhan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
