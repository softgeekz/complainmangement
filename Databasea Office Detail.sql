-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 02:15 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complain`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `updatetime` int(11) NOT NULL,
  `flag` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updatetime`, `flag`) VALUES
(1, 'admin', '123456', 1500188066, '1');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `complainby_userid` int(11) NOT NULL,
  `department_id` int(5) NOT NULL,
  `type` varchar(200) NOT NULL,
  `assignedto_employeeid` int(5) NOT NULL,
  `complain_date` varchar(15) NOT NULL,
  `complain_description` text NOT NULL,
  `photo` text NOT NULL,
  `solution` text NOT NULL,
  `status` int(1) NOT NULL,
  `updatetime` int(11) NOT NULL,
  `solvedtime` int(11) NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `complainby_userid`, `department_id`, `type`, `assignedto_employeeid`, `complain_date`, `complain_description`, `photo`, `solution`, `status`, `updatetime`, `solvedtime`, `flag`) VALUES
(1, 3, 2, 'aasdf', 0, '1521176470', ' asdf', '', '', 0, 1521176470, 0, 1),
(2, 3, 2, 'aasdf', 0, '1521176470', ' asdf', '', '', 0, 1521176470, 0, 1),
(3, 3, 2, 'aasdf', 0, '1521176503', ' asdf', '', '', 0, 1521176503, 0, 1),
(4, 3, 2, 'asdf', 0, '1521319140', ' asdf', '', '', 0, 1521319140, 0, 1),
(5, 3, 2, 'asdf', 0, '1521319177', ' asdf', '', '', 0, 1521319177, 0, 1),
(6, 3, 2, 'sdfasdf', 0, '1521319263', ' asdf', '', '', 0, 1521319263, 0, 1),
(7, 3, 2, 'asdf', 0, '1521319289', ' asdf', '', '', 0, 1521319289, 0, 1),
(8, 3, 2, 'asdf', 0, '1521319662', ' asdf', '', '', 0, 1521319662, 0, 1),
(9, 3, 2, 'asdf', 0, '1521319676', ' asdf', '', '', 0, 1521319676, 0, 1),
(10, 3, 2, 'asdf', 0, '1521319715', ' asdf', '', '', 0, 1521319715, 0, 1),
(11, 3, 2, 'asdf', 0, '1521319986', ' asdf', 'executiveinn1.jpg', '', 0, 1521319986, 0, 1),
(12, 8, 1, 'movie', 0, '1521464837', ' asdf', '13590510_1760768414145409_1811408918081778522_n.jpg', '', 0, 1521464837, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(3) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `dept_name`, `flag`) VALUES
(1, 'Web', 1),
(2, 'Network', 1),
(3, 'Sales', 1),
(4, 'Store', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `emoplyee_name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `dept` int(5) NOT NULL,
  `updatetime` int(11) NOT NULL,
  `flag` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emoplyee_name`, `username`, `password`, `dept`, `updatetime`, `flag`) VALUES
(1, 'Mr. Guddu MIa', 'guddu', '123456', 1, 1514965494, '1'),
(2, 'Mr. Monni Akther', 'monni', '333', 1, 1514965494, '1'),
(6, 'Marina Duarte', 'marina', '123456', 2, 1521002265, '0'),
(7, 'Shirin', 'marina', '123456', 3, 1521002265, '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `photo` text NOT NULL,
  `password` varchar(32) NOT NULL,
  `updatetime` int(11) NOT NULL,
  `flag` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `company_name`, `email`, `contactno`, `address`, `photo`, `password`, `updatetime`, `flag`) VALUES
(1, 'Jessica Jhumu', '12345', '', '', '', '', '', '654321', 1514965494, '1'),
(2, 'Tarique Mosharraf', 'tariq ', 'Tariq Company', 'tariq4478@gmail.com', '01837664478 ', 'uttara dhaka', '', '654321', 1521145100, '1'),
(3, 'Monni akterq', 'monni ', 'Monni and SOngs', 'minerpoint@gmail.com', '01837664478 ', 'Uttara DHaka', '', '123456', 1521145143, '1'),
(4, 'Jesssica Alba', 'jessica ', 'Jessica Albia', 'softgeekzteam@gmail.com', '1837664478 ', 'House#19, Raod#01, Sector 6, Uttara', '', '123', 1521463303, '1'),
(5, 'Jesssica Alba', 'jessica ', 'Jessica Albia', 'softgeekzteam@gmail.com', '1837664478 ', 'House#19, Raod#01, Sector 6, Uttara', '', '123456', 1521463497, '1'),
(6, 'Shima Chowdhury', 'shima ', 'Shima Associates', 'shima@gmail.com', '9333 ', 'House#19, Raod#01, Sector 6, Uttara', 'profile2.jpg', '123', 1521463930, '1'),
(7, 'Shumil Hisham', 'hisham ', 'Hisam adn Co', 'shimul@gmail.com', '0343434 ', 'House#19, Raod#01, Sector 6, Uttara', 'profile2.jpg', '123', 1521464064, '1'),
(8, 'Kohinur', 'kohinur ', 'Kohinur Chemical', 'softgeekzteam@gmail.comd', '3 ', 'House#19, Raod#01, Sector 6, Uttara', 'profilepic.jpg', '123456', 1521464198, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
