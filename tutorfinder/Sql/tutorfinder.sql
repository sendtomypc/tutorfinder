-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 11:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`) VALUES
(1, 'Shinde Saurabh', 'saurabh.shinde75.ss@gmail.com', 'hello '),
(2, 'Dhruvil Gadhavi', 'dhruvil@gmail.com', 'Hi I want to apply for personal tutor'),
(3, 'rohit mishra', 'mishrarohit@gmail.com', 'Hi there!'),
(4, 'Divyaraj Mod', 'djmd333@gmail.com', 'hi I applied for personal tutor '),
(9, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personaltutor`
--

CREATE TABLE `personaltutor` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personaltutor`
--

INSERT INTO `personaltutor` (`id`, `name`, `email`, `subject`, `phoneno`) VALUES
(1, 'Soni Nirav', 'sn@gmail.com', '', ''),
(2, 'Saurabh Shinde ', 'Saurabh.shinde75.ss@gmail.com', '', ''),
(3, 'Rohit Mishra', 'mishrarohit.6383@gmail.com', '', ''),
(4, 'Om Soni', 'omsoni@gmail.com', '', ''),
(6, 'soni nirav', 'imsn@gmail.com', 'toc', '995591919'),
(7, 'Khusal Batham', 'kb@gmail.com', 'TOC', '959596');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `phoneno`, `email`, `pwd`, `location`) VALUES
(12, 'Soni Nirav', '9512347616', 'sn@gmail.com', 'sn@gmail.com', 'Thaltej'),
(13, 'Om Soni', '9595959559', 'omsoni@gmail.com', 'omsoni@gmail.com', 'Juna Wadaj'),
(14, 'Harshiil Soni', '7090961611', 'harshil@gmail.com', 'harshil@gmail.com', 'Bopal');

-- --------------------------------------------------------

--
-- Table structure for table `signupasatutor`
--

CREATE TABLE `signupasatutor` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signupasatutor`
--

INSERT INTO `signupasatutor` (`id`, `name`, `email`, `phoneno`, `pwd`, `location`, `subject`, `experience`) VALUES
(5, 'Mikin Dagli', 'mikinbhai@gmail.com', '5959595448', 'mikinbhai', 'Sola', 'TOC', '5-10 Years'),
(8, 'Mayank Devani', 'mayankbhai@gmail.com', '7887878787', 'mayankbhai', 'Science City', 'Web Technology', '5-10 Years'),
(9, 'Pratik Zala', 'pratikbhai@gmail.com', '4545558787', 'pratikbhai', 'Juna Wadaj', 'JAVA', '1-5 Years'),
(10, 'Jaydeep kanani', 'jaydeepbhai@gmail.com', '4557879841', 'jaydeepbhai', 'Vaastrapur', 'AJ', '1-5 Years'),
(11, 'Chintan Arora', 'chintanbhai@gmail.com', '4598164264', 'chintanbhai', 'Chandkheda', 'Maths3', 'More than 10 Years'),
(12, 'Om Soni', 'omsoni@gmail.com', '9595999599', 'omsoni@gmail.com', 'Sola', 'JAVA', 'No Experience');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personaltutor`
--
ALTER TABLE `personaltutor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signupasatutor`
--
ALTER TABLE `signupasatutor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personaltutor`
--
ALTER TABLE `personaltutor`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signupasatutor`
--
ALTER TABLE `signupasatutor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
