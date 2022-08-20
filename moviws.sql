-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 09:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `moviws`
--

CREATE TABLE `moviws` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `movie_description` text NOT NULL,
  `uploaded_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviws`
--

INSERT INTO `moviws` (`movie_id`, `movie_name`, `movie_description`, `uploaded_time`) VALUES
(1, 'saw', 'a verry bloody movie', '2022-08-19 18:31:10'),
(4, 'dead pool2', 'this is awired movie', '2022-08-19 19:15:53'),
(5, 'the mask', 'its verry boreing', '2022-08-19 19:17:01'),
(6, 'saw2', 'a verry bloody movie too', '2022-08-19 19:31:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moviws`
--
ALTER TABLE `moviws`
  ADD PRIMARY KEY (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moviws`
--
ALTER TABLE `moviws`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
