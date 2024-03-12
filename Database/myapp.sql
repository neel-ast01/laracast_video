-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 09:27 AM
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
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `body` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `body`, `user_id`, `description`) VALUES
(2, 'Dangal', 2, 'Description for Dangal'),
(3, 'Bahubali: The Beginning 1', 1, 'Description for Bahubali: The Beginning'),
(4, 'PK', 2, 'Description for PK'),
(5, 'Bajrangi Bhaijaan', 1, 'Description for Bajrangi Bhaijaan'),
(6, '3 Idiots', 2, 'Description for 3 Idiots'),
(24, '123', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'John Doe', '123-456-7890', 'john.doe@example.com', ''),
(2, 'Jane Smith', '987-654-3210', 'jane.smith@example.com', ''),
(3, 'Alice Johnson', '555-123-4567', 'alice.johnson@example.com', ''),
(4, 'Bob Brown', '777-888-9999', 'bob.brown@example.com', ''),
(5, 'Neel', '8849165877', 'neelbhalodiya555@gmail.com', 'Password@123'),
(32, '', '', 'dehuw@mailinator.com', '$2y$10$ZBYLNgJYbzDz0FMykEO3OuTSmI7VZExw6PbkwEFLvJ0q71DdhRx3S'),
(33, '', '', 'vixyqijyve@mailinator.com', '$2y$10$GhvQCJhvqfcQKG6OfjJPyud4GqY9h35Pz0VJHtBcByOlDkKANGHOC'),
(34, '', '', 'gb23697@gmail.com', '$2y$10$BKzqcLOzoiqbRfIeVBsU1uEZrkhmeHe6Y15D7mTu42rogeg9GCVC6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_posts_users` (`user_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `FK_posts_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
