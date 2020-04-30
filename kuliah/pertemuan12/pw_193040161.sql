-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 02:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040161`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(2, 'Kevin Fredrian Syach', '193040163', 'kevin@gmail.com', 'Teknik Informatika', 'kevin.jpg'),
(3, 'Muhammad Dio Deovani', '193040164', 'dio123@gmail.com', 'Teknik Informatika', 'dio.jpg'),
(4, 'Nelli Marliana', '193040165', 'nelli092@gmail.com', 'Teknik Informatika', 'nelli.jpg'),
(5, 'Rafi Muhammad Zahid', '193040166', 'rafi56@gmail.com', 'Teknik Informatika', 'rafi.jpg'),
(6, 'R. Yusuf Raihan Setiawan', '193040168', 'yusuf@gmail.com', 'Teknik Informatika', 'yusuf.jpg'),
(7, 'Devis Suparlan', '193040172', 'devis@gmail.com', 'Teknik Informatika', 'devis.jpg'),
(8, 'Jeremy Anadhika', '193040173', 'jeremy@gmail.com', 'Teknik Informatika', 'jeremy.jpg'),
(9, 'Ujang Fatah Abwabal', '193040174', 'ujang@gmail.com', 'Teknik Informatika', 'ujang.jpg'),
(10, 'Freety Indriani Safitri', '193040175', 'freety@gmail.com', 'Teknik Informatika', 'freety.jpg'),
(17, 'Hermawan Arby', '193040161', 'hermawanarby@gmail.com', 'Teknik Informatika', 'hermawan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'pw', '$2y$10$pWYn79ApRQxWoPcLp.q5HuSA2K9Kikf4.KDnmsdZz91odBBRsOA.u'),
(4, 'admin', '$2y$10$QKiudsKIPFCvH3J1wL.EcuPE2hN4hlJcdOBmHoWMEdNyu6mkAUaXy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
