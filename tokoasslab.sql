-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 05:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoasslab`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `idlevel` int(10) NOT NULL,
  `namalevel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(5) NOT NULL,
  `namaplg` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `namaplg`, `email`, `telepon`, `alamat`) VALUES
('PLG02', 'Permata Asa', 'asaaitika@gmail.com', '0896623487', 'Kelapa Gading');

-- --------------------------------------------------------

--
-- Table structure for table `poduk`
--

CREATE TABLE `poduk` (
  `id_produk` varchar(5) NOT NULL,
  `namaprd` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poduk`
--

INSERT INTO `poduk` (`id_produk`, `namaprd`, `harga`, `satuan`, `img`, `deskripsi`) VALUES
('PRK01', '', 0, 0, '', ''),
('PRK02', '', 0, 0, '', ''),
('PRK03', 'Tempat Pensil', 20000, 5, 'pencils.jpg', 'Warna-warni'),
('PRK04', 'Botol Minum Aqua', 10000, 5, 'trashcan-empty-icon.png', 'aslinya tempat sampah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` varchar(50) NOT NULL,
  `namauser` varchar(45) NOT NULL,
  `divisi` varchar(45) NOT NULL,
  `status` varchar(2) NOT NULL,
  `level` enum('admin','pelanggan','','') NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `namauser`, `divisi`, `status`, `level`, `password`) VALUES
('asaaitika@gmail.com', 'Permata', 'Marketing', '1', 'admin', 'tes123'),
('rominamanik12@gmail.com', 'Romina', 'Consultant', '1', 'pelanggan', 'romrom12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `poduk`
--
ALTER TABLE `poduk`
  ADD PRIMARY KEY (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
