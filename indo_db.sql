-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2023 at 09:38 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_customer`
--

DROP TABLE IF EXISTS `data_customer`;
CREATE TABLE IF NOT EXISTS `data_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `kredit` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `contactname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat1` varchar(255) NOT NULL,
  `alamat2` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `sales` varchar(255) NOT NULL,
  `bataskredit` varchar(255) NOT NULL,
  `top` varchar(255) NOT NULL,
  `namapt` varchar(255) NOT NULL,
  `sppn` varchar(255) NOT NULL,
  `saldokredit` varchar(255) NOT NULL,
  `cabang` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_customer`
--

INSERT INTO `data_customer` (`id`, `kode`, `tipe`, `kredit`, `nama`, `telp`, `fax`, `ktp`, `hp`, `contactname`, `email`, `alamat1`, `alamat2`, `kota`, `kodepos`, `npwp`, `sales`, `bataskredit`, `top`, `namapt`, `sppn`, `saldokredit`, `cabang`, `create_at`) VALUES
(2, 'CS.000001', '5', 'K', 'CV MULTI CAHAYA ABADI', '0251-9201747', 'Fax', 'KTP', 'hp', 'CAHYADI', 'mdsimulhosen.temp@gmail.com', 'RAYA KEMANG 557', 'Alamat 2', 'BOGOR', 'Kode Pos', 'npwp', '2', 'BATA', 'T.O.P', 'PT', 'Y', 'saldokredit', '02', '2023-04-30 14:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

DROP TABLE IF EXISTS `suplier`;
CREATE TABLE IF NOT EXISTS `suplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(11) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `alamat1` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `alamat2` varchar(255) NOT NULL,
  `contactname` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `pkp` varchar(255) NOT NULL,
  `top` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id`, `kode`, `telp`, `npwp`, `nama`, `fax`, `alamat1`, `hp`, `alamat2`, `contactname`, `kota`, `email`, `kodepos`, `pkp`, `top`, `create_at`) VALUES
(2, 'SP.000002', '0251-9201747', 'npwp', 'CV MULTI CAHAYA ABADI', 'Fax', 'RAYA KEMANG 557', 'Nomor np', 'Alamat 2', 'CAHYADI', 'BOGOR', 'nimatov837@subdito.com', 'kodepos', 'T', 'T.O.P', '2023-04-29 15:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembelian_laporan`
--

DROP TABLE IF EXISTS `tbl_pembelian_laporan`;
CREATE TABLE IF NOT EXISTS `tbl_pembelian_laporan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_laporan` varchar(255) DEFAULT NULL,
  `suplier` varchar(255) DEFAULT NULL,
  `mulai` varchar(255) DEFAULT NULL,
  `sd` varchar(255) DEFAULT NULL,
  `barang` varchar(255) DEFAULT NULL,
  `cabang` varchar(255) DEFAULT NULL,
  `submit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
