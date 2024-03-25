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
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tour_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `img_path` text NOT NULL,
  `description` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tour_id`, `category_id`, `name`, `img_path`, `description`) VALUES
(1, 1, 'GIZA', 'images\\ceties\\giza.jpg', 'Located in the west of Cairo, Giza is home to the famous Giza Pyramids, one of the Seven Wonders of the Ancient World. The city also houses the iconic Sphinx, known for its distinctive lion\'s'),
(2, 1, 'Aswan', 'images\\ceties\\Aswan.jpg', 'Located in southern Egypt, Aswan is renowned for its stunning natural beauty and its location along the Nile River. The magnificent Philae Temple, a UNESCO World Heritage site, is a must-visi'),
(3, 1, 'Fayoum', 'images\\ceties\\Fayoum.jpg', 'The enchanting oasis of Fayoum is known for its natural beauty and rich history. Visitors can explore the Wadi El Rayan protected area, which features mesmerizing waterfalls and lakes. The Va'),
(4, 1, 'Siwa', 'images\\ceties\\siwa.jpg', 'Situated in a remote location, Siwa oasis offers a magical experience. It is known for its unique culture, traditions, and stunning landscapes. Cleopatra\'s Bath, a natural spring, is a popula'),
(5, 1, 'Luxor', 'images\\ceties\\Luxor.jpg', 'Often referred to as the world\'s greatest open-air museum, Luxor is a city rich in historical significance. The Valley of the Kings is a renowned necropolis, housing the tombs of pharaohs. Th'),
(6, 1, 'Alexandria', 'images\\ceties\\alex.jpg', 'Alexandria is a city steeped in history and culture. The Bibliotheca Alexandrina is a modern library that pays homage to the ancient Great Library of Alexandria. The Catacombs of Kom El Shoqa'),
(7, 2, 'London', 'images\\ceties\\London.jpg', 'London, the capital of the United Kingdom, is a vibrant city with a rich history and diverse culture. It is known for its iconic landmarks such as the Tower of London, a historic castle on th'),
(8, 2, 'Malaysia', 'images\\ceties\\Malaysia.jpg', 'Malaysia is a captivating destination that combines cultural diversity with stunning natural landscapes. Kuala Lumpur, the capital city, is famous for its towering skyscrapers, including the '),
(9, 2, 'Paris', 'images\\ceties\\Paris.jpg', 'Paris, the capital of France, is synonymous with romance, art, and culture. The city is home to architectural wonders like the Eiffel Tower, a symbol of Paris, offering panoramic views of the'),
(10, 2, 'New York', 'images\\ceties\\New York.jpg', 'New York City, often referred to as the \"Big Apple,\" is a bustling metropolis that never sleeps. It is a melting pot of cultures, offering a vibrant atmosphere and endless possibilities. Visi'),
(11, 2, 'Rio de Janeiro', 'images\\ceties\\Rio de Janeiro.jpg', 'Rio de Janeiro, located in Brazil, is a city renowned for its stunning natural beauty and vibrant culture. Stand in awe of the iconic Christ the Redeemer statue, perched atop Corcovado Mounta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `tours_category_id_index` (`category_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `travel_categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
