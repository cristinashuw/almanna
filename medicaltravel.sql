-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 01:21 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicaltravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `actual`
--

CREATE TABLE `actual` (
  `no_actual` int(11) NOT NULL,
  `actualDate` datetime NOT NULL,
  `customer_ID` int(11) NOT NULL,
  `quotation_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_ID` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `order_name` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `medicalFee` int(11) NOT NULL,
  `travelFee` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `orderStatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kwitansi`
--

CREATE TABLE `kwitansi` (
  `no_kwitansi` int(11) NOT NULL,
  `customer_ID` int(11) NOT NULL,
  `quotation_ID` int(11) NOT NULL,
  `downPayment` int(11) NOT NULL,
  `paymentDate` datetime NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `proforma`
--

CREATE TABLE `proforma` (
  `no_proforma` int(11) NOT NULL,
  `proformaDate` datetime NOT NULL,
  `no_kwitansi` int(11) NOT NULL,
  `customer_ID` int(11) NOT NULL,
  `quotation_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `quotation_ID` int(11) NOT NULL,
  `order_name` varchar(50) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `medicalFee` int(11) NOT NULL,
  `travelFee` int(11) NOT NULL,
  `orderDate` datetime NOT NULL,
  `orderStatus` varchar(20) NOT NULL,
  `customer_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_ID` int(11) NOT NULL,
  `namaBulan` varchar(20) NOT NULL,
  `tgl` datetime NOT NULL,
  `masuk` int(11) NOT NULL,
  `keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actual`
--
ALTER TABLE `actual`
  ADD PRIMARY KEY (`no_actual`),
  ADD KEY `customer_ID` (`customer_ID`),
  ADD KEY `quotation_ID` (`quotation_ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD PRIMARY KEY (`no_kwitansi`),
  ADD KEY `customer_ID` (`customer_ID`),
  ADD KEY `quotation_ID` (`quotation_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proforma`
--
ALTER TABLE `proforma`
  ADD PRIMARY KEY (`no_proforma`),
  ADD KEY `customer_ID` (`customer_ID`),
  ADD KEY `no_kwitansi` (`no_kwitansi`),
  ADD KEY `quotation_ID` (`quotation_ID`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`quotation_ID`),
  ADD KEY `customer_ID` (`customer_ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actual`
--
ALTER TABLE `actual`
  MODIFY `no_actual` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kwitansi`
--
ALTER TABLE `kwitansi`
  MODIFY `no_kwitansi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proforma`
--
ALTER TABLE `proforma`
  MODIFY `no_proforma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `quotation_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quotation`
--
ALTER TABLE `quotation`
  ADD CONSTRAINT `quotation_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customers` (`customer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
