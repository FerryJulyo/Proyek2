-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 02:46 PM
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
  `hargasatuan` int(11) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'admin', 'admin', 'Admin Morfeen');

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
(59, 'Hoodie', 'Hitam', 'XL', '9', 295000, 'g1.jpeg'),
(60, 'Hoodie', 'Hitam', 'M', '7', 295000, 'g6.jpeg'),
(62, 'Hoodie', 'Putih', 'XL', '3', 295000, 'g3.jpeg'),
(64, 'T-Shirt', 'Merah', 'XL', '11', 135000, 'g17.jpeg'),
(65, 'BaseBall Cap', 'Hitam', 'All Size', '13', 90000, 'g7.jpeg'),
(66, 'TotteBag', 'Hitam', '-', '12', 90000, 'g21.jpeg'),
(67, 'T-Shirt', 'Biru', 'M', '13', 130000, 'g16.jpeg'),
(68, 'Polo', 'Hitam Biru', 'XL', '15', 135000, 'g2.jpeg'),
(69, 'Morf Shoes', 'Hitam', '-', '11', 310000, 'g15.jpeg'),
(70, 'Morf Mesh', 'Biru', 'S', '12', 80000, 'g5.jpeg'),
(71, 'T-Shirt', 'Biru', 'XL', '6', 130000, 'g11.jpeg'),
(72, 'T-Shirt Strip', 'Putih', 'XXL', '5', 135000, 'g22.jpeg'),
(73, 'T-Shirt', 'Hitam', 'M', '3', 135000, 'g18.jpeg'),
(74, 'Hoodie', 'Hitam', 'XL', '2', 295000, 'g13.jpeg'),
(75, 'T - Shirt Raglan', 'Putih', 'XL', '10', 130000, 'g23.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cekout`
--

CREATE TABLE `cekout` (
  `idcek` int(11) NOT NULL,
  `idcus` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kodepos` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `hargasatuan` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cekout`
--

INSERT INTO `cekout` (`idcek`, `idcus`, `idbarang`, `nama`, `alamat`, `kodepos`, `jenis`, `warna`, `size`, `hargasatuan`, `harga`, `gambar`, `tanggal`, `jumlah`, `status`) VALUES
(99, 28, 60, 'Deny Pratama', 'Jl. Bunga Anggrek no. 5', '65145', 'Hoodie', 'Hitam', 'M', 295000, 590000, 'g6.jpeg', '2019-10-29 03:23:38', 2, 'Ordered'),
(100, 28, 62, 'Deny Pratama', 'Jl. Bunga Anggrek no. 5', '65145', 'Hoodie', 'Putih', 'XL', 295000, 885000, 'g3.jpeg', '2019-10-29 03:25:10', 3, 'Pesanan Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idcus` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `daerah` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL,
  `kodepos` int(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `notelp` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcus`, `nama`, `alamat`, `daerah`, `username`, `password`, `password2`, `kodepos`, `email`, `notelp`) VALUES
(27, 'hh', 'Jl. sembarang', 'Kab. Malang', 'h', 'h', 'h', 65145, 'h@gmail', 2147483647),
(28, 'Deny Pratama', 'Jl. Bunga Anggrek no. 5', 'Kota Malang', 'deny', 'y', 'y', 65145, 'deny@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `idhis` int(11) NOT NULL,
  `idcus` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jumlah` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `cekout`
--
ALTER TABLE `cekout`
  ADD PRIMARY KEY (`idcek`);

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
  MODIFY `idadd` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `cekout`
--
ALTER TABLE `cekout`
  MODIFY `idcek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
