-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 07:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mixue`
--

-- --------------------------------------------------------

--
-- Table structure for table `mixuepwt`
--

CREATE TABLE `mixuepwt` (
  `id_mixue` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mixuepwt`
--

INSERT INTO `mixuepwt` (`id_mixue`, `name`, `kategori`, `website`, `instagram`, `alamat`, `kota`, `provinsi`, `latitude`, `longitude`) VALUES
(1, 'Mixue Alun - alun Purwokerto', 'F&B', 'en.mxbc.com', 'mixuepurwokerto', 'Jl. Masjid No.43, Purwokerto, Sokanegara, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53115', 'Purwokerto', 'Jawa Tengah', '-7.420680', '109.229569'),
(2, 'Mixue Unsoed Purwokerto', 'F&B', 'en.mxbc.com', 'mixuepurwokerto', 'HR Bunyamin 6, Jawa Tengah 53121', 'Purwokerto', 'Jawa Tengah', '-7.405895', '109.245190'),
(3, 'MIXUE PURWOKERTO UMP', 'F&B', 'en.mxbc.com', 'mixuepurwokerto', 'Jl. Senopati No.40, Dusun IV, Dukuhwaluh, Kec. Kembaran, Kabupaten Banyumas, Jawa Tengah 53182', 'Purwokerto', 'Jawa Tengah', '-7.413640', '109.268021'),
(4, 'Mixue Karang Lewas', 'F&B', 'en.mxbc.com', 'mixuepurwokerto', 'Jl. Patimura No.256, Dusun II, Karanglewas Lor, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53136', 'Purwokerto', 'Jawa Tengah', '-7.419557', '109.197491');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mixuepwt`
--
ALTER TABLE `mixuepwt`
  ADD PRIMARY KEY (`id_mixue`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
