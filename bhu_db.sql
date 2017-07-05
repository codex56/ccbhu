-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2017 at 09:18 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bhu_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(12) NOT NULL,
  `login_id` varchar(225) NOT NULL,
  `pwd` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `login_id`, `pwd`) VALUES
(1, 'ccbhu', 'ccbhu');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE IF NOT EXISTS `issuebook` (
  `id` int(12) NOT NULL,
  `date` date NOT NULL,
  `dept` varchar(250) NOT NULL,
  `serial` varchar(250) NOT NULL,
  `issueto` varchar(225) NOT NULL,
  `desig` varchar(225) NOT NULL,
  `article` varchar(250) NOT NULL,
  `issued` varchar(250) NOT NULL,
  `received` varchar(225) NOT NULL,
  `remark` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`id`, `date`, `dept`, `serial`, `issueto`, `desig`, `article`, `issued`, `received`, `remark`) VALUES
(1, '2017-06-30', 'ccbhu', '12', 'a', 'b', 'pen', '6', '2', 'use'),
(2, '2017-06-30', 'ccbhu', '789', 'y', 'z', 'pen', '9', '5', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(5) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`) VALUES
(3, 'pen'),
(4, 'revolving  chair');

-- --------------------------------------------------------

--
-- Table structure for table `purchasebook`
--

CREATE TABLE IF NOT EXISTS `purchasebook` (
  `id` int(12) NOT NULL,
  `date` date NOT NULL,
  `ordernum` varchar(225) NOT NULL,
  `supplierbillnum` varchar(225) NOT NULL,
  `suppliername` varchar(225) NOT NULL,
  `productname` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `tax` decimal(10,0) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `producttype` varchar(225) NOT NULL,
  `remark` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchasebook`
--

INSERT INTO `purchasebook` (`id`, `date`, `ordernum`, `supplierbillnum`, `suppliername`, `productname`, `qty`, `rate`, `tax`, `discount`, `amount`, `producttype`, `remark`) VALUES
(1, '2017-06-29', '     123', '34', 'M/S NICSI', '', 18, '1', '1', '2', '7', 'Consumable Product', '9'),
(2, '2017-07-01', ' 89', '08', 'M/S NICSI', '', 10, '5', '1', '1', '50', 'Consumable Product', 'na'),
(3, '2017-07-01', ' 098', '789', 'M/S NICSI', '', 1, '800', '1', '1', '800', 'Consumable Product', 'use');

-- --------------------------------------------------------

--
-- Table structure for table `stockbook`
--

CREATE TABLE IF NOT EXISTS `stockbook` (
  `id` int(12) NOT NULL,
  `date` date NOT NULL,
  `productname` varchar(225) NOT NULL,
  `issueto` varchar(225) NOT NULL,
  `issueby` varchar(225) NOT NULL,
  `qyt` int(12) NOT NULL,
  `bln` int(12) NOT NULL,
  `producttype` varchar(225) NOT NULL,
  `chalan` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `issued` int(11) NOT NULL,
  `ref` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockbook`
--

INSERT INTO `stockbook` (`id`, `date`, `productname`, `issueto`, `issueby`, `qyt`, `bln`, `producttype`, `chalan`, `cost`, `issued`, `ref`) VALUES
(2, '2017-06-28', 'revolving chair', 'ram', 'sham', 11, 10, 'Consumable Product', 123, 144, 1, '4'),
(3, '2017-06-29', 'revolving chair', 'r', 'd', 55, 54, 'Consumer Product', 456, 5687, 1, '123'),
(4, '2017-07-01', 'revolving chair', 'p', 'n', 10, 9, 'Consumer Product', 7, 100, 1, '78');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(5) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`) VALUES
(1, 'M/S NICSI'),
(2, 'abc'),
(3, 'adf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`) COMMENT 'primary key';

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`) COMMENT '5';

--
-- Indexes for table `purchasebook`
--
ALTER TABLE `purchasebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockbook`
--
ALTER TABLE `stockbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `issuebook`
--
ALTER TABLE `issuebook`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `purchasebook`
--
ALTER TABLE `purchasebook`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stockbook`
--
ALTER TABLE `stockbook`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
