-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 07:13 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kostku`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_11_24_070400_create_tb_account_table', 1),
(4, '2019_11_24_070520_create_tb_additionals_table', 1),
(5, '2019_11_24_070638_create_tb_items_table', 1),
(6, '2019_11_24_070659_create_tb_kamar_table', 1),
(7, '2019_11_24_070714_create_tb_pembayaran_table', 1),
(8, '2019_11_24_070732_create_tb_pembayaran_det_table', 1),
(9, '2019_11_24_070755_create_tb_user_table', 1),
(10, '2019_11_26_073525_add_soft_deletes_to_tb_user_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE `tb_account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`id`, `username`, `password`, `level`, `nik`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$PcQNmRj3oytnfDCrnt80XOazu2G2t5O.Kif1ZIuxf/buuL64YCtTe', '1', NULL, NULL, '2019-11-24 01:12:13', '2019-11-24 01:12:13'),
(2, 'daniel', '$2y$10$TQUyiagqKi/m/4JZdyH7gO8Osg8Fg3IM1wKbKqiGtccBGhJyJSyV6', '0', '2134567809897856', NULL, '2019-11-24 01:12:50', '2019-11-24 01:12:50'),
(3, 'helvin', '$2y$10$QYthI/1.U6bo925tGmrX.uIzhOBKNW/XXUPpfAfvDYqeyrUP1YPP2', '0', '2134567809897858', NULL, '2019-11-24 01:13:52', '2019-11-24 01:13:52'),
(5, 'bayu', '$2y$10$AzJy4Gr8GMUZzSnQdYTlCOV1Aq00mplg/jsUv2fPYacjbXwnJy.2G', '0', NULL, NULL, '2019-11-26 00:44:18', '2019-11-26 00:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_additionals`
--

CREATE TABLE `tb_additionals` (
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_additionals`
--

INSERT INTO `tb_additionals` (`nik`, `id_item`) VALUES
('2134567809897856', 3),
('2134567809897856', 6),
('2134567809897858', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_items`
--

CREATE TABLE `tb_items` (
  `id_item` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_items`
--

INSERT INTO `tb_items` (`id_item`, `nama`, `harga`) VALUES
(1, 'Kulkas', 50000),
(2, 'AC', 50000),
(3, 'Dispenser', 30000),
(4, 'TV', 30000),
(5, 'PC', 25000),
(6, 'Laptop', 25000),
(7, 'Rice Cooker', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `harga`) VALUES
(1, 600000),
(2, 600000),
(3, 600000),
(4, 600000),
(5, 600000),
(6, 600000),
(7, 600000),
(8, 600000),
(9, 600000),
(10, 600000),
(11, 600000),
(12, 600000),
(13, 600000),
(14, 600000),
(15, 600000),
(16, 600000),
(17, 600000),
(18, 600000),
(19, 600000),
(20, 600000),
(21, 600000),
(22, 600000),
(23, 600000),
(24, 600000),
(25, 600000),
(26, 600000),
(27, 600000),
(28, 600000),
(29, 600000),
(30, 600000),
(31, 600000),
(32, 600000),
(33, 600000),
(34, 600000),
(35, 600000),
(36, 600000),
(37, 600000),
(38, 600000),
(39, 600000),
(40, 600000),
(41, 600000),
(42, 600000),
(43, 600000),
(44, 600000),
(45, 600000),
(46, 600000),
(47, 600000),
(48, 600000),
(49, 600000),
(50, 600000),
(51, 600000),
(52, 600000),
(53, 600000),
(54, 600000),
(55, 600000),
(56, 600000),
(57, 600000),
(58, 600000),
(59, 600000),
(60, 600000),
(61, 600000),
(62, 600000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pay` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pay`, `tanggal`, `total`, `nik`) VALUES
('5-112019', '2019-11-24', 655000, '2134567809897856'),
('6-112019', '2019-11-23', 625000, '2134567809897858');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran_det`
--

CREATE TABLE `tb_pembayaran_det` (
  `id_pay` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_det` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pembayaran_det`
--

INSERT INTO `tb_pembayaran_det` (`id_pay`, `pay_det`, `harga`) VALUES
('5-112019', 'Kamar', 600000),
('5-112019', 'Dispenser', 30000),
('5-112019', 'Laptop', 25000),
('6-112019', 'Kamar', 600000),
('6-112019', 'PC', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wali` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `id_kamar` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nik`, `nama`, `kontak`, `wali`, `alamat`, `status`, `id_kamar`, `updated_at`, `deleted_at`) VALUES
('2134567809897856', 'daniel', '082138383812', '082138383812', 'Jl. Medan Merdeka Timur', '1', 5, NULL, NULL),
('2134567809897858', 'jessi', '082138383812', '082138383812', 'Jl. Medan Merdeka Timur', '1', 6, '2019-11-26 00:39:36', '2019-11-26 00:39:36'),
('8732671298096543', 'Rehuel', '089768648665', '089768648665', 'Jl. Medan Merdeka Selatan', '1', 26, '2019-11-26 00:50:02', '2019-11-26 00:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_booking`
--

CREATE TABLE `tmp_booking` (
  `id_booking` varchar(255) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `wali` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `foto` varchar(255) DEFAULT NULL,
  `validasi` varchar(255) NOT NULL DEFAULT 'wait.jpg',
  `harga` int(11) NOT NULL DEFAULT 600000
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_booking_add`
--

CREATE TABLE `tmp_booking_add` (
  `id_booking` varchar(255) NOT NULL,
  `id_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_account_username_unique` (`username`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_additionals`
--
ALTER TABLE `tb_additionals`
  ADD KEY `nik` (`nik`),
  ADD KEY `id_item` (`id_item`);

--
-- Indexes for table `tb_items`
--
ALTER TABLE `tb_items`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pay`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_pembayaran_det`
--
ALTER TABLE `tb_pembayaran_det`
  ADD KEY `id_pay` (`id_pay`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `tmp_booking`
--
ALTER TABLE `tmp_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `tmp_booking_add`
--
ALTER TABLE `tmp_booking_add`
  ADD KEY `id_booking` (`id_booking`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_account`
--
ALTER TABLE `tb_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_items`
--
ALTER TABLE `tb_items`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD CONSTRAINT `tb_account_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_additionals`
--
ALTER TABLE `tb_additionals`
  ADD CONSTRAINT `tb_additionals_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_additionals_ibfk_2` FOREIGN KEY (`id_item`) REFERENCES `tb_items` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pembayaran_det`
--
ALTER TABLE `tb_pembayaran_det`
  ADD CONSTRAINT `tb_pembayaran_det_ibfk_1` FOREIGN KEY (`id_pay`) REFERENCES `tb_pembayaran` (`id_pay`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tb_kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tmp_booking_add`
--
ALTER TABLE `tmp_booking_add`
  ADD CONSTRAINT `tmp_booking_add_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `tmp_booking` (`id_booking`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `hapusbooking` ON SCHEDULE EVERY '0:48' HOUR_MINUTE STARTS '2019-11-24 20:37:06' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM tmp_booking WHERE tgl_ex < NOW()$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
