-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 04:05 PM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(10) NOT NULL,
  `img_id` int(10) NOT NULL,
  `comment` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `img_id`, `comment`, `time`) VALUES
(1, 6, 'awesome painting', '2023-03-02 15:03:56'),
(2, 6, 'This is my favorite one', '2023-03-02 16:08:10'),
(3, 6, 'cool ', '2023-03-02 16:14:55'),
(4, 6, 'nice', '2023-03-02 16:15:03'),
(5, 6, 'outstanding', '2023-03-02 16:15:13'),
(6, 6, 'excelent', '2023-03-02 16:15:22'),
(7, 6, 'love this', '2023-03-02 16:15:37'),
(8, 6, 'unbillable ', '2023-03-02 16:16:22'),
(9, 6, 'incridable', '2023-03-02 16:16:31'),
(10, 6, 'mind blowing', '2023-03-02 16:16:57'),
(11, 6, 'mast', '2023-03-02 16:17:16'),
(12, 6, 'lovely', '2023-03-02 16:17:23'),
(13, 6, 'master piece', '2023-03-02 16:42:27'),
(14, 6, 'very good work', '2023-03-02 17:55:29'),
(15, 6, 'good job', '2023-03-02 17:55:53'),
(16, 6, 'mst', '2023-03-02 17:56:18'),
(17, 6, 'wow', '2023-03-02 17:57:26'),
(18, 3, 'jai shree ram', '2023-03-02 17:58:44'),
(19, 3, 'ram ram', '2023-03-02 17:59:08'),
(20, 4, 'jai shree krishna', '2023-03-02 17:59:25'),
(21, 1, 'mind blowing 🤯', '2023-03-03 15:34:43'),
(22, 15, 'wow', '2023-03-03 18:10:19'),
(23, 1, 'good art', '2023-03-03 19:11:49'),
(24, 13, 'gorgeous', '2023-03-16 10:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `images_details`
--

CREATE TABLE `images_details` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `tags` text NOT NULL,
  `category` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images_details`
--

INSERT INTO `images_details` (`id`, `title`, `description`, `price`, `tags`, `category`, `time`, `image_name`) VALUES
(1, 'dream', 'It contains size etc', 250, 'Oil painting house houses trees', 'Oil Painting', '2023-02-26 18:30:00', 'shop1.jpg'),
(2, 'asdf', 'dfg', 3534, 'sdf', 'sdf', '2023-02-27 16:41:41', 'shop2.jpg'),
(3, 'asdf', 'dfg', 3534, 'sdf', 'sdf', '2023-02-27 16:46:45', 'shop3.jpg'),
(4, 'asdf', 'dfg', 3534, 'sdf', 'sdf', '2023-02-27 16:47:27', 'shop4.jpg'),
(5, 'asdf', 'dfg', 3534, 'sdf', 'sdf', '2023-02-27 16:47:44', 'shop5.jpg'),
(6, 'asdf', 'dfg', 3534, 'sdf', 'sdf', '2023-02-27 16:48:31', 'shop6.jpg'),
(7, 'asdf', 'dfg', 3534, 'sdf', 'sdf', '2023-02-27 16:48:57', 'shop7.jpg'),
(8, 'asdf', 'dfg', 3534, 'sdf', 'sdf', '2023-02-27 16:48:58', 'shop8.jpg'),
(9, 'asdf', 'dfg', 3534, 'sdf', 'sdf', '2023-02-27 16:49:27', 'shop9.jpg'),
(10, 'asdf', 'dfg', 3534, 'sdf', 'sdf', '2023-02-27 16:52:34', 'shop10.jpg'),
(11, 'asdf', 'dfg', 3534, 'sdf', 'sdf', '2023-02-27 16:55:22', 'shop11.jpg'),
(12, 'text', 'all about', 234, 'oil painting oilpainting designer', 'oil painting', '2023-02-27 17:05:05', 'shop12.jpg'),
(13, 'keshav', 'skjdhf', 67, 'sdn', 'sdn', '2023-03-01 07:42:24', 'shop13.jpg'),
(14, 'peacoko', 'nice', 100, 'peacoko oil painting painting', 'oil painting', '2023-03-01 18:50:10', 'shop14.jpg'),
(15, 'amazing Design', 'animals amazing Design', 100, 'amazing Design animal beautiful ', 'oil painting', '2023-03-03 18:09:27', 'shop15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `liked_image`
--

CREATE TABLE `liked_image` (
  `image_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sno` int(11) NOT NULL,
  `user_emailid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `liked_images`
--

CREATE TABLE `liked_images` (
  `sno` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liked_images`
--

INSERT INTO `liked_images` (`sno`, `image_id`, `user_id`, `user_name`) VALUES
(45, 13, 'rohela.keshav@gmail.com', 'keshav'),
(46, 8, 'rohela.keshav@gmail.com', 'keshav');

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `images_details`
--
ALTER TABLE `images_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liked_images`
--
ALTER TABLE `liked_images`
  ADD PRIMARY KEY (`sno`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `images_details`
--
ALTER TABLE `images_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `liked_images`
--
ALTER TABLE `liked_images`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
