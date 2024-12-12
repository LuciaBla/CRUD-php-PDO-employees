-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2024 at 06:24 PM
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
-- Database: `Kdrama`
--

-- --------------------------------------------------------

--
-- Table structure for table `Kdramas`
--

CREATE TABLE `Kdramas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `ano_lanzamiento` year(4) DEFAULT NULL,
  `popularidad` int(11) DEFAULT NULL,
  `director` varchar(150) DEFAULT NULL,
  `empresa` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Kdramas`
--

INSERT INTO `Kdramas` (`id`, `nombre`, `ano_lanzamiento`, `popularidad`, `director`, `empresa`) VALUES
(1, 'Crash Landing on You', '2019', 95, 'Lee Jung-hyo', 'Studio Dragon'),
(2, 'Goblin', '2016', 98, 'Lee Eung-bok', 'Hwa&Dam Pictures'),
(3, 'Itaewon Class', '2020', 90, 'Kim Sung-yoon', 'Showbox'),
(4, 'Vincenzo', '2021', 92, 'Kim Hee-won', 'Studio Dragon'),
(5, 'My Love from the Star', '2013', 97, 'Jang Tae-yoo', 'HB Entertainment'),
(6, 'Descendants of the Sun', '2016', 96, 'Lee Eung-bok', 'KBS2'),
(7, 'The Heirs', '2013', 89, 'Kang Shin-hyo', 'Hwa&Dam Pictures'),
(8, 'Strong Woman Do Bong-soon', '2017', 91, 'Lee Hyung-min', 'Drama House'),
(9, 'Hotel Del Luna', '2019', 94, 'Oh Choong-hwan', 'Studio Dragon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Kdramas`
--
ALTER TABLE `Kdramas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Kdramas`
--
ALTER TABLE `Kdramas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
