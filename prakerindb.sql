-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 05:00 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakerindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kl` varchar(20) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_inst` varchar(50) NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `alamat_inst` varchar(255) NOT NULL,
  `tel_inst` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `jenis_kl`, `kelas`, `jurusan`, `tel`, `alamat`, `nama_inst`, `bidang`, `alamat_inst`, `tel_inst`) VALUES
(10, '12345', 'Naruto', 'Laki-Laki', 'XI-TKJ-1', 'Teknik Komputer Jaringan', '0811', 'Jl. Konohagakure, Kota Bayangan', 'PT. Konoha', 'Pemerintahan', 'Jl. Bambu, Kota Batu', '08000'),
(11, '1234567', 'Uzumaki', 'Laki-Laki', 'XI-TKJ-2', 'Teknik Komputer Jaringan', '081300', 'Jl. Mimpi', 'PT. Bayangan', 'Desain', 'Jl. Bayang, Kota Batu', '08000'),
(12, '123456789', 'Hinata', 'Perempuan', 'XI-TKJ-1', 'Teknik Komputer Jaringan', '089', 'Jl. Desa, Kota Hilang', 'PT. Putih', 'IT', 'Jl. Seram, Kota Bayang', '08000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
