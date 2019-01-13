-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 09:49 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(50) NOT NULL,
  `remember_token` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `hak_akses`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'mrafro12@yahoo.com', '$2y$10$hnctsol9F/4CEBm/LxDxWO0J3XiKM8L.NHYOQMI4LYJLiwRJ2rV2m', 'user', 'jp0fkLxJNgQEuiMwt365oDWpeWDJDxnaa7jWNAaBnxp6YOCGtUXVfitHUtRH', '2019-01-05 17:00:49', '2019-01-05 17:00:49'),
(11, 'test@localhost.com', '$2y$10$pe76b1QbpqfjWfd/9Y53tu0ZlwVclcUWissVNiVrgjlT1yCQUKUtC', 'user', 'oV8cqMRuo8MyJsAEdIgLIKQaYsIdM4BhMWX3AqeyuDCgVuN1CZKLehr6NdWT', '2019-01-10 03:45:33', '2019-01-10 03:45:33'),
(13, 'williamalderson@localhost.com', '$2y$10$GMT.xnZtrM1Q980d9h2kSu3wvcJL9chKE7Y8tgzEq7UyeqfPhT8Z.', 'admin', 'chC2bKAu8UDMQYSfcNssiJ0iC7ZC4PzXpo51tpzpHigFi2FJZn1tfpVRF7Ur', '2019-01-11 20:44:24', '2019-01-11 20:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `nim` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `alamat`, `jurusan`, `nim`) VALUES
(1, 'Fariz Muhammad Al-Ghazali', 'Jl. Perumahan bukit permai, Lorong III No.16B', 'Teknik Informatika', '2018302009'),
(3, 'Rizki Munandar', 'mataie', 'Teknik Informatika', '2018302010');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
