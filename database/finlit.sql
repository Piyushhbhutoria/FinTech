-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2018 at 12:23 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finlit`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

DROP TABLE IF EXISTS `borrow`;
CREATE TABLE IF NOT EXISTS `borrow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `descrip` text NOT NULL,
  `category` text NOT NULL,
  `amount` int(11) NOT NULL,
  `part` int(11) NOT NULL,
  `timee` int(11) NOT NULL,
  `useruid` int(11) NOT NULL,
  `borrowuid` int(11) NOT NULL,
  `date` date NOT NULL,
  `logo` text NOT NULL,
  `collect` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `title`, `descrip`, `category`, `amount`, `part`, `timee`, `useruid`, `borrowuid`, `date`, `logo`, `collect`) VALUES
(1, 'Casting a cube', 'It is a really small cube...', '1', 500, 100, 14, 999, 1005, '0000-00-00', 'investlogo/Jason_Bradburyglass2.jpg', 200),
(2, 'Dairy Store', 'A simple and small store', '3', 5000, 1000, 21, 999, 1030, '0000-00-00', 'investlogo/Jason_Bradburyglass2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `borrowcrowd`
--

DROP TABLE IF EXISTS `borrowcrowd`;
CREATE TABLE IF NOT EXISTS `borrowcrowd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `descrip` text NOT NULL,
  `category` text NOT NULL,
  `amount` int(11) NOT NULL,
  `useruid` int(11) NOT NULL,
  `borrowuid` int(11) NOT NULL,
  `logo` text NOT NULL,
  `collect` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowcrowd`
--

INSERT INTO `borrowcrowd` (`id`, `title`, `descrip`, `category`, `amount`, `useruid`, `borrowuid`, `logo`, `collect`, `date`) VALUES
(1, 'Casting a cube', 'It is a really small cube...', '2', 500, 998, 1010, 'investlogo/Jason_Bradburyglass2.jpg', 500, '0000-00-00'),
(2, 'A Flower Shop', 'A simple and small store', '4', 4500, 998, 1032, 'investlogo/Jason_Bradburyglass2.jpg', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `forgot`
--

DROP TABLE IF EXISTS `forgot`;
CREATE TABLE IF NOT EXISTS `forgot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invest`
--

DROP TABLE IF EXISTS `invest`;
CREATE TABLE IF NOT EXISTS `invest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `borrowuid` int(11) NOT NULL,
  `useruid` int(11) NOT NULL,
  `investuid` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invest`
--

INSERT INTO `invest` (`id`, `amount`, `borrowuid`, `useruid`, `investuid`, `date`) VALUES
(4, 500, 1005, 998, 1009, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `investcrowd`
--

DROP TABLE IF EXISTS `investcrowd`;
CREATE TABLE IF NOT EXISTS `investcrowd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `useruid` int(11) NOT NULL,
  `borrowuid` int(11) NOT NULL,
  `date` date NOT NULL,
  `investuid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investcrowd`
--

INSERT INTO `investcrowd` (`id`, `amount`, `useruid`, `borrowuid`, `date`, `investuid`) VALUES
(1, 500, 999, 1010, '0000-00-00', 1014),
(2, 500, 999, 1010, '0000-00-00', 1015),
(3, 500, 999, 1010, '0000-00-00', 1016),
(4, 500, 999, 1010, '0000-00-00', 1048),
(5, 500, 999, 1010, '0000-00-00', 1051),
(6, 500, 1053, 1010, '0000-00-00', 1055);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `useruid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` text NOT NULL,
  `transuid` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `useruid`, `amount`, `type`, `transuid`, `balance`) VALUES
(1, 999, 10000, 'credit', 1022, 10000),
(2, 999, 10000, 'debit', 1023, 0),
(3, 999, 10000, 'credit', 1024, 10000),
(4, 999, 99, 'debit', 1026, 9901),
(5, 999, 99, 'credit', 1027, 10000),
(6, 0, 0, 'credit', 1028, 0),
(7, 999, 5000, 'debit', 1031, 5000),
(8, 998, 10000, 'credit', 1033, 10000),
(9, 1034, 10000, 'credit', 1037, 10000),
(10, 999, 5000, 'debit', 1044, 0),
(11, 999, 5000, 'credit', 1047, 5000),
(12, 999, 0, 'credit', 1049, 5000),
(13, 999, 500, 'credit', 1050, 5000),
(14, 999, 0, 'credit', 1052, 5000),
(15, 1053, 500, 'credit', 1054, 500),
(16, 1053, 0, 'credit', 1056, 500),
(17, 1053, 5000, 'credit', 1057, 5000),
(18, 1034, 2000, 'debit', 1, 8000),
(19, 1034, 2000, 'credit', 2, 10000),
(20, 1034, 2000, 'debit', 3, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `contact` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` date NOT NULL,
  `profilepic` text NOT NULL,
  `aadhar` text NOT NULL,
  `bankname` text NOT NULL,
  `bankifsc` text NOT NULL,
  `bank` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `contact`, `uid`, `date`, `profilepic`, `aadhar`, `bankname`, `bankifsc`, `bank`) VALUES
(2, 'Anirban ', 'email@gmail.com', '1234', 2147483647, 999, '0000-00-00', '', '', '', '', ''),
(3, 'Piyush', 'piyush@gmail.com', '1234', 2147483647, 998, '0000-00-00', '', '', '', '', ''),
(4, 'Piyush', 'piyush.bhutoria98@gmail.com', '12121998', 2147483647, 1029, '0000-00-00', '', '', '', '', ''),
(5, 'Abhinav', 'abhinav@gmail.com', '1234', 2147483647, 1034, '0000-00-00', '', '', '', '', ''),
(6, 'Anyone', 'test@gmail.com', '1234', 2147483647, 1053, '0000-00-00', '', '', '', '', ''),
(7, 'Manish', 'example@example.com', 'ZGV2c3BhY2U=', 1231231231, 4, '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

DROP TABLE IF EXISTS `wallet`;
CREATE TABLE IF NOT EXISTS `wallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `useruid` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `useruid`, `balance`, `date`) VALUES
(1, 999, 4500, '2018-03-01'),
(2, 1029, 0, '0000-00-00'),
(3, 998, 10000, '2018-03-01'),
(4, 1034, 8000, '0000-00-00'),
(5, 1053, 5000, '0000-00-00'),
(6, 4, 0, '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
