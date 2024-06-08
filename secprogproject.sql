-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 05:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secprogproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `title`, `content`, `date`) VALUES
(1, 'Pertemuan Pertama', 'membahas tentang algoritma dan dasar dasar dari codingan', '2023-03-13 17:00:00'),
(2, 'Pertemuan Kedua', 'membahas lebih dalam mengenai kondisi if dan loop', '2023-04-18 17:00:00'),
(3, 'Pertemuan ketiga', 'membahas tentang nested if dan nested loop', '2023-05-23 17:00:00'),
(4, 'awefasdf', 'awefasdfaewf', '2024-04-09 17:00:00'),
(6, 'Pertemuan Keduabelas', '', '2024-08-12 17:00:00'),
(7, 'pertemuan ketigabelas', 'membahas tentang ujian akhir', '2024-09-11 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `hashed_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `role`, `hashed_password`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$BPE/kgC8NLUomN/iCa6eeegWOuKTZ80VPLF3xmnghJqsxOYqeFjpK'),
(2, 'user', 'user', 'user', '$2y$10$a8jrk74J2dTSsKbPfBAGCO2Uy71PLKr463TIQy.Amc82fr4N/nAgS'),
(3, 'dummy', 'dummy', 'user', '$2y$10$hkP.MgULLEnhYZIxZsKm..rQHPI74819BEpfLfuYimA1EwKc3nW2C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
