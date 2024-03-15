-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 07:54 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duyanh69dzsmartphone`
--
centralzooCREATE DATABASE IF NOT EXISTS `centralzoo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `centralzoo`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'hihihi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `CatId` int(11) NOT NULL AUTO_INCREMENT,
  `CatName` varchar(100) NOT NULL,
  PRIMARY KEY (`CatId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatId`, `CatName`) VALUES
(1, 'Land'),
(2, 'Water'),
(3, 'Sky');
--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ProductId` varchar(10) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `CatId` int(11) NOT NULL,
  PRIMARY KEY (`ProductId`),
  KEY `foreignkey_product_catid` (`CatId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--
alter table product add description varchar(500)

INSERT INTO `product` (`ProductId`, `ProductName`, `Image`, `Price`, `CatId`) VALUES
('Land', 'White Lion', 'images/sututrang.jpg', 10, 1),
('Water', 'killer whales', 'images/images.jfif', 10000, 2);

--


--


-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `foreignkey_product_catid` FOREIGN KEY (`CatId`) REFERENCES `category` (`CatId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

