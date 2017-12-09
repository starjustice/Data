-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 11:17 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pondok_makan_roji`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `Id_order` bigint(255) NOT NULL,
  `Id_staff` bigint(10) NOT NULL,
  `Status_pembayaran` enum('YES','NO') NOT NULL,
  `Waktu_pembayaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id_menu` bigint(10) NOT NULL,
  `Nama_menu` char(30) NOT NULL,
  `Id_tipe_makanan` int(5) NOT NULL,
  `Keterangan_makanan` text,
  `Gambar_makanan` blob,
  `Harga_makanan` int(10) NOT NULL,
  `Top` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id_menu`, `Nama_menu`, `Id_tipe_makanan`, `Keterangan_makanan`, `Gambar_makanan`, `Harga_makanan`, `Top`) VALUES
(1, 'Paket Hemat (nasi putih)', 1, 'Nasi Putih\r\nDada Goreng Polong\r\nTahu Goreng\r\nTempe Goreng\r\nLalapan\r\n', NULL, 16, 'No'),
(2, 'Nasi Goreng Ala Roji', 2, NULL, NULL, 18, 'No'),
(3, 'Nasi Goreng Spesial', 2, NULL, NULL, 22, 'No'),
(5, 'Nasi Goreng Pete', 2, NULL, NULL, 20, 'No'),
(6, 'Jus Alpukat Susu Coklat', 3, NULL, NULL, 12, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `orderan`
--

CREATE TABLE `orderan` (
  `Id_order` bigint(255) NOT NULL,
  `Tanggal_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Nomor_meja` int(5) NOT NULL,
  `Total_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `orderan`
--

INSERT INTO `orderan` (`Id_order`, `Tanggal_order`, `Nomor_meja`, `Total_harga`) VALUES
(2, '2017-09-12 10:33:26', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `Id_order` bigint(20) NOT NULL,
  `Id_menu` bigint(11) NOT NULL,
  `Jumlah_pesanan` int(11) NOT NULL,
  `Harga` int(10) NOT NULL,
  `Status_makanan` enum('YES','NO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `Id_promo` bigint(20) NOT NULL,
  `Tanggal_mulai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Tanggal_selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Id_menu` bigint(20) DEFAULT NULL,
  `Potongan_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Id_staff` bigint(10) NOT NULL,
  `Nama_staff` char(30) NOT NULL,
  `Password` char(30) DEFAULT NULL,
  `Posisi` enum('Cashier','Koki','Manager','Owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Id_staff`, `Nama_staff`, `Password`, `Posisi`) VALUES
(1, 'Ruri', '000', '');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_makanan`
--

CREATE TABLE `tipe_makanan` (
  `Id_tipe_makanan` int(5) NOT NULL,
  `Jenis_tipe` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_makanan`
--

INSERT INTO `tipe_makanan` (`Id_tipe_makanan`, `Jenis_tipe`) VALUES
(1, 'menu paket'),
(2, 'menu satuan'),
(3, 'minuman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD KEY `Id_order` (`Id_order`),
  ADD KEY `kasir_ibfk_2` (`Id_staff`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id_menu`),
  ADD KEY `ID` (`Id_menu`),
  ADD KEY `Tipe_makanan` (`Id_tipe_makanan`);

--
-- Indexes for table `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`Id_order`),
  ADD UNIQUE KEY `ID_transaksi` (`Id_order`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD KEY `ID_Order` (`Id_order`),
  ADD KEY `ID_makanan` (`Id_menu`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`Id_promo`),
  ADD KEY `Id_menu` (`Id_menu`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Id_staff`),
  ADD UNIQUE KEY `ID_cashier` (`Password`);

--
-- Indexes for table `tipe_makanan`
--
ALTER TABLE `tipe_makanan`
  ADD PRIMARY KEY (`Id_tipe_makanan`),
  ADD UNIQUE KEY `ID` (`Id_tipe_makanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id_menu` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orderan`
--
ALTER TABLE `orderan`
  MODIFY `Id_order` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `Id_promo` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Id_staff` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tipe_makanan`
--
ALTER TABLE `tipe_makanan`
  MODIFY `Id_tipe_makanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kasir`
--
ALTER TABLE `kasir`
  ADD CONSTRAINT `kasir_ibfk_1` FOREIGN KEY (`Id_order`) REFERENCES `orderan` (`Id_order`),
  ADD CONSTRAINT `kasir_ibfk_2` FOREIGN KEY (`Id_staff`) REFERENCES `staff` (`Id_staff`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`Id_tipe_makanan`) REFERENCES `tipe_makanan` (`Id_tipe_makanan`);

--
-- Constraints for table `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`Id_order`) REFERENCES `orderan` (`Id_order`),
  ADD CONSTRAINT `order_list_ibfk_2` FOREIGN KEY (`Id_menu`) REFERENCES `menu` (`Id_menu`);

--
-- Constraints for table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`Id_menu`) REFERENCES `menu` (`Id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
