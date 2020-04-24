-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 05:42 PM
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
(1, 'SHARP LC-24SA4000i Aquos Televisi LED 24 Inch', 'TV &amp; Aksesoris', '8 Kg', 1390000, '1.jpg'),
(2, 'Receiver Tanaka New Samurai Tanberg Edition', 'TV & Aksesoris', '650 gr', 155000, '2.jpg'),
(3, 'JBL Go 2 - Black', 'Audio', '500 gr', 849000, '3.jpg'),
(4, 'Mic Recorder Condenser Laptop Karaoke Smule BM800 Microphone Condensor', 'Audio', '300 gr', 138000, '4.jpg'),
(5, 'Printer Canon MG 2570s Print Scan Copy', 'Printer', '6 Kg', 605000, '5.jpg'),
(6, 'Epson Printer L3110 Print Scan Copy - Hitam', 'Printer', '8 Kg', 2035000, '6.jpg'),
(7, 'COSMOS Kipas Angin Berdiri 16\" - 16-XDC', 'Pendingin Ruangan', '10 Kg', 202000, '7.png'),
(8, 'Midea MSBC-05CRN1 AC Split 0.5 PK Standard', 'Pendingin Ruangan', '75 Kg', 2374000, '8.jpg'),
(9, 'PHILIPS Lampu LED MyCare 3W Kuning Bohlam LED Bulb My Care 3 Watt WW', 'Lampu', '60 gr', 16800, '9.png'),
(10, 'Senter Chip LED Torch Cree E17 XM-L T6 Taffware Magnet COB Zoom 2019', 'Lampu', '200 gr', 47000, '10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
