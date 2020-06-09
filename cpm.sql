-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 08:56 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `harga_perunit` varchar(30) NOT NULL,
  `jumlah_barang` varchar(30) NOT NULL,
  `total_harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`kode_barang`, `nama_barang`, `tanggal`, `harga_perunit`, `jumlah_barang`, `total_harga`) VALUES
('001', 'aluminum ingot ADC 12', '2019-08-08', '25000', '40', '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `IDuser` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_divisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`IDuser`, `username`, `password`, `nama_divisi`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'purchasing'),
(2, 'produksi', 'edf3017a2946290b95c783bd1a7f0ba7', 'produksi'),
(3, 'finance', '57336afd1f4b40dfd9f5731e35302fe5', 'finance'),
(4, 'PPIC', '46eb276404e7353aeb2848736a18d3c5', 'PPIC');

-- --------------------------------------------------------

--
-- Table structure for table `penawaran`
--

CREATE TABLE `penawaran` (
  `kode_penawaran` varchar(10) NOT NULL,
  `kode_supplier` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_barang` varchar(30) NOT NULL,
  `harga_perunit` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penawaran`
--

INSERT INTO `penawaran` (`kode_penawaran`, `kode_supplier`, `nama_barang`, `tanggal`, `jumlah_barang`, `harga_perunit`, `status`) VALUES
('', '', '', '0000-00-00', '', '', ''),
('', '', '', '0000-00-00', '', '', ''),
('1', 'KD002', 'aluminum ingot ADC 12', '2019-08-16', '3', '28000', 'bahan baku'),
('1ws', '1', 'aluminum ingot ADC 12', '2019-08-20', '22', '28000', '-');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `kode_permintaan` varchar(10) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `jumlah_barang` varchar(30) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `tanggal_terbeli` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`kode_permintaan`, `kode_barang`, `jumlah_barang`, `tanggal_transaksi`, `tanggal_terbeli`, `status`) VALUES
('', '', '', '2019-07-18', '0000-00-00', ''),
('003', 'K001', '21', '2019-08-13', '0000-00-00', 'belum di konfir'),
('1', '001', '22', '2019-08-16', '2019-08-30', '-'),
('112', '1E', '40', '2019-08-18', '2019-08-31', '-'),
('001', '1g', '40', '2019-08-18', '2019-08-31', '-'),
('1w', '1g', '22', '2019-08-25', '2019-08-31', '-');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `kode_po` varchar(10) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `kode_supplier` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`kode_po`, `kode_barang`, `kode_supplier`, `tanggal`, `status`) VALUES
('1', '001', 'KD003', '2019-08-20', 'belum di k'),
('13', '1112', '1', '2019-08-15', '-'),
('2', '001', '1', '2019-08-20', 'bahan baku'),
('5', '002', '', '2019-07-18', '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_requisition`
--

CREATE TABLE `purchase_requisition` (
  `kode_pr` varchar(15) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_requisition`
--

INSERT INTO `purchase_requisition` (`kode_pr`, `kode_barang`, `tanggal`, `status`) VALUES
('1', '001', '2019-08-15', 'Tertolak'),
('11', '001', '2019-08-22', 'Terima'),
('1a', '1E', '2019-08-18', 'Belum Konfirmasi'),
('1as', '1112', '2019-08-28', 'Terima'),
('1b', '1a', '2019-08-18', 'Belum Konfirmasi'),
('1qw', '001', '2019-09-20', 'Belum Konfirmasi'),
('1z', '1g', '2019-08-18', 'Belum Konfirmasi'),
('2', '002', '2019-08-07', 'Terkonfirmasi'),
('23', '001', '2019-08-23', 'Tertolak'),
('24', '001', '2019-08-09', 'Tertolak'),
('25', '001', '2019-08-07', 'Terima'),
('3', '001', '2019-08-23', 'Tertolak'),
('50', '001', '2019-08-23', 'Terima'),
('6', '001', '2019-08-22', 'Tertolak'),
('8', '002', '2019-07-24', 'Terkonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bb`
--

CREATE TABLE `tbl_bb` (
  `kode_bb` int(11) NOT NULL,
  `po` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `item` varchar(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `kode_supplier` varchar(20) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `email`, `tlp`) VALUES
('1', 'pt perkasa', 'jl gak tau', 'y@gmail.com', '0898675665'),
('KD002', 'pt nusa indah', 'jl.kemayoran', 'niju@gmail.com', '0986565454557'),
('KD003', 'Pt barokah ', 'jl.bekasi raya', 'barokah@gmail.com', '0986757567576'),
('KD004', 'pt yakali', 'bekasi', 'y@gmail.com', '09089897978'),
('KD005', 'pt pusing', 'Bali', 'yuyu', '65754744');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IDuser`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`kode_po`);

--
-- Indexes for table `purchase_requisition`
--
ALTER TABLE `purchase_requisition`
  ADD PRIMARY KEY (`kode_pr`);

--
-- Indexes for table `tbl_bb`
--
ALTER TABLE `tbl_bb`
  ADD PRIMARY KEY (`kode_bb`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `IDuser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_bb`
--
ALTER TABLE `tbl_bb`
  MODIFY `kode_bb` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
