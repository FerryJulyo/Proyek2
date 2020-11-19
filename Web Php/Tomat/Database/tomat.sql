-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 04:55 AM
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
(77, 'Semen', 'karung', '200', 50000, 'semen.jpg'),
(78, 'Keramik Ikema', 'Pcs', '135', 58000, 'keramikikema.jpg'),
(79, 'Batu Bata Merah', 'Pcs', '370', 1000, 'batubata.jpg'),
(80, 'Marmer ', 'Pcs', '199', 200000, 'marmerempe.jpg'),
(81, 'Cat Nippon Paint Spotless Aquamarine', 'bak', '48', 180000, 'nippon paint aquamarine.jpg'),
(82, 'Batako', 'Pcs', '400', 1800, 'batako.jpg'),
(83, 'Bata Ringan', 'm³', '100', 575000, 'bata ringan.jpg'),
(84, 'Tripleks 3 mm', 'Lembar', '50', 60000, 'teriplek.jpg'),
(85, 'Tripleks 4 mm', 'Lembar', '50', 70000, 'teriplek.jpg'),
(86, 'Tripleks 6 mm', 'Lembar', '50', 90000, 'teriplek.jpg'),
(87, 'Tripleks 8 mm', 'Lembar', '50', 120000, 'teriplek.jpg'),
(88, 'Tripleks 12 mm', 'Lembar', '50', 140000, 'teriplek.jpg'),
(89, 'Tripleks 15 mm', 'Lembar', '50', 170000, 'teriplek.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cekout`
--

CREATE TABLE `cekout` (
  `idcek` int(11) NOT NULL,
  `idcus` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `material` varchar(20) NOT NULL,
  `satuan` varchar(20) NOT NULL,
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

INSERT INTO `cekout` (`idcek`, `idcus`, `idbarang`, `nama`, `alamat`, `material`, `satuan`, `hargasatuan`, `harga`, `gambar`, `tanggal`, `jumlah`, `status`) VALUES
(106, 34, 77, 'Julyo', 'Tuban', 'Semen', 'karung', 50000, 250000, 'semen.jpg', '2020-11-16 18:00:10', 5, 'Ordered'),
(107, 35, 78, 'Pandu Dwi Laksono', 'Bojonegoro', 'Keramik Ikema', 'Pcs', 10, 50, 'keramikikema.jpg', '2020-11-16 22:25:36', 5, 'Pesanan Selesai'),
(108, 35, 79, 'Pandu Dwi Laksono', 'Bojonegoro', 'Batu Bata Merah', 'Pcs', 2000, 40000, 'batubata.jpg', '2020-11-16 22:25:42', 20, 'Pesanan Selesai');

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
  `email` varchar(50) NOT NULL,
  `notelp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcus`, `nama`, `alamat`, `daerah`, `username`, `password`, `password2`, `kodepos`, `email`, `notelp`) VALUES
(29, 'hafid ali rahman wibisana', 'bojonegoro', 'Kota Malang', 'hafid', 'hafid', 'hafid', 62181, 'hafidwibisana29@gmai', '2147483647'),
(33, 'Ferry Julyo', 'Tuban', 'Kab. Tuban', 'ferry', 'julyo', 'julyo', 62370, 'ferryjulyo86@gmail.com', '082232848979'),
(34, 'Julyo', 'Tuban', 'Kab. Tuban', 'julyo', 'julyo', 'julyo', 62370, 'julyo@gmail.com', '082232848979'),
(35, 'Pandu Dwi Laksono', 'Bojonegoro', 'Kab. Bojonegoro', 'pandu', 'pandu1', 'pandu1', 62162, 'pandu@mail.co', '083843865644');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `idhis` int(11) NOT NULL,
  `idcus` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `material` varchar(20) NOT NULL,
  `kodepos` int(11) NOT NULL,
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
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`idhis`);

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
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `cekout`
--
ALTER TABLE `cekout`
  MODIFY `idcek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `idhis` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
