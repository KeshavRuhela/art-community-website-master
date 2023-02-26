-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 02:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artcomunity`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sno`, `name`, `email`, `password`, `date`) VALUES
(1, 'keshav', 'rohela.keshav@gmail.com', '123', '2023-02-25'),
(2, 'ruhela', 'webdev.ruhela@gmail.com', '123', '2023-02-26'),
(3, 'ilu', 'rohela.ilu@gmail.com', '123', '2023-02-26'),
(4, 'pramod', 'rohela.pramod@gmail.com', '123', '2023-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `suggession`
--

CREATE TABLE `suggession` (
  `unique_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `date` int(11) NOT NULL DEFAULT current_timestamp(),
  `mobile` int(20) NOT NULL,
  `title` text NOT NULL,
  `price` int(10) NOT NULL,
  `description` text NOT NULL,
  `tags` text NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `img_orignal_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggession`
--

INSERT INTO `suggession` (`unique_id`, `user_id`, `date`, `mobile`, `title`, `price`, `description`, `tags`, `image_name`, `user`, `img_orignal_name`) VALUES
(1, 'rohela.keshav@gmail.com', 2147483647, 2147483647, 'nice', 10, 'kj', 'all', '&quot;keshav&quot;1.jpg', '&quot;keshav&quot;', '&quot;keshav&quot;5.jpg'),
(2, 'rohela.keshav@gmail.com', 2147483647, 2147483647, 'nice', 10, 'kj', 'all', '&quot;keshav&quot;2.jpg', '&quot;keshav&quot;', '&quot;keshav&quot;6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `suggession`
--
ALTER TABLE `suggession`
  ADD PRIMARY KEY (`unique_id`),
  ADD UNIQUE KEY `img_orignal_name` (`img_orignal_name`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suggession`
--
ALTER TABLE `suggession`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
