-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 05:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookeatsleep`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_email`, `user_pass`) VALUES
('ha@xyz.com', '123'),
('noor@xyz.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Likes` int(11) NOT NULL,
  `Recipe_Name` varchar(255) NOT NULL,
  `description_recipe` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `username`, `Likes`, `Recipe_Name`, `description_recipe`, `image`) VALUES
(6, 'adilhamed', 3, 'noor1', 'hello', 'Images/2019_01_28_15_02_21Screenshot (14).png'),
(7, 'adilhamed', 1, 'dsf', 's', 'Images/2019_01_28_15_03_1524232795_1457025634408436_3301562793659613141_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `Recipe_id` int(11) NOT NULL,
  `Recipe_Name` varchar(255) NOT NULL,
  `Recipe_Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`Recipe_id`, `Recipe_Name`, `Recipe_Description`) VALUES
(3, 'burger', 'kdkjdfkjsdkljklsjdkljskldjfklsjdklfjksldjfkljsdklfjklsdjfkljskldjfklsdklfj'),
(4, 'pizza', 'a very nice pizza');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profilePicture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `DateOfBirth`, `name`, `email`, `password`, `profilePicture`) VALUES
('adilhamed', '2019-01-02', 'adil muhammad hameed', 'a@xyz.com', 's', './Images/2019_01_21_15_14_574ea9ebcd2802d938629f9aabacabe4a4--devil-may-cry--base.jpg'),
('dlkfsldfklsj', '2019-01-09', 'hello ahmed slkdl', 'uhuh@xyz.com', '123456789', './Images/2019_01_28_17_22_3420638650_10159364341670455_1877820994411410416_n.png'),
('haseebmanzoor', '2019-01-19', 'haseeb manzoor nothing', 'h@xyz.com', 's', './Images/2019_01_21_15_32_0114fbfd63332378ea42542d89b00253e5.jpg'),
('noorahmadzafar', '2019-01-03', 'noor ahmad zafar', 'n@xyz.com', 'noor123', './Images/2019_01_21_15_14_134dc3f48103f5518a22bf8e2e5115e0cf.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `posts_ibfk_1` (`username`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`Recipe_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`DateOfBirth`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `Recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
