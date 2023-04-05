-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 10:36 PM
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
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pmb`
--

CREATE TABLE `pmb` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` int(16) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` char(3) NOT NULL,
  `warganegara` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `email` char(50) NOT NULL,
  `no_telp` int(14) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `nilai_raport` char(3) NOT NULL,
  `prodi1` varchar(50) NOT NULL,
  `prodi2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pmb`
--

INSERT INTO `pmb` (`id`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `gender`, `warganegara`, `agama`, `nama_ibu`, `email`, `no_telp`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `pendidikan`, `sekolah`, `nilai_raport`, `prodi1`, `prodi2`) VALUES
(49, 'M Fikri Masyhari', 2147483647, 'Jambi', '2003-11-10', '1', 'WNI', 'Islam', 'Siti Zairoh', 'fikrimasyhari03@gmail.com', 2147483647, 'mendalo', 'Jambi', 'Muaro Jambi', 'mendalo hill', 'SMA', 'El-Hafidziyah', '8,7', 'S1- Informatika', 'S1- Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pmb`
--
ALTER TABLE `pmb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pmb`
--
ALTER TABLE `pmb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
