-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 12:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkpesat2`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa_smk`
--

CREATE TABLE `siswa_smk` (
  `id` int(11) NOT NULL,
  `NIS` int(8) NOT NULL,
  `Nama` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Jurusan` varchar(250) NOT NULL,
  `Gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa_smk`
--

INSERT INTO `siswa_smk` (`id`, `NIS`, `Nama`, `Email`, `Jurusan`, `Gambar`) VALUES
(1, 360001, 'Nadhif', 'nadhif001@gmail.com', 'RPL', 'hacker.jpg'),
(2, 360002, 'Faried', 'faried002@gmail.com', 'RPL', 'hacker2.jpg'),
(3, 360003, 'Aqil', 'aqil003@gmail.com', 'RPL', 'hacker3.jpg'),
(4, 360004, 'Dimas', 'dimas004@gmail.com', 'RPL', 'hacker4.jpg'),
(5, 360005, 'Len', 'ahmdfahri005@gmail.com', 'RPL', 'hacker5.jpg'),
(7, 360006, 'Adzka', 'adzka006@gmail.com', 'RPL', 'hacker.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa_smk`
--
ALTER TABLE `siswa_smk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa_smk`
--
ALTER TABLE `siswa_smk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
