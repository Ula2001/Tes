-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mar 2018 pada 11.11
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motoredno`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
--

CREATE TABLE `motor` (
  `id` int(15) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tahunterbit` date NOT NULL,
  `harga` int(15) NOT NULL,
  `stok` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `motor`
--

INSERT INTO `motor` (`id`, `merk`, `gambar`, `tahunterbit`, `harga`, `stok`) VALUES
(1, 'Yamaha r25 blue', 'wpid-harga-motor-yamaha-r25-sport.png', '2018-03-07', 1000, 2),
(2, 'Yamaha Byson Black a', 'byson-black.png', '2001-03-19', 10000, 1),
(3, 'Bajai Future ', 'lit-motors-c1.png', '0000-00-00', 20000, 2),
(4, 'Motor Bike', '23379-6-motorbike-file.png', '2001-03-19', 999999, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
