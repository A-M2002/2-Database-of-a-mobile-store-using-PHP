-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 07:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasknit`
--

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `c_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `spec` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `pay` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`c_id`, `name`, `mobile`, `spec`, `color`, `pay`, `img`) VALUES
(5, 'Anal Malakar', 'Apple', '32gb', 'black', 'Upi', '1707663195300742_0_s39fc7.webp'),
(6, 'Anal Malakar', 'MI', '16gb', 'Blue', 'Cash', '170766390101D861FE-6FA4-D624-4AC0-F335CC94C025.jpg'),
(12, 'Prasun Roy', 'Lg', '4Gb', 'Dark-aqua-blue', 'Cash', '1707668279LG-W41-Plus.jpg.webp'),
(8, 'Rajshekhar Karmakar', 'Apple', '16gb', 'Purple', 'Cash', '1707672892il_570xN.3913886436_ikmn.webp'),
(9,  'Anal Malakar','MI','16gb','Blue','Cash','172207921651Xm9ay971L._AC_UF1000,1000_QL80_.jpg');
(10, 'Raj Roy', 'Lg','4Gb','Aurora Green','Card', '1722109330w30-32-u-w30-lg-3-original-imafjkpzdygfj...'


--
-- Indexes for dumped tables
--

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std`
--
ALTER TABLE `std`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
