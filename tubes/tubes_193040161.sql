-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 07:09 PM
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
-- Database: `tubes_193040161`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `berat` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `nama_produk`, `kategori`, `berat`, `harga`, `gambar`) VALUES
(1, 'TOSHIBA 43 Inch Pro Theatre Series Smart TV UHD 43U6750', 'TV &amp; Aksesoris', '8 Kg', 6975000, '1.jpg'),
(2, 'MXQ Pro 4K Kodi Android Smart OTT Internet TV Box Media Player S905X', 'TV & Aksesoris', '650 gr', 750000, '2.jpg'),
(3, 'GMC Speaker Multimedia 886J Black Light Blue', 'Audio', '900 gr', 1083000, '3.jpg'),
(4, 'POLYTRON Speaker Aktif PAS 27', 'Audio', '3 Kg', 138000, '4.jpg'),
(5, 'HP Smart Tank 515 All-in-One Printer', 'Printer', '6 Kg', 2699000, '5.jpg'),
(6, 'CANON PIXMA E410 - Black', 'Printer', '8 Kg', 944000, '6.jpg'),
(7, 'SANKEN Kipas Angin FS-735TWH', 'Pendingin Ruangan', '10 Kg', 355000, '7.jpg'),
(8, 'SAMSUNG AC Split AR07JRSDUWKNSE', 'Pendingin Ruangan', '75 Kg', 5434000, '8.jpg'),
(9, 'Q2 Lampu Meja 8901 Red', 'Lampu', '500 gr', 75000, '9.jpg'),
(10, 'ANKER Flashlight Super Bright Senter 900 Lumens LC90 [T1420H11] (M)', 'Lampu', '200 gr', 799000, '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(11, 'admin', '$2y$10$WUnAdlS.Gsu3yaYDk6K1F.v17pi2Fm8FV0BiVVwM5XQok/TCK6wRe'),
(12, 'hermawan', '$2y$10$MIL.KDIiabkW6J7.UALcMOPhiqWJ50Uv2MbqfCCKFFSS4Eefl2uDO'),
(15, 'arby', '$2y$10$AtK5wUM2PuXheMuHGIunKO/fFtTwywS/4zG05xxmVlrOKsfahGEC2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
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
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
