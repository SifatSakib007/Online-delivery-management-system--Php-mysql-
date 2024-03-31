-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 07:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsignup`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(5) NOT NULL,
  `address` varchar(50) NOT NULL,
  `number1` int(11) NOT NULL,
  `number2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `address`, `number1`, `number2`) VALUES
(1, 'na', 170955070, 170955070),
(2, 'Jessore', 173453434, 2147483647),
(3, 'Dhaka', 13945, 905293);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email_id`, `password`, `role`) VALUES
(1, 'Sifat', 'sifat@gmail.com', 'il7dEIJO2AtxE', 'customer'),
(10, 'admin', 'admin@admin.com', 'il4tOlGN3WKKI', 'customer'),
(11, 'R', 'r@gmail.com', 'ilVZiYdtSAyE6', 'customer'),
(14, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(15, 't', 't@gmail.com', '', 'customer'),
(16, 's', 's@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'customer'),
(17, 'sakib', 'sakib@gmail.com', '28e9ae3ae3f544edf077eae414725fa2', 'customer'),
(18, 'roy', 'roy@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'customer'),
(19, 'f', 'f@gmail.com', '8fa14cdd754f91cc6554c9e71929cce7', 'customer'),
(20, 'admin2', 'admin2@gmail.com', 'c84258e9c39059a89ab77d846ddab909', 'admin'),
(21, 'sss', 'sss@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', 'customer'),
(22, 'mamun', 'm@gmail.com', '6f8f57715090da2632453988d9a1501b', 'customer'),
(23, 'u', 'u@gmail.com', '7b774effe4a349c6dd82ad4f4f21d34c', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_number` int(11) NOT NULL,
  `s_street` varchar(50) NOT NULL,
  `s_city` varchar(50) NOT NULL,
  `s_division` varchar(50) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_number` int(11) NOT NULL,
  `r_street` varchar(50) NOT NULL,
  `r_city` varchar(50) NOT NULL,
  `r_division` varchar(50) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `s_name`, `s_email`, `s_number`, `s_street`, `s_city`, `s_division`, `r_name`, `r_email`, `r_number`, `r_street`, `r_city`, `r_division`, `price`) VALUES
(1, 'mamun', 'm@gmail.com', 192345382, 'feafa', 'jatrabari', 'Khulna', 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 3242, 'na', 'na', '', 0),
(2, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 54363, 'na', 'na', 'tgr', 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 345346, 'na', 'na', '', 0),
(3, 'Sifat ', 'kevebo1083@bitvoo.com', 23121, 'na', 'na', 'Khulna', 'ef', 'kevebo1083@boo.com', 2323, 'fea', 'fea', 'ghfea', 0),
(4, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 2342, 'na', 'na', 'rfae', 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 2342, 'na', 'na', 'fea', 0),
(5, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 343, 'na', 'na', 'fs', 'fs', 'kevebo1083@bitvoo.com', 34, 'fse', 'fes', 'fe', 0),
(6, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 343, 'na', 'na', 'Dhaka', 'fs', 'kevebo1083@bitvoo.com', 34, 'fse', 'fes', 'fe', 0),
(7, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 343, 'na', 'na', 'Dhaka', 'fs', 'kevebo1083@bitvoo.com', 34, 'fse', 'fes', 'Khulna', 0),
(8, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 343, 'na', 'na', 'Dhaka', 'fs', 'kevebo1083@bitvoo.com', 34, 'fse', 'fes', 'Rajshahi', 0),
(9, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 343, 'na', 'na', 'Dhaka', 'fs', 'kevebo1083@bitvoo.com', 34, 'fse', 'fes', 'rangpur', 0),
(10, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 343, 'na', 'na', 'Dhaka', 'fs', 'kevebo1083@bitvoo.com', 34, 'fse', 'fes', 'Rangpur', 0),
(11, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 343, 'na', 'na', 'Dhaka', 'fs', 'kevebo1083@bitvoo.com', 34, 'fse', 'fes', 'Rangpur', 0),
(12, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 34354, 'na', 'na', 'Dhaka', 'tg', '2019-2-60-032@std.ewubd.edu', 3242543, 'na', 'na', 'Khulna', 0),
(13, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 3523642, 'na', 'na', 'Dhaka', 'Sifat Sakib', 'kevebo1083@bitvoo.com', 767567, 'na', 'na', 'Rajshahi', 50),
(14, 'rgr', 'kevebo1083@bitvoo.com', 23423, 'fe', 'ahtd', 'Dhaka', 'grs', 'kevebo1083@bitv.com', 466754, 'htd', 'htd', 'Rajshahi', 50),
(15, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 4564, 'na', 'na', 'Dhaka', 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 3456546, 'na', 'na', 'Rajshahi', 50),
(16, 'Mamun', 'm@gmail.com', 9238543, 'na', 'na', 'Sylhet', 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 35345, 'na', 'na', 'Dhaka', 50),
(17, 'Mamun', 'm@gmail.com', 63450, 'na', 'na', 'Dhaka', 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 567354, 'na', 'na', 'Rajshahi', 50),
(18, 'Mamun', 'm@gmail.com', 456, 'na', 'na', 'Dhaka', 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 68756, 'na', 'na', 'Rangpur', 10),
(19, 'Mamun', 'm@gmail.com', 19304345, 'na', 'na', 'Khulna', 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 54634, 'na', 'na', 'Rajshahi', 50),
(20, 'Mamun', 'ssskiller27@gmail.com', 2342, 'ef', 'fea', 'Dhaka', 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 2342, 'na', 'na', 'Rajshahi', 50),
(21, 'Mamun', '2019-2-60-032@std.ewubd.edu', 343, 'na', 'na', 'Dhaka', 'Sifat Sakib', 'ssskiller27@gmail.com', 3453, 'na', 'na', 'Rajshahi', 50),
(22, 'Sifat Sakib', '2019-2-60-032@std.ewubd.edu', 32, 'na', 'na', 'Dhaka', 'Sifat Sakib', 'ssskiller27@gmail.com', 3423, 'na', 'na', 'Rajshahi', 50),
(23, 'Mamun', '2019-2-60-032@std.ewubd.edu', 343, 'na', 'na', 'Dhaka', 'Sifat Sakib', 'ssskiller27@gmail.com', 3453, 'na', 'na', 'Rajshahi', 50);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `salary` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `number`, `city`, `branch`, `salary`) VALUES
(2, 'Sifat', '2019-2-60-032@std.ewubd.edu', 170955070, 'Dhaka', 'DE', 111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
