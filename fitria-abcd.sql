-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 03:02 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitria-abcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `Kode_Jurusan` varchar(50) NOT NULL,
  `Nama_Jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`Kode_Jurusan`, `Nama_Jurusan`) VALUES
('IPS', 'IPS'),
('IPA', 'IPA'),
('BAHASA', 'BAHASA');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `Kode_Kelas` varchar(50) NOT NULL,
  `Nama_Kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`Kode_Kelas`, `Nama_Kelas`) VALUES
('IX1_18', 'IX1_18'),
('IX2_18', 'IX2_18'),
('IX3_18', 'IX3_18'),
('IX4_18', 'IX4_18'),
('X1_17', 'X1_17'),
('X2_17', 'X2_17');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nama_Mahasiswa` varchar(50) NOT NULL,
  `NIM` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `No_Telp` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Kode_Jurusan_Mhs` varchar(50) NOT NULL,
  `No_Registrasi` varchar(10) NOT NULL,
  `Kode_Kelas_Mhs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nama_Mahasiswa`, `NIM`, `uid`, `Tanggal_Lahir`, `JK`, `No_Telp`, `Alamat`, `Kode_Jurusan_Mhs`, `No_Registrasi`, `Kode_Kelas_Mhs`) VALUES
('SUHARTONIi', '20a', ' 42C1A4AF06481', '2020-07-29', 'L', '09588783795', 'igieojgeJHH', '', '5345345', 'IX1_18'),
('UUS344444', '32', '1122', '0000-11-22', 'L', '09588783795', 'kp.galuga rt001/0023', '', '34324543', 'X2_17'),
('suhartonowe', '123456789876', '2008576055', '2020-07-14', 'L', '33432532242332', 'kp.galuga rt001/002', 'BAHASA', '123', 'IX1_18'),
('tono', '123456789876', '2222222', '2020-07-07', 'L', '5353gg', 'kp.galuga rt001/001', 'IPA', '0012', 'IX1_18'),
('yyyyy', '123456789876', '24455677', '2020-07-22', 'L', '08953333320660', 'kp.galuga rt001/002', 'IPA', '0012', 'X1_17'),
('suhartonodddd', '123', '42C1A4AF06481', '0000-00-00', '', '', '', '', '', 'IX1_18'),
('jonoss', '123222', '77b86d63', '2020-07-13', 'L', '33432532242332', 'kp.galuga rt001/002', 'BAHASA', '001', 'IX3_18'),
('suhartono', '454765', 'b7c2463', '2020-07-15', 'L', '08953333320660', 'kp.galuga rt001/001', 'IPS', '5465', 'IX1_18');

-- --------------------------------------------------------

--
-- Table structure for table `tblkehadiran`
--

CREATE TABLE `tblkehadiran` (
  `id` int(20) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `jamdatang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jampulang` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL,
  `Kode_Nama_Mhs` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkehadiran`
--

INSERT INTO `tblkehadiran` (`id`, `uid`, `jamdatang`, `jampulang`, `status`, `Kode_Nama_Mhs`, `date`) VALUES
(248, ' 42C1A4AF06481', '2020-10-16 09:42:06', '2020-10-16 09:46:11', 'P', '', '2020-10-16'),
(249, '42C1A4AF06481', '2020-10-16 09:53:52', '2020-10-16 09:55:30', 'P', '', '2020-10-16'),
(250, '42C1A4AF06481', '2020-10-16 10:10:12', '2020-10-16 10:10:26', 'P', '', '2020-10-16'),
(251, '42C1A4AF06481', '2020-10-16 11:02:15', '2020-10-16 11:02:27', 'P', '', '2020-10-16'),
(252, '2222222', '2020-11-29 11:35:50', '2020-11-29 11:36:14', 'P', '', '2020-11-29'),
(253, '2222222', '2020-11-29 11:39:43', '2020-11-29 11:39:50', 'P', '', '2020-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `user`) VALUES
(1, 'ttt', 'ttt', '9990775155c3518a0d7917f7780b24aa', '0'),
(2, 'Suhartono', 'tono', '14d2d4119982cd6c68a566e523cb16ae', '0'),
(0, 'aa', 'aa', '4124bc0a9335c27f086f24ba207a4912', 'aa'),
(0, 'zz', 'zz', '25ed1bcb423b0b7200f485fc5ff71c8e', '1'),
(0, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2'),
(0, 'tono', '123456789876', '14d2d4119982cd6c68a566e523cb16ae', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Kode_Kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tblkehadiran`
--
ALTER TABLE `tblkehadiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tblkehadiran_ibfk_1` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblkehadiran`
--
ALTER TABLE `tblkehadiran`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblkehadiran`
--
ALTER TABLE `tblkehadiran`
  ADD CONSTRAINT `tblkehadiran_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `mahasiswa` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
