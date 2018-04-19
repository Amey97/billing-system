-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 07:58 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telebilling`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_db`
--

CREATE TABLE `bill_db` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `addr` varchar(20) NOT NULL,
  `state` text NOT NULL,
  `pno` int(10) NOT NULL,
  `billamt` int(5) NOT NULL,
  `status` text NOT NULL,
  `pay_date` date NOT NULL,
  `recurr_charge` int(5) NOT NULL,
  `cust_id` varchar(5) NOT NULL,
  `tax` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_db`
--

INSERT INTO `bill_db` (`fname`, `lname`, `addr`, `state`, `pno`, `billamt`, `status`, `pay_date`, `recurr_charge`, `cust_id`, `tax`) VALUES
('richa', 'solanki', '', '', 0, 0, '', '0000-00-00', 350, 'e41', '15'),
('hari', 'prasad', 'vasai', 'delhi', 2008921, 900, 'paid', '2018-02-17', 300, 'e42', '30'),
('rayesh', 'singh', 'dahanu', 'maharashtra', 2110478, 700, 'paid', '2018-03-07', 150, 'e43', '30'),
('malvika', 'malik', 'borivali', 'andhra pradesh', 2123670, 450, 'paid', '2018-02-20', 150, 'e46', '15'),
('samruddhi', 'malkapurkar', 'virar', 'Maharashtra', 2128670, 800, 'paid', '2018-01-11', 120, 'e62', '10'),
('lalit', 'deewan', 'vasai', 'delhi', 2225051, 1000, 'unpaid', '2017-12-27', 120, 'e56', '40'),
('rohini', 'rao', 'borivali', 'andhra pradesh', 2233451, 1756, 'unpaid', '2018-03-06', 100, 'e42', '23'),
('bhumika', 'gohil', 'virar', 'Maharashtra', 2234512, 800, 'paid', '2018-02-13', 100, 'e70', '35'),
('shruthi', 'acharya', 'virar', 'maharashtra', 2234901, 1600, 'unpaid', '2018-01-01', 400, 'e31', '67'),
('rakesh', 'sharma', 'vasai', 'delhi', 2553430, 1100, 'unpaid', '2018-02-11', 480, 'e49', '100'),
('sandy', 'sheikh', 'nallasopara', 'maharashtra', 2567381, 800, 'paid', '2018-03-21', 350, 'e50', '51'),
('amey', 'bhusawar', 'vasai', 'delhi', 3321980, 250, 'paid', '2018-04-10', 250, 'e52', '52');

-- --------------------------------------------------------

--
-- Table structure for table `enter_values`
--

CREATE TABLE `enter_values` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `ename` varchar(40) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `cpname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enter_values`
--

INSERT INTO `enter_values` (`fname`, `lname`, `ename`, `pname`, `cpname`) VALUES
('', '', '', '', ''),
('abc', 'singh', 'abc123@gmail.com', 'abc123', 'abc123'),
('bhumika', 'gohil', 'bhumika@gmail.com', 'bhumi123', 'bhumi123'),
('hari', 'prasad', 'hari123@gmail.com', 'hari123', 'hari123'),
('lalit', 'deewan', 'lalitwan123@gmail.com', 'lalit123', 'lalit123'),
('malvika', 'malik', 'malvika@gmail.com', 'malu123', 'malu123'),
('meghna', 'acharya', 'megh123@gmail.com', 'megh123', 'megh123'),
('pooja', 'nai', 'pooja123@gmail.com', 'pooja123', 'pooja123'),
('rakesh', 'sharma', 'rakesh@gmail.com', 'rakesh123', 'rakesh123'),
('rayesh', 'singh', 'rayesh_singh@gmail.com', 'singh123', 'singh123'),
('richa', 'solanki', 'richa123@gmail.com', 'richa123', 'richa123'),
('rohini', 'rao', 'rohini123@gmail.com', 'rohini123', 'rohini123'),
('samruddhi', 'malkapurkar', 'sam23@gmail.com', 'sam123', 'sam123'),
('hello', 'hii', 'shree@27061997', 'shree123', 'shree123'),
('shruthi', 'acharya', 'shruach2208@gmail.com', 'shru123', 'shru123'),
('vaidehi', 'alevoor', 'vaiale123@gmail.com', 'vai123', 'vai123');

-- --------------------------------------------------------

--
-- Table structure for table `newdb`
--

CREATE TABLE `newdb` (
  `fname1` tinytext,
  `email1` varchar(30) DEFAULT NULL,
  `lname1` tinytext,
  `state1` tinytext,
  `add1` varchar(30) DEFAULT NULL,
  `numb1` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newdb`
--

INSERT INTO `newdb` (`fname1`, `email1`, `lname1`, `state1`, `add1`, `numb1`) VALUES
('hari', 'hari123@gmail.com', 'prasad', 'delhi', 'vasai', 2008921),
('rayesh', 'rayesh_singh@gmail.com', 'singh', 'maharashtra', 'dahanu', 2110478),
('malvika', 'malvika@gmail.com', 'malik', 'andhra pradesh', 'borivali', 2123670),
('samruddhi', 'sam23@gmail.com', 'malkapurkar', 'maharashtra', 'virar', 2128670),
('lalit', 'lalitwan123@gmail.com', 'deewan', 'delhi', 'vasai', 2225051),
('rohini', 'rohini123@gmail.com', 'rao', 'andhra pradesh', 'borivali', 2233451),
('bhumika', 'bhumika@gmail.com', 'gohil', 'maharashtra', 'virar', 2234512),
('shruthi', 'shruach2208@gmail.com', 'acharya', 'maharashtra', 'virar', 2234901),
('rakesh', 'rakesh@gmail.com', 'sharma', 'delhi', 'vasai', 2553430);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_db`
--
ALTER TABLE `bill_db`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `enter_values`
--
ALTER TABLE `enter_values`
  ADD PRIMARY KEY (`ename`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
