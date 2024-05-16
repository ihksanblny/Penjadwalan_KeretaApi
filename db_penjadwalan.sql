-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2024 at 05:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjadwalan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kode`
--

CREATE TABLE `tb_kode` (
  `kode_tiket` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjadwalan`
--

CREATE TABLE `tb_penjadwalan` (
  `kode_tiket` varchar(15) NOT NULL,
  `nama_kereta` varchar(30) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `keberangkatan` int NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kode`
--
ALTER TABLE `tb_kode`
  ADD KEY `kode_tiket` (`kode_tiket`);

--
-- Indexes for table `tb_penjadwalan`
--
ALTER TABLE `tb_penjadwalan`
  ADD PRIMARY KEY (`kode_tiket`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kode`
--
ALTER TABLE `tb_kode`
  ADD CONSTRAINT `tb_kode_ibfk_1` FOREIGN KEY (`kode_tiket`) REFERENCES `tb_penjadwalan` (`kode_tiket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
