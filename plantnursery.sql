-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 01:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantnursery`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback1`
--

CREATE TABLE `feedback1` (
  `name` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL,
  `mobileno` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback1`
--

INSERT INTO `feedback1` (`name`, `address`, `mobileno`, `email`, `message`) VALUES
('Prajakta', 'kolhapur', '9845673445', 'shruti@gmail.com', 'Good service'),
('Prajakta', 'Kolhapur', '9860721714', 'prajakta@gmil.com', 'Good service'),
('Prajakta', 'Kolhapur', '9860721714', 'prajakta@gmil.com', 'Good service'),
('Prajakta', 'Kolhapur', '9860721714', 'prajakta@gmil.com', 'Good service'),
('Prajakta', 'Kolhapur', '9860721714', 'prajakta@gmil.com', 'Good service'),
('shubhada', 'manisha nagar', '9845766758', 'shubhada@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `oid` int(11) NOT NULL,
  `odate` date NOT NULL DEFAULT current_timestamp(),
  `pname` varchar(22) NOT NULL,
  `qty` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`oid`, `odate`, `pname`, `qty`, `rate`, `amount`) VALUES
(1, '2022-05-28', 'plant', 4, 400, 1600),
(2, '2022-05-28', 'Decorativeitem', 4, 200, 800),
(3, '2022-05-28', 'Tulsi Plant', 4, 50, 200),
(4, '2022-05-30', 'Fertilizer', 4, 50, 200),
(5, '2022-05-30', 'Hibiscus', 4, 50, 200),
(6, '2022-05-30', 'plant', 4, 200, 800);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `productname` varchar(22) NOT NULL,
  `producttype` varchar(22) NOT NULL,
  `description` varchar(50) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `producttype`, `description`, `cost`) VALUES
(1, 'lucky bamboo plant', 'plant', 'indoor plant', 250),
(2, 'lucky bamboo plant', 'plant', 'indoor plant', 250),
(3, '', 'select', 'indoor plant', 500),
(4, 'lucky bamboo', 'plant', 'indoor plant', 500),
(5, 'lucky bamboo', 'plant', 'indoor plant', 500);

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`name`, `email`, `contactno`, `username`, `password`) VALUES
('Asmita', 'asmita@gmail.com', '787878787', 'abc', '123'),
('shruti', 'shruti@gmail.com', '9845673445', 'shruti', '123');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `workshopid` int(11) NOT NULL,
  `wname` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`workshopid`, `wname`, `duration`, `description`, `cost`) VALUES
(2, 'planting', '1 month', 'indoor plant', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`workshopid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `workshopid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
