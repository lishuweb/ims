-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 01:04 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed_tbl`
--

CREATE TABLE `bed_tbl` (
  `id` int(20) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Material` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `Stock` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed_tbl`
--

INSERT INTO `bed_tbl` (`id`, `Title`, `Size`, `Material`, `Color`, `Weight`, `Stock`, `Image`, `Type`) VALUES
(26, 'Furinno Solid Wood', '38″ x 75″', 'Black Wood', 'Black', ' 70', '6', 'image/bed10.jpg', 'Single'),
(27, 'Hera 4’6 Fabric Double Bed', '54″ x 75″', 'Black Wood', 'Brown', '70', '7', 'image/double.jpg', 'Double'),
(28, 'Boston Wooden Storage', '54″ x 75″', 'Fiber', 'Brown', '100', '3', 'image/bed14.jpg', 'Double'),
(29, 'Oak Single Size Bed', '38″ x 75″', 'Wood', 'White', '70', '2', 'image/bed11.jpg', 'Single'),
(30, 'Axis King Size Bed', '76″ x 80″', 'Engineered Wood', 'Black', '110', '3', 'image/bed16.jpg', 'King'),
(31, 'Royaloak Rouge King Size Bed', '76″ x 80″', 'HDF with melamine finish', 'Black', '165.000000', '4', 'image/bed17.jpg', 'King'),
(32, 'Adolph Bed With Side Storage', '60″ x 80″', 'Sheesham wood', 'Brown', '120', '2', 'image/bed15.jpg', 'Queen'),
(33, 'Osmin Bed Without Storage', '60″ x 80″', 'Sheesham wood', 'Black', '120', '4', 'image/bed18.jfif', 'Queen'),
(34, 'Furinno Solid Wood', '38″ x 75″', 'Wood', 'Black', '100', '4', 'image/bed2.jpg', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `cupboard_tbl`
--

CREATE TABLE `cupboard_tbl` (
  `id` int(20) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Material` varchar(100) NOT NULL,
  `Dimensions` varchar(100) NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `Doors` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Stock` varchar(100) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cupboard_tbl`
--

INSERT INTO `cupboard_tbl` (`id`, `Title`, `Material`, `Dimensions`, `Weight`, `Doors`, `Color`, `Stock`, `Image`) VALUES
(1, 'One Piece Cupboard', 'Wooden', '30 * 40 * 60', '100kg', '1', 'Brown', '2', 0x696d6167652f646f75626c65312e6a7067),
(2, 'Two Piece Cupboard', 'Wooden Black', '500 * 40 * 60', '250kg', '2', 'Black', '5', 0x696d6167652f646f75626c65322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `mattress_tbl`
--

CREATE TABLE `mattress_tbl` (
  `id` int(20) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Stock` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mattress_tbl`
--

INSERT INTO `mattress_tbl` (`id`, `Title`, `Size`, `Weight`, `Color`, `Stock`, `Type`, `Image`) VALUES
(5, 'Green Tea Memory Foam', '5 x 6.5', '200', 'White', '2', 'Foam Mattress', 'image/p.jpg'),
(6, 'Creamy Memory Foam', '6 x 5', '200', 'White', '3', 'Foam Mattress', 'image/o.jpg'),
(7, 'King Koil Dr.Mattress', '6 x 7', '220', 'Green', '2', 'Spring Mattress', 'image/spring1.jpg'),
(8, 'Grey Peps Spine Guard', '7 x 8', '220', 'Grey', '3', 'Spring Mattress', 'image/spring2.jpg'),
(9, 'Revive H2 Medium', '7 x 8', '260', 'Black', '2', 'Hybrid Mattress', 'image/hybrid2.jpg'),
(10, 'Sealy Hybrid Essentials', '7 x 8', '260', 'Grey', '3', 'Hybrid Mattress', 'image/hybrid1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Product_id` int(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`id`, `Name`, `Email`, `Phone`, `Quantity`, `Color`, `Product_id`, `Date`) VALUES
(6, 'Ram', 'ram12@gmail.com', 0, '6', 'Red', 222, '2022-08-02'),
(7, 'Shyam', 'shyam12@gmail.com', 1290000, '2', 'White', 10111, '2022-08-24'),
(8, 'Sita', 'sita12@gmail.com', 9898, '4', 'White', 12, '2022-08-16'),
(11, 'Lishu Maharjan', 'lishu@gmail.com', 9843, '3', 'Red', 122, '2022-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `id` int(20) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `Stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`id`, `Product`, `Stock`) VALUES
(1, 'bed', ''),
(2, 'Sofa', ''),
(3, 'Bed', ''),
(4, 'Mattress', ''),
(5, 'Cupboard', ''),
(6, 'Chair', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `cnumber` int(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `password`, `address`, `gender`, `cnumber`, `mail`, `usertype`) VALUES
(17, 'Shyam Shrestha', '0000', 'Balaju', 'on', 9843, 'shyam@gmail.com', 'admin'),
(20, 'Lishu Maharjan', '1212', 'pokhara', '', 1290000, 'lishu@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sofa_table`
--

CREATE TABLE `sofa_table` (
  `Title` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Seat` varchar(100) NOT NULL,
  `Stock` varchar(100) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sofa_table`
--

INSERT INTO `sofa_table` (`Title`, `Size`, `Color`, `Seat`, `Stock`, `Image`) VALUES
('armchair', '40', 'green', '9', '2', ''),
('', '', '', '', '', ''),
('Loveseat2', '30*40', 'red', '10', '2', ''),
('Armchair', '10*30', 'red', '1', '2', ''),
('Armchair', '10*30', 'red', '1', '2', ''),
('Armchair', '10*30', 'red', '1', '2', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', 0x696d672f),
('', '', '', '', '', 0x696d672f),
('', '', '', '', '', 0x696d672f),
('', '', '', '', '', 0x696d672f),
('', '', '', '', '', 0x696d672f),
('', '', '', '', '', 0x696d672f),
('', '', '', '', '', 0x696d672f),
('', '', '', '', '', 0x696d672f),
('kkk', 'lasdms', 'lm.v', 'sjdnc ,d', 'eknfc', 0x696d672f),
('kkk', 'lasdms', 'lm.v', 'sjdnc ,d', 'eknfc', 0x696d672f),
('ABC', '10', 'h', '4333', '3', 0x696d672f);

-- --------------------------------------------------------

--
-- Table structure for table `sofa_tbl`
--

CREATE TABLE `sofa_tbl` (
  `id` int(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Weight` int(100) NOT NULL,
  `Seat` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Stock` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sofa_tbl`
--

INSERT INTO `sofa_tbl` (`id`, `Title`, `Size`, `Color`, `Weight`, `Seat`, `Type`, `Stock`, `Image`) VALUES
(10, 'Upholstered Blue Velvet', '30″ x 45″', 'Green', 25, 'Velvet', 'Armchair', '2', 'image/arm.jpg'),
(11, 'Moby Accent Armchair', '30″ x 45″', 'Green', 28, 'Faux Sheepskin Weave', 'Armchair', '2', 'image/arm2.jpg'),
(12, 'Zinus Jackie Loveseat', '48″ x 72″', 'Brown', 120, 'Foam', 'Loveseat', '3', 'image/loveseat2.jpg'),
(13, 'GWYNETH BOUCLE LOVESEAT', '48″ x 72″', 'White', 120, 'Rine and Engineered wood frame', 'Loveseat', '2', 'image/loveseat1.jpg'),
(14, 'Gabriella Sectional Sofa', '48″ x 72″', 'Brown', 150, 'Polyester', 'Sectional/Modular', '3', 'image/ls2.jpg'),
(15, 'Fabric Charlotte U Shape', '94″ x 156″', 'White', 150, 'Woven Fabric Hugo', 'Sectional/Modular', '2', 'image/ls1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bed_tbl`
--
ALTER TABLE `bed_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cupboard_tbl`
--
ALTER TABLE `cupboard_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mattress_tbl`
--
ALTER TABLE `mattress_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `sofa_tbl`
--
ALTER TABLE `sofa_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bed_tbl`
--
ALTER TABLE `bed_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `cupboard_tbl`
--
ALTER TABLE `cupboard_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mattress_tbl`
--
ALTER TABLE `mattress_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sofa_tbl`
--
ALTER TABLE `sofa_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
