-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 11:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jb_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id_auto` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id_auto`, `username`, `password`) VALUES
(4, 'naief', '123456'),
(5, 'adnan_sir', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_auto` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `report` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_auto` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `about` varchar(500) NOT NULL,
  `product_cat` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_auto`, `name`, `rate`, `about`, `product_cat`, `photo`) VALUES
(113, 'Ace 500mg', '8 taka', 'pain killer', 'fever', '0.23756400 1510608358'),
(114, 'Napa 500mg', '8 taka', 'pain killer', 'fever', '0.48779100 1510608413'),
(115, 'Fast 500mg', '8 taka', 'pain killer', 'fever', '0.24587400 1510608454'),
(116, 'Reset 500mg', '8 taka', 'pain killer', 'fever', '0.35087400 1510608482'),
(117, 'Qcet 500mg ', '8 taka', 'pain killer', 'fever', '0.20162700 1510608500'),
(118, 'Seclo 20mg', '50 taka', 'anti ulcertic drug', 'ulcer', '0.37056300 1510608602'),
(119, 'PPI 20mg', '50 taka', 'anti ulcertic drug', 'ulcer', '0.64106300 1510608617'),
(120, 'Trupan 20mg', '50 taka', 'anti ulcertic drug', 'ulcer', '0.54388300 1510608843'),
(121, 'Pantonix 20mg', '50 taka', 'anti ulcertic drug', 'ulcer', '0.79464500 1510608957'),
(122, 'Max Pro 20mg', '50 taka', 'anti ulcertic drug', 'ulcer', '0.69283200 1510609042'),
(124, 'Naprosyn 500mg', '90 taka', 'analgesic pain killer', 'anal', '0.11098400 1510609204'),
(125, 'Naproxen 500mg', '150 taka', 'analgesic pain killer', 'anal', '0.51979300 1510609287'),
(126, 'NaproA 500mg', '70 taka', 'analgesic pain killer', 'anal', '0.71956300 1510609316'),
(127, 'Naproson 500mg', '70 taka', 'analgesic pain killer', 'anal', '0.34591100 1510609337'),
(128, 'Paincare 500mg', '70 taka', 'analgesic pain killer', 'anal', '0.05902000 1510609381');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id_auto` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id_auto`, `product_id`, `user_id`, `order_date`, `report`) VALUES
(18, '118', '', '2017-11-14 03:45:58', ''),
(19, '113', '', '2017-11-14 03:46:01', ''),
(20, '114', '', '2017-11-14 03:46:05', ''),
(21, '114', '', '2017-11-14 03:46:07', ''),
(22, '114', '', '2017-11-14 03:46:08', ''),
(23, '117', '', '2017-11-14 03:46:20', ''),
(24, '117', '', '2017-11-14 04:12:42', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_auto` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_auto`, `name`, `phone`, `address`, `password`) VALUES
(1, 'Naif', '9999', 'Dhaka', '9999'),
(3, 'Ali', '4444', 'dfguhijk', '4444'),
(4, 'kundu', '5555', 'hjsdbkj', '5555'),
(5, 'Nurul ', '01670000001', 'Mirpur 1', '12345'),
(6, 'Amin', '01710000001', 'Mirpur 2', '12345'),
(7, 'Ratul', '01810000001', 'Mirpur 10', '12345'),
(8, 'Gulnahar', '01670000002', 'Dhanmondi', '12345'),
(9, 'Monika', '01710000002', 'Dhanmondi', '12345'),
(10, 'Layas Amin', '01670747850', 'Magbazar', '12345'),
(11, 'Abdullah Hossain Sakin', '01671010712', 'Mirpur', '12345'),
(12, 'kundu', '123456', 'asdfgn', '123456'),
(13, 'rto', '2222', 'edrftg', '2222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_auto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
