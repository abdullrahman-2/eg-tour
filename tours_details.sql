-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 09:14 PM
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
-- Table structure for table `tours_details`
--

CREATE TABLE `tours_details` (
  `tour_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `duration` int(11) NOT NULL,
  `price` decimal(10,2) UNSIGNED NOT NULL,
  `primary_img` text NOT NULL,
  `overall_img` text NOT NULL,
  `program` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours_details`
--

INSERT INTO `tours_details` (`tour_id`, `name`, `description`, `duration`, `price`, `primary_img`, `overall_img`, `program`) VALUES
(6, 'Alexandria', 'Alexandria is a city steeped in history and culture. The Bibliotheca Alexandrina is a modern library that pays homage to the ancient Great Library of Alexandria. The Catacombs of Kom El Shoqa', 3, 30.00, 'images/ceties/alex.jpg', '', 'Our final destination is Alexandria, a city steeped in history and culture. Visit the iconic Bibliotheca Alexandrina, explore the ancient Catacombs of Kom El Shoqafa, stroll along the scenic Corniche, and indulge in the city\'s vibrant culinary scene and vibrant markets.'),
(2, 'Aswan', 'Located in southern Egypt, Aswan is renowned for its stunning natural beauty and its location along the Nile River. The magnificent Philae Temple, a UNESCO World Heritage site, is a must-visi', 8, 100.00, 'images/ceties/Aswan.jpg', '', 'we take you to Aswan, a city located on the banks of the Nile River. Immerse yourself in the tranquil beauty of Aswan\'s landscapes, visit the magnificent Philae Temple, take a relaxing felucca boat ride on the Nile, and witness the mesmerizing Abu Simbel temples, a true testament to ancient Egyptian architecture.'),
(3, 'Fayoum', 'The enchanting oasis of Fayoum is known for its natural beauty and rich history. Visitors can explore the Wadi El Rayan protected area, which features mesmerizing waterfalls and lakes. The Va', 7, 70.00, 'images/ceties/Fayoum.jpg', '', 'Our journey continues to the enchanting Fayoum oasis, known for its natural beauty and rich history. Explore the stunning Wadi El Rayan, a protected area with mesmerizing waterfalls and lakes, visit the UNESCO-listed Valley of the Whales, and experience the traditional lifestyle of the local Bedouin communities.'),
(1, 'Giza', 'Located in the west of Cairo, Giza is home to the famous Giza Pyramids, one of the Seven Wonders of the Ancient World. The city also houses the iconic Sphinx, known for its distinctive lion\'s', 3, 50.00, 'images/ceties/giza.jpg', '', 'Our program begins in Giza, home to the iconic Great Pyramids and the majestic Sphinx. Marvel at the ancient wonders of the world as you delve into the mysteries of the pyramids, learn about their historical significance, and witness the breathtaking sunset over the desert.'),
(7, 'London', 'London, the capital of the United Kingdom, is a vibrant city with a rich history and diverse culture. It is known for its iconic landmarks such as the Tower of London, a historic castle on th', 10, 400.00, 'images/ceties/London.jpg', '', 'Explore the capital of the United Kingdom, London, one of the most exciting cities in the world. Visit the Tower of London and enjoy a stunning view of the city. Explore the Natural History Museum and the Science Museum, and wander through the famous Hyde Park. Don\'t miss a visit to Buckingham Palace and stroll along the renowned shopping street, Oxford Street.'),
(5, 'Luxor', 'Often referred to as the world\'s greatest open-air museum, Luxor is a city rich in historical significance. The Valley of the Kings is a renowned necropolis, housing the tombs of pharaohs. Th', 9, 100.00, 'images/ceties/Luxor.jpg', '', 'Our program takes you to Luxor, often referred to as the world\'s greatest open-air museum. Explore the legendary Valley of the Kings, step into the magnificent temples of Karnak and Luxor, and sail along the Nile on a traditional felucca, taking in the stunning vistas of this historical city'),
(8, 'Malaysia', 'Malaysia is a captivating destination that combines cultural diversity with stunning natural landscapes. Kuala Lumpur, the capital city, is famous for its towering skyscrapers, including the ', 15, 500.00, 'images/ceties/Malaysia.jpg', '', 'Get ready for an amazing experience in Malaysia, where diverse cultures and enchanting landscapes come together. Visit the famous Petronas Twin Towers in Kuala Lumpur and enjoy a breathtaking panoramic view. Enjoy a trip to Langkawi Island and explore its tropical forests and white sandy beaches. Discover the historical heritage of Malacca and indulge in delicious cuisine in George Town.'),
(10, 'New York', 'New York City, often referred to as the \"Big Apple,\" is a bustling metropolis that never sleeps. It is a melting pot of cultures, offering a vibrant atmosphere and endless possibilities. Visi', 8, 300.00, 'images/ceties/New York.jpg', '', 'Explore the cultural and commercial capital of the United States, New York. Visit Times Square and enjoy watching spectacular Broadway shows. Take a stroll in the famous Central Park and enjoy the skyline view from the top of the Empire State Building. Shop on Fifth Avenue and savor delicious cuisine in Manhattan.'),
(9, 'Paris', 'Paris, the capital of France, is synonymous with romance, art, and culture. The city is home to architectural wonders like the Eiffel Tower, a symbol of Paris, offering panoramic views of the', 10, 400.00, 'images/ceties/Paris.jpg', '', 'Enjoy the beauty and romance of Paris, the capital of France. Visit the famous Eiffel Tower and wander through the elegant Champs-Élysées. Enjoy a visit to the magnificent Louvre Museum and discover famous artworks like the Mona Lisa. Don\'t miss a visit to Notre-Dame Cathedral and take a stroll along the banks of the River Seine.'),
(11, 'Rio de Janeiro', 'Rio de Janeiro, located in Brazil, is a city renowned for its stunning natural beauty and vibrant culture. Stand in awe of the iconic Christ the Redeemer statue, perched atop Corcovado Mounta', 10, 500.00, 'images/ceties/Rio de Janeiro.jpg', '', 'A trip to Rio de Janeiro is an exceptional experience that combines natural beauty and vibrant culture. When you arrive in Rio de Janeiro, you\'ll feel the life and energy that fill the streets and beaches.\r\n\r\nYou can start your journey by visiting one of the city\'s most iconic landmarks, the famous statue of Christ the Redeemer, known as \"Cristo Redentor,\" located atop Corcovado Mountain. You\'ll enjoy a breathtaking view of the city and Guanabara Bay from this magnificent site.\r\n\r\nThen, make your way to the world-famous beaches of Rio de Janeiro, such as Copacabana and Ipanema. Feel the soft sand beneath your feet, soak up the sun, and take a dip in the refreshing waters of the Atlantic Ocean. These beaches are not only beautiful but also vibrant hubs of activity, with beachgoers playing sports, sipping caipirinhas, and enjoying the lively atmosphere.'),
(4, 'Siwa', 'Situated in a remote location, Siwa oasis offers a magical experience. It is known for its unique culture, traditions, and stunning landscapes. Cleopatra\'s Bath, a natural spring, is a popula', 11, 110.00, 'images/ceties/siwa.jpg', '', 'Prepare to be captivated by the remote and magical Siwa oasis. Discover the unique culture and traditions of the Siwan people, soak in the healing waters of Cleopatra\'s Bath, explore the ancient ruins of the Temple of the Oracle, and witness the breathtaking beauty of the Great Sand Sea.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tours_details`
--
ALTER TABLE `tours_details`
  ADD PRIMARY KEY (`name`),
  ADD KEY `tours_details_tour_id_index` (`tour_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tours_details`
--
ALTER TABLE `tours_details`
  ADD CONSTRAINT `tours_details_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`tour_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
