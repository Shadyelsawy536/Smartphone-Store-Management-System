-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2026 at 09:26 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ID`, `name`, `price`, `quantity`) VALUES
(14, 'Realme 16', 2000, 300);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(12, 'tomsmith', 'eshady001@gmail.com', '$2y$10$brnAnDj7HG0rlC3Fsu59.e3j6phK8jOLHlX.n.a1G.vbswSZkbAhG'),
(13, 'shadyelsawy536@gmail.com', 'shadyelsawy536@gmail.com', '$2y$10$qLSaMSPw7/Di.ZRwbwNBieOoVcHuvoEd9SxD/tFqNd4HZ5I8RcgCu'),
(14, '1942', '1942@gmail.com', '$2y$10$IXUTYCC5OnyZq44fB3CTC.cwfdwsGESCasz13uofCJ.TTtuNLoAoe'),
(15, 'shady536', 'shady@gmail.com', '$2y$10$i0.OWikVnH/5SVr4.1sMm.0qt5wWo8NuDCvTIASQHf2tGJsFYT182'),
(16, 'test', 'test@gmail.com', '$2y$10$jGMyxh0xeLpaBLtuRQ492uBkhWGGxGQYL9P79G0tHCGTe/tSAzpOy'),
(17, ' Dr Arafat', 'dr.aradat@gmail.com', '$2y$10$./bcgZxftXcXAVDKG9i26eAbnY5QPUIKlhDJpgRaU5zcRZxBJgE/q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
