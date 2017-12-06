-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 12:27 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_fw`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `brand`) VALUES
(15, 'Etude Eyebrown', 'Etude House'),
(16, 'Bedak Infinitte', 'Infinitte'),
(17, 'Tony Moly Tint', 'Etude House'),
(18, 'Bluch Pink Baby', 'Emina '),
(19, 'Long Lasting Matte Lip Cream 02 retro Red', 'LT Pro'),
(20, 'Baby Skin Pore Smoother Foundation', 'Maybelline'),
(21, 'NYX Shine Killer', 'NYX Cosmetic');

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(50) NOT NULL,
  `id_barang` int(50) NOT NULL,
  `id_customer` varchar(50) NOT NULL,
  `id_karyawan` varchar(50) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `tanggal_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`id_beli`, `id_barang`, `id_customer`, `id_karyawan`, `jumlah_barang`, `tanggal_beli`) VALUES
(15, 17, '01', '21', 4, '2017-10-28'),
(16, 19, '36', '84', 3, '2017-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(50) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `alamat_customer` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat_customer`) VALUES
('01', 'Dea Pricillia', 'Jl. Harapan Raya'),
('02', 'Nisaul Rahmi', 'Jl. Berdikari'),
('36', 'Ivonny Agahta', 'Jl. Rowosari'),
('57', 'Nurhediyati', 'Jl. Alamayang'),
('64', 'Rahma Ardelia', 'Jl. Umban Sari Atas'),
('89', 'Westy Hartati', 'Jl. Handayani');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(50) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_toko` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `password`, `id_toko`) VALUES
('10', 'Alif Satria', '1234', 17),
('21', 'Dhiemas Aditya', '9876', 19),
('29', 'Ghifary Utama', '3866', 17),
('59', 'Osby Suganda', '5643', 20),
('84', 'Vicky Ena', '4964', 22);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id_owner` int(50) NOT NULL,
  `nama_owner` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id_owner`, `nama_owner`, `password`) VALUES
(2, 'westy', 'westy'),
(3, 'owner', 'owner'),
(4, 'ghif', 'ghif'),
(5, 'dimas', 'dimas');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(50) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `alamat_toko` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat_toko`) VALUES
(16, 'Matahari Ciputra', 'Jl. Riau'),
(17, 'Matahari SKA', 'Jl. Soekarno Hatta'),
(18, 'Toko Wardah-1', 'Jl. Arifin Ahmad'),
(19, 'Toko NYX-1', 'Jl. Paus'),
(20, 'Toko LT Pro', 'Jl. Ahmad Yani'),
(21, 'Toko Etude House', 'Jl. Sudirman'),
(22, 'Toko Maybelline', 'Jl. Rajawali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_toko` (`id_toko`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id_owner`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id_owner` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `beli`
--
ALTER TABLE `beli`
  ADD CONSTRAINT `beli_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `beli_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `beli_ibfk_3` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id_toko`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
