-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 09:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egtour`
--

-- --------------------------------------------------------

--
-- Table structure for table `travel_categories`
--

CREATE TABLE `travel_categories` (
  `category_id` bigint(20) NOT NULL,
  `category_name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_categories`
--

INSERT INTO `travel_categories` (`category_id`, `category_name`, `description`) VALUES
(1, 'Inner Travels', 'Embark on an extraordinary adventure within your own borders with EG Tour, where we unlock the doors to captivating domestic destinations that will ignite your sense of wonder. From picturesq'),
(2, 'Outer Travels', 'Embark on a remarkable journey with EG Tour, where we unlock the doors to extraordinary destinations around the globe, offering you a myriad of captivating experiences, from exploring ancient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travel_categories`
--
ALTER TABLE `travel_categories`
  ADD PRIMARY KEY (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
