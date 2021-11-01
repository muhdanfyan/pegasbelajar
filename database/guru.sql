-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 08:10 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegasbelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `email`, `password`, `asal_sekolah`, `no_hp`, `tempat_lahir`, `tgl_lahir`, `nip`, `is_active`, `role_id`, `date_created`) VALUES
(3, 'anu', 'anu@gmail.com', '$2y$10$rJqVy224lmxxqC3z4jjQbuqxnTWEE0WiuAKE3pPGWtKflN/4kvG8K', 'anu', '987', 'anu', '2020-01-01', 'default.jpg', 1, 2, '2020-01-18 05:52:02'),
(4, 'cv', 'ac@gmail.com', '$2y$10$verLJXwVExjy522nE5gIaub1XCLAkw7FEa7m2D17GZmbH506nPhFG', 'Pondok Informatika', '085256999428', 'Makassar', '2020-01-05', 'default.jpg', 1, 2, '2020-01-19 15:18:25'),
(5, 'gru', 'gru@gmail.com', '$2y$10$Y9ESd2wVgv9co67wO8ZIWOs.UARYSg3WcgAL5WJQ2JJSS5Q/w1fPG', 'PI', '085256999428', 'Makassar', '2020-01-05', '123', 1, 2, '2020-01-19 16:27:50'),
(6, 'anto', 'anto@gmail.com', '$2y$10$2bbGtBU4CjJwaMujmJP39OPs.FAbXNMM5OnoLf24fhLjFEVfauT8m', 'PI', '085256999428', 'Makassar', '2011-11-11', '123', 1, 2, '2020-01-19 16:32:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
