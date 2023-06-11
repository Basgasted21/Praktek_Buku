-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 02:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uprakxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ukk_buku`
--

CREATE TABLE `ukk_buku` (
  `id` int(11) NOT NULL,
  `kategori` varchar(13) NOT NULL,
  `no_isbn` int(13) NOT NULL,
  `judul_buku` varchar(64) NOT NULL,
  `pengarang` varchar(64) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `penerbit` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ukk_buku`
--

INSERT INTO `ukk_buku` (`id`, `kategori`, `no_isbn`, `judul_buku`, `pengarang`, `tahun_terbit`, `penerbit`) VALUES
(5, 'Comic', 78564, 'Mugello ', 'Peter Davidson', 2023, 'BBC');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'radit12', '$2y$10$ta8/5H'),
(2, 'arbolino12', '$2y$10$1HQjUW'),
(5, 'Fausta12', '$2y$10$OBvYbiNBUAD5MlmmR1Jo.u6.fA7fhOpqYjPOahbtMlAq.f2rOhARS'),
(6, 'bezzz', '$2y$10$jT8jp.Qtbwq0YuRyORneguuA6wr9Rz51eAk3LFjlBo0UtCkTNMHSC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ukk_buku`
--
ALTER TABLE `ukk_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ukk_buku`
--
ALTER TABLE `ukk_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
