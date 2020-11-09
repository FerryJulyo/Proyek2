-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 12:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tomat`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `idadd` int(11) NOT NULL,
  `idcus` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `hargasatuan` int(11) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
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
(2, 'admin', 'admin', 'Tomat');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `stok` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `nama`, `satuan`, `stok`, `harga`, `gambar`) VALUES
(77, 'Semen', 'karung', '20', 50000, 'semen.jpg'),
(78, 'Keramik Ikema', 'Pcs', '150', 10, 'keramikikema.jpg'),
(79, 'Batu Bata Merah', 'Pcs', '500', 2000, 'batubata.jpg'),
(80, 'Marmer ', 'Pcs', '199', 200000, 'marmerempe.jpg'),
(81, 'Cat Nippon Paint Spotless Aquamarine', 'bak', '48', 180000, 'nippon paint aquamarine.jpg');

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
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jumlah` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cekout`
--

INSERT INTO `cekout` (`idcek`, `idcus`, `idbarang`, `nama`, `alamat`, `kodepos`, `jenis`, `warna`, `size`, `hargasatuan`, `harga`, `gambar`, `tanggal`, `jumlah`, `status`) VALUES
(99, 28, 60, 'Deny Pratama', 'Jl. Bunga Anggrek no. 5', '65145', 'Hoodie', 'Hitam', 'M', 295000, 590000, 'g6.jpeg', '2020-11-09 13:47:54', 2, 'Confirmed'),
(100, 28, 62, 'Deny Pratama', 'Jl. Bunga Anggrek no. 5', '65145', 'Hoodie', 'Putih', 'XL', 295000, 885000, 'g3.jpeg', '2020-11-09 22:51:46', 3, 'Confirmed'),
(101, 27, 59, 'hh', 'Jl. sembarang', '65145', 'Hoodie', 'Hitam', 'XL', 295000, 2360000, 'g1.jpeg', '2020-11-09 22:51:53', 8, 'Confirmed');

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
(28, 'Deny Pratama', 'Jl. Bunga Anggrek no. 5', 'Kota Malang', 'deny', 'y', 'y', 65145, 'deny@gmail.com', 2147483647),
(29, 'hafid ali rahman wibisana', 'bojonegoro', 'Kota Malang', 'hafid', 'hafid', 'hafid', 62181, 'hafidwibisana29@gmai', 2147483647),
(30, 'Jono S', 'Bojonegoro', 'Kab. Bojonegoro', 'jon_o', 'jono', 'jono', 62162, 'jonos@mail.com', 2147483647);

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
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
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
  MODIFY `idadd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `cekout`
--
ALTER TABLE `cekout`
  MODIFY `idcek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
