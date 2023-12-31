-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 03:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_adi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `nama_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`, `nama_admin`) VALUES
(1, 'admin1', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', 'ADMIN 1.0'),
(2, 'admin1', '315f166c5aca63a157f7d41007675cb44a948b33', 'ADMIN 1.0');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(11) NOT NULL,
  `id_perusahaan` int(11) DEFAULT NULL,
  `username_operator` varchar(30) DEFAULT NULL,
  `password_operator` varchar(45) DEFAULT NULL,
  `nama_operator` varchar(100) DEFAULT NULL,
  `nik_operator` varchar(20) DEFAULT NULL,
  `hp_operator` varchar(15) DEFAULT NULL,
  `alamat_operator` text DEFAULT NULL,
  `email_operator` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `id_perusahaan`, `username_operator`, `password_operator`, `nama_operator`, `nik_operator`, `hp_operator`, `alamat_operator`, `email_operator`) VALUES
(1, 1, 'pacebiak', '90b0f079f30972647ead27d4e7443e92864673bc', 'pace biak', '1223036351244', '097365543', 'Jl. Wijaya Jayapura', 'ad@gmail.com'),
(3, 2, 'pacewamena', '64ce6b9109a8e924263182dd1b28b2b10b7db12e', 'windewani', '855167889446', '018233685568', 'wamena', 'winde@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `npwp_perusahaan` varchar(23) DEFAULT NULL,
  `email_perusahaan` varchar(50) DEFAULT NULL,
  `hp_perusahaan` varchar(15) DEFAULT NULL,
  `alamat_perusahaan` text DEFAULT NULL,
  `nama_direktur` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `npwp_perusahaan`, `email_perusahaan`, `hp_perusahaan`, `alamat_perusahaan`, `nama_direktur`) VALUES
(1, 'Perusahaan1', '25.4869.85452.365', 'perusahaan1@gmail.com', '082399282895', 'Jayapura , waena', 'Bayu nasition'),
(2, 'perusahaan2', '25.4869.85452.380', 'perusahaan2@gmail.com', '08239998983', 'Kotaraja Jayapura', 'Okta');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `id_operator` int(11) DEFAULT NULL,
  `nama_surat` varchar(100) DEFAULT NULL,
  `file_surat` varchar(100) DEFAULT NULL,
  `tanggal_upload` datetime DEFAULT NULL,
  `catatan_surat` text DEFAULT NULL,
  `status_surat` enum('disetujui','ditolak','pending') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `id_operator`, `nama_surat`, `file_surat`, `tanggal_upload`, `catatan_surat`, `status_surat`) VALUES
(1, 1, 'Surat Verifikasi', 'Surat.pdf', '2023-09-08 16:24:14', '', 'disetujui'),
(3, 1, 'surat ver', 'Penempatan_Alam1.pdf', '2023-09-26 16:56:40', 'tidak ada catatan', 'disetujui'),
(6, 2, 'Penempatan', 'Penempatan_GANISH_Adi_CV__Fadhila_Papua_Lestari2.pdf', '2023-09-29 14:41:36', NULL, 'ditolak'),
(8, 1, 'tanah kapling', NULL, '2023-10-10 14:43:53', 'tidak ada file surat', 'ditolak'),
(9, 1, 'Penempatan', NULL, '2023-10-10 15:35:34', 'tidak ada catatan loss', 'ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `user_dinas`
--

CREATE TABLE `user_dinas` (
  `id_user_dinas` int(11) NOT NULL,
  `username_user_dinas` varchar(40) DEFAULT NULL,
  `password_user_dinas` varchar(40) DEFAULT NULL,
  `nama_user_dinas` varchar(100) DEFAULT NULL,
  `nik_user_dinas` varchar(20) DEFAULT NULL,
  `hp_user_dinas` varchar(15) DEFAULT NULL,
  `email_user_dinas` varchar(40) DEFAULT NULL,
  `foto_user_dinas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_dinas`
--

INSERT INTO `user_dinas` (`id_user_dinas`, `username_user_dinas`, `password_user_dinas`, `nama_user_dinas`, `nik_user_dinas`, `hp_user_dinas`, `email_user_dinas`, `foto_user_dinas`) VALUES
(1, 'dinas1', '34e391ba317f7c571c7d74b088cb1159aec4be82', 'Dinas Provinsi Kehutanan dan Lingkungan Hidup', '15222256998756', '082455568445', 'dishutprov.papua@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user_dinas`
--
ALTER TABLE `user_dinas`
  ADD PRIMARY KEY (`id_user_dinas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_dinas`
--
ALTER TABLE `user_dinas`
  MODIFY `id_user_dinas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
