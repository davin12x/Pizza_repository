-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2015 at 06:38 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conestoga_pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) unsigned NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Pin` varchar(45) DEFAULT NULL,
  `PhoneNo` int(11) DEFAULT NULL,
  `Total` double DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `Pizza_Size` varchar(45) DEFAULT NULL,
  `Crust_Type` varchar(45) DEFAULT NULL,
  `Toppings` text
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `FirstName`, `LastName`, `Address`, `City`, `Email`, `Pin`, `PhoneNo`, `Total`, `user_id`, `Pizza_Size`, `Crust_Type`, `Toppings`) VALUES
(58, 'as', 'as', 'a', 'asd', 'adw', 'asd', 20, 17.5, 1, 'large', 'handtossed', '0'),
(59, 'as', 'as', 'a', 'asd', 'adw', 'asd', 20, 17.5, 1, 'large', 'handtossed', 'pineapple,'),
(60, 'as', 'as', 'a', 'asd', 'adw', 'asd', 20, 17.5, 1, 'large', 'handtossed', 'pineapple,'),
(61, 'as', 'as', 'a', 'asd', 'adw', 'asd', 20, 17.5, 1, 'large', 'handtossed', 'pineapple,'),
(62, 'as', 'as', 'a', 'asd', 'ad', 'asd', 3, 6, 1, 'small', 'handtossed', 'blackolives,');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'root', '$2y$10$iqDN1h0fFnGpkfoqwXRpT.tZC.cwJekKBmXmjIGRruIIa82Y8PVAq', 'admin', NULL, NULL),
(2, 'bagga', '$2y$10$T9G5T4uQ4C9j/RWU2govXORA385zyJSO6Reapo8XwW5gJJ9qfW.n.', 'author', NULL, NULL),
(3, 'author', '$2y$10$neVBIla9t4BNv02OjnEBYOdhRRXwEEXAy.jqky0MSRcCnGbX3kLN.', 'author', NULL, NULL),
(4, 'testAuthor', '$2y$10$HIs8.yKQTXtopCiidwUaZOT5a.FIcHG.baT4scp.mZcUiAUvlrcJu', 'author', NULL, NULL),
(5, 'me', '$2y$10$ylHgJeNtHCCpkBEde2KoWuWo3IBKPzsVR1L0JPNnSUq5KkQ07Db5.', 'author', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
