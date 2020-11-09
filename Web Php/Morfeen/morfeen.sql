-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 01:14 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morfeen`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `idadd` int(11) NOT NULL,
  `idcus` varchar(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`idadd`, `idcus`, `jenis`, `warna`, `size`, `harga`, `gambar`) VALUES
(60, '11', 'Hoodie', 'Hitam', 'M', 295000, 'g6.jpeg'),
(66, '11', 'TotteBag', 'Hitam', '-', 90000, 'g21.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `nama`) VALUES
(2, 'admin', 'kl', 'Admin Morfeen');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `stok` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `jenis`, `warna`, `size`, `stok`, `harga`, `gambar`) VALUES
(59, 'Hoodie', 'Hitam', 'XL', '5', 295000, 'g1.jpeg'),
(60, 'Hoodie', 'Hitam', 'M', '10', 295000, 'g6.jpeg'),
(62, 'Hoodie', 'Putih', 'XXXL', '2', 295000, 'g3.jpeg'),
(64, 'T-Shirt', 'Merah', 'XL', '15', 135000, 'g17.jpeg'),
(65, 'BaseBall Cap', 'Hitam', 'All Size', '7', 90000, 'g7.jpeg'),
(66, 'TotteBag', 'Hitam', '-', '11', 90000, 'g21.jpeg'),
(67, 'T-Shirt', 'Biru', 'M', '25', 130000, 'g16.jpeg'),
(68, 'Polo', 'Hitam Biru', 'XL', '3', 135000, 'g2.jpeg'),
(69, 'Morf Shoes', 'Hitam', '-', '9', 310000, 'g15.jpeg'),
(70, 'Morf Mesh', 'Biru', 'S', '3', 80000, 'g5.jpeg'),
(71, 'T-Shirt', 'Biru', 'XL', '25', 130000, 'g11.jpeg'),
(72, 'T-Shirt Strip', 'Putih', 'XXL', '10', 135000, 'g22.jpeg'),
(73, 'T-Shirt', 'Hitam', 'M', '12', 135000, 'g18.jpeg'),
(74, 'Hoodie', 'Hitam', 'XL', '5', 295000, 'g13.jpeg'),
(75, 'T - Shirt Raglan', 'Putih', 'XL', '7', 130000, 'g23.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idcus` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcus`, `nama`, `username`, `password`, `password2`) VALUES
(10, 'Alif Firdaus', 'alif', 'aaa', 'aaa'),
(11, 'Deny Pratama', 'deny', 'asd', 'asd'),
(12, 'Resa Putra', 'resa', 'asa', 'asa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`idadd`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `idadd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
