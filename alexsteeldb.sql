-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 07:06 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alexsteeldb`
--
CREATE DATABASE IF NOT EXISTS `alexsteeldb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `alexsteeldb`;

-- --------------------------------------------------------

--
-- Table structure for table `carttbl`
--

DROP TABLE IF EXISTS `carttbl`;
CREATE TABLE IF NOT EXISTS `carttbl` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `myaccountID` varchar(100) NOT NULL,
  `productID` varchar(100) NOT NULL,
  `sellingprice` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliverytbl`
--

DROP TABLE IF EXISTS `deliverytbl`;
CREATE TABLE IF NOT EXISTS `deliverytbl` (
  `deliveryid` int(11) NOT NULL,
  `deliverydate` date NOT NULL,
  `deliverytime` time NOT NULL,
  `salesID` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktbl`
--

DROP TABLE IF EXISTS `feedbacktbl`;
CREATE TABLE IF NOT EXISTS `feedbacktbl` (
  `feedbackid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `stars` int(11) NOT NULL,
  `reviewmessage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoicetbl`
--

DROP TABLE IF EXISTS `invoicetbl`;
CREATE TABLE IF NOT EXISTS `invoicetbl` (
  `invoiceno` int(11) NOT NULL AUTO_INCREMENT,
  `accesscode` varchar(100) NOT NULL,
  `myaccountID` varchar(100) NOT NULL,
  `tin` varchar(20) NOT NULL,
  `company` varchar(100) NOT NULL,
  `invoicedate` date NOT NULL,
  `shippingfee` double NOT NULL,
  `cartinfo` text NOT NULL,
  `amountdue` double NOT NULL,
  `vat` double NOT NULL,
  `totalamountdue` double NOT NULL,
  PRIMARY KEY (`invoiceno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messagingtbl`
--

DROP TABLE IF EXISTS `messagingtbl`;
CREATE TABLE IF NOT EXISTS `messagingtbl` (
  `msgid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `msgfrommyacccountID` varchar(50) NOT NULL,
  `msgtomyaccountID` varchar(50) NOT NULL,
  `messagetext` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `myaccountbalances`
--

DROP TABLE IF EXISTS `myaccountbalances`;
CREATE TABLE IF NOT EXISTS `myaccountbalances` (
  `balanceid` int(11) NOT NULL AUTO_INCREMENT,
  `myaccountID` varchar(100) NOT NULL,
  `totalamount` double NOT NULL,
  `datebalance` date NOT NULL,
  PRIMARY KEY (`balanceid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `myaccountpurchases`
--

DROP TABLE IF EXISTS `myaccountpurchases`;
CREATE TABLE IF NOT EXISTS `myaccountpurchases` (
  `purchaseid` int(11) NOT NULL AUTO_INCREMENT,
  `myaccountID` varchar(100) NOT NULL,
  `invoiceno` varchar(100) NOT NULL,
  `accesscode` varchar(100) NOT NULL,
  `totalamount` double NOT NULL,
  `datepurchased` date NOT NULL,
  PRIMARY KEY (`purchaseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `myaccounttbl`
--

DROP TABLE IF EXISTS `myaccounttbl`;
CREATE TABLE IF NOT EXISTS `myaccounttbl` (
  `accountid` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(20) NOT NULL,
  `myaccountID` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `tin` varchar(100) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `image` varchar(150) NOT NULL,
  `houseno` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipal` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`accountid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notificationstbl`
--

DROP TABLE IF EXISTS `notificationstbl`;
CREATE TABLE IF NOT EXISTS `notificationstbl` (
  `notificationsid` int(11) NOT NULL,
  `notformmyaccountid` int(11) NOT NULL,
  `nottomyaccountid` int(11) NOT NULL,
  `notdate` date NOT NULL,
  `nottime` time NOT NULL,
  `notmessagetext` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productstbl`
--

DROP TABLE IF EXISTS `productstbl`;
CREATE TABLE IF NOT EXISTS `productstbl` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `productID` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `principalprice` double NOT NULL,
  `sellingprice` double NOT NULL,
  `instock` double NOT NULL,
  `description` text NOT NULL,
  `details` text NOT NULL,
  `additionalinfo` text NOT NULL,
  `availablein` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salestbl`
--

DROP TABLE IF EXISTS `salestbl`;
CREATE TABLE IF NOT EXISTS `salestbl` (
  `salesid` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceno` varchar(100) NOT NULL,
  `productID` varchar(100) NOT NULL,
  `piecesold` int(11) NOT NULL,
  `date` date NOT NULL,
  `myaccountID` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`salesid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlisttbl`
--

DROP TABLE IF EXISTS `wishlisttbl`;
CREATE TABLE IF NOT EXISTS `wishlisttbl` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `myaccountID` varchar(100) NOT NULL,
  `productID` varchar(100) NOT NULL,
  `sellingprice` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
