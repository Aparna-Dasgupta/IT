-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2018 at 11:29 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it`
--

-- --------------------------------------------------------

--
-- Table structure for table `cus_login`
--

CREATE TABLE `cus_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus_login`
--

INSERT INTO `cus_login` (`username`, `password`) VALUES
('Aparna', '876'),
('sumaiya', 'sumaiya');

-- --------------------------------------------------------

--
-- Table structure for table `cus_register`
--

CREATE TABLE `cus_register` (
  `cusername` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `place` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus_register`
--

INSERT INTO `cus_register` (`cusername`, `name`, `place`, `country`, `contact`, `email`, `password`) VALUES
('Aparna', 'Aparna Dasgupta', 'bengaluru', 'India', 9087654321, 'elizabeth@gmail.com', '876'),
('sumaiya', 'sumaiya', 'bangalore', 'india', 9590147894, 'sumaiyanaj@gmail.com', 'sumaiya');

-- --------------------------------------------------------

--
-- Table structure for table `res_characteristics`
--

CREATE TABLE `res_characteristics` (
  `resname` varchar(100) NOT NULL,
  `alcohol` varchar(50) DEFAULT NULL,
  `seating` varchar(50) DEFAULT NULL,
  `payments` varchar(50) DEFAULT NULL,
  `cuisines` varchar(50) DEFAULT NULL,
  `avg_price` int(5) NOT NULL,
  `tags` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_characteristics`
--

INSERT INTO `res_characteristics` (`resname`, `alcohol`, `seating`, `payments`, `cuisines`, `avg_price`, `tags`) VALUES
('Club Cabana', 'serves', 'notAvailable', 'cash', 'Indian', 0, 'DJ'),
('Le Arabian', 'serves', 'available', 'cards', 'Italian', 0, 'music'),
('Udupi grand', 'doesntServe', 'available', 'cards', 'Indian', 0, 'veg');

-- --------------------------------------------------------

--
-- Table structure for table `res_location`
--

CREATE TABLE `res_location` (
  `resname` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `zip` bigint(6) NOT NULL,
  `country` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_location`
--

INSERT INTO `res_location` (`resname`, `address`, `zip`, `country`) VALUES
('Club Cabana', 'kormangala', 580064, 'INDIA'),
('Le Arabian', 'bel road', 560098, 'INDIA'),
('Udupi grand', 'yelahanka new town', 560064, 'INDIA');

-- --------------------------------------------------------

--
-- Table structure for table `res_login`
--

CREATE TABLE `res_login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_login`
--

INSERT INTO `res_login` (`username`, `password`) VALUES
('Club Cabana', 'cabana'),
('Le Arabian', '1234'),
('Udupi grand', '123');

-- --------------------------------------------------------

--
-- Table structure for table `res_register`
--

CREATE TABLE `res_register` (
  `resname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(80) NOT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `phone` bigint(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `cuisines` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_register`
--

INSERT INTO `res_register` (`resname`, `email`, `password`, `city`, `owner`, `phone`, `status`, `cuisines`) VALUES
('Club Cabana', 'cabana@gmail.com', 'cabana', 'Bangalore', 'YesOwner', 9087654321, 'Open', 'Indian'),
('Le Arabian', 'learabian@gmail.com', '1234', 'Mangalore', 'Yes I\'m the Owner', 9807654321, 'Open', 'Italian'),
('Udupi grand', 'udupi@gmail.com', '123', 'Bangalore', 'YesOwner', 9876567890, 'Open', 'Indian');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(5) NOT NULL,
  `resname` varchar(100) NOT NULL,
  `cusername` varchar(50) NOT NULL,
  `rcuisine` varchar(50) NOT NULL,
  `res_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `resname`, `cusername`, `rcuisine`, `res_review`) VALUES
(16, 'Le Arabian', 'Aparna', 'Italian', 'good restuarant'),
(17, 'Club Cabana', 'Aparna', 'Indian', 'very good'),
(18, 'Udupi grand', 'sumaiya', 'Indian', 'very good one'),
(19, 'Le Arabian', 'sumaiya', 'Italian', 'nice one');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cus_login`
--
ALTER TABLE `cus_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cus_register`
--
ALTER TABLE `cus_register`
  ADD PRIMARY KEY (`cusername`),
  ADD UNIQUE KEY `cusername` (`cusername`);

--
-- Indexes for table `res_characteristics`
--
ALTER TABLE `res_characteristics`
  ADD PRIMARY KEY (`resname`);

--
-- Indexes for table `res_location`
--
ALTER TABLE `res_location`
  ADD PRIMARY KEY (`resname`);

--
-- Indexes for table `res_login`
--
ALTER TABLE `res_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `res_register`
--
ALTER TABLE `res_register`
  ADD PRIMARY KEY (`resname`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `resname` (`resname`),
  ADD KEY `cusername` (`cusername`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cus_login`
--
ALTER TABLE `cus_login`
  ADD CONSTRAINT `cus_login_cus_register` FOREIGN KEY (`username`) REFERENCES `cus_register` (`cusername`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cus_login_cus_register_nam` FOREIGN KEY (`username`) REFERENCES `cus_register` (`cusername`) ON UPDATE CASCADE;

--
-- Constraints for table `res_characteristics`
--
ALTER TABLE `res_characteristics`
  ADD CONSTRAINT `res_characteristics_res_register` FOREIGN KEY (`resname`) REFERENCES `res_register` (`resname`);

--
-- Constraints for table `res_location`
--
ALTER TABLE `res_location`
  ADD CONSTRAINT `res_register_res_location` FOREIGN KEY (`resname`) REFERENCES `res_register` (`resname`);

--
-- Constraints for table `res_login`
--
ALTER TABLE `res_login`
  ADD CONSTRAINT `res_login_res_register` FOREIGN KEY (`username`) REFERENCES `res_register` (`resname`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
