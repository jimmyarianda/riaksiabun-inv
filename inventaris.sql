-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 06:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` enum('masuk','keluar') NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `id_user`, `id_jenis`, `id_satuan`, `jumlah`, `total`, `status`, `created_at`) VALUES
(6, 1, 1, 1, 5, 5, 'masuk', '2022-04-06 19:38:09'),
(7, 1, 2, 2, 2, 2, 'masuk', '2022-04-06 19:40:00'),
(20, 1, 6, 2, 2, 2, 'keluar', '2022-04-12 04:12:39'),
(24, 1, 2, 2, 2, 0, 'keluar', '2022-04-12 05:53:10'),
(26, 1, 1, 1, 2, 0, 'keluar', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama_jen` varchar(255) NOT NULL,
  `deskripsi_jen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `nama_jen`, `deskripsi_jen`) VALUES
(1, 'ATK', 'Alat Tulis Kantor'),
(2, 'Kursi', 'Furnitur (Tempat Duduk)'),
(6, 'PC', 'Personal Computer');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id` int(11) NOT NULL,
  `nama_sat` varchar(255) NOT NULL,
  `deskripsi_sat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id`, `nama_sat`, `deskripsi_sat`) VALUES
(1, 'RIM', 'Unit Dalam Satuan Rim'),
(2, 'Buah', 'Unit Dalam Satuan Buah'),
(4, 'Biji', 'Unit Dalam Satuan Biji');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL,
  `usr_username` varchar(50) NOT NULL,
  `usr_password` varchar(255) NOT NULL,
  `usr_nama` varchar(100) NOT NULL,
  `usr_level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_id`, `usr_username`, `usr_password`, `usr_nama`, `usr_level`) VALUES
(1, 'admin', '$2y$10$J9f8U7KiXnQ0BeM3Jl5DhuANl3Oawu57P6N2z8w3kaGhTl/5kGeUO', 'Jimmy Arianda Bahari', 'Admin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_barang`
-- (See below for the actual view)
--
CREATE TABLE `view_barang` (
`id` int(11)
,`usr_nama` varchar(100)
,`nama_jen` varchar(255)
,`nama_sat` varchar(255)
,`jumlah` int(11)
,`status` enum('masuk','keluar')
);

-- --------------------------------------------------------

--
-- Structure for view `view_barang`
--
DROP TABLE IF EXISTS `view_barang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_barang`  AS SELECT `b`.`id` AS `id`, `u`.`usr_nama` AS `usr_nama`, `j`.`nama_jen` AS `nama_jen`, `s`.`nama_sat` AS `nama_sat`, `b`.`jumlah` AS `jumlah`, `b`.`status` AS `status` FROM (((`barang` `b` join `user` `u` on(`b`.`id_user` = `u`.`usr_id`)) join `jenis` `j` on(`b`.`id_jenis` = `j`.`id`)) join `satuan` `s` on(`b`.`id_satuan` = `s`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_satuan` (`id_satuan`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_fk1` FOREIGN KEY (`id_user`) REFERENCES `user` (`usr_id`),
  ADD CONSTRAINT `barang_fk2` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id`),
  ADD CONSTRAINT `barang_fk3` FOREIGN KEY (`id_satuan`) REFERENCES `satuan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
