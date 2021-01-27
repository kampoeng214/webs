-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 07:10 AM
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
-- Database: `ids_akademik`
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
('suhartonowe', '123456789876', '2008576055', '2020-07-14', 'L', '33432532242332', 'kp.galuga rt001/002', 'BAHASA', '123', 'IX1_18'),
('tono', '123456789876', '2222222', '2020-07-07', 'L', '5353gg', 'kp.galuga rt001/001', 'IPA', '0012', 'IX1_18'),
('yyyyy', '123456789876', '24455677', '2020-07-22', 'L', '08953333320660', 'kp.galuga rt001/002', 'IPA', '0012', 'X1_17'),
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
(195, '2222222', '2020-07-01 23:14:47', '2020-07-01 23:14:59', 'P', '', '2020-07-02'),
(196, '2222222', '2020-07-01 23:41:53', '2020-07-01 23:41:58', 'P', '', '2020-07-02'),
(197, '2222222', '2020-07-02 00:15:48', '2020-07-02 00:15:51', 'P', '', '2020-07-02'),
(198, '2222222', '2020-07-03 15:27:11', '2020-07-03 15:27:22', 'P', '', '2020-07-03'),
(199, '2222222', '2020-07-03 15:31:05', '2020-07-03 15:31:12', 'P', '', '2020-07-03'),
(200, '2222222', '2020-07-03 15:32:53', '2020-07-03 15:32:57', 'P', '', '2020-07-03'),
(201, 'b7c2463', '2020-07-03 15:52:11', '2020-07-03 15:52:22', 'P', '', '2020-07-03'),
(202, 'b7c2463', '2020-07-06 04:19:36', '2020-07-06 04:19:54', 'P', '', '2020-07-06'),
(203, '2222222', '2020-07-06 06:37:15', '2020-07-06 06:37:22', 'P', '', '2020-07-06'),
(204, '2222222', '2020-07-06 18:15:51', '2020-07-06 18:17:02', 'P', '', '2020-07-07'),
(205, '2008576055', '2020-07-09 08:31:46', '2020-07-09 08:32:04', 'P', '', '2020-07-09'),
(206, '2222222', '2020-07-09 10:55:31', '2020-07-09 10:55:31', 'M', '', '2020-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Id_Usergroup_User` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Foto` varchar(150) NOT NULL DEFAULT 'ids.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Id_Usergroup_User`, `Username`, `Password`, `Foto`) VALUES
(1, 1, 'admin', '$2y$10$V7zDd2Fz3QBmWFz3UnZBM.vjDK.AOTTjIdssUY8rhcBjEEJrxY7ma', 'ids.jpg'),
(18, 2, '098980', '$2y$10$25GSpBPnHynFHGafwjdyUeuwy6kF/6/pKLBSVdxk61suyPf5Tsugu', 'ids.jpg'),
(19, 3, 'D980098', '$2y$10$EEvgrytjn7UkxTXtefDx0ux60r.6jGwmo3pYS.2VybRApkvm97rGi', 'ids.jpg'),
(20, 2, '14121', '$2y$10$Nm.uoKVnYZyNuMtAOs4oje0PmYdV0Y4EkispxeYXaTa21tRopL3xi', 'ids.jpg'),
(21, 3, '19121', '$2y$10$ne1MZZY8zesAxMEN4ooO6.3J8IchXgeCbZggBTRzmXmp91YE17RDi', 'ids.jpg'),
(22, 2, '141211', '$2y$10$0CMBsJs2b8Ap6Fpm.DdH2.nKk.Ww8nPlApocD68/vYda4GTYlKDqa', 'ids.jpg'),
(23, 3, '19122', '$2y$10$z8QxBHmiyZ2HhMcf7/Y.De.aD8cMfLckeIewrTb4fxYHNwE2BcE2q', 'ids.jpg'),
(1233, 0, 'adminm', '12345678', 'ids.jpg'),
(6777, 1, 'admins', '12245678', 'ids.jpg'),
(1233, 1, 'skripsi', '$2y$10$V7zDd2Fz3QBmWFz3UnZBM.vjDK.AOTTjIdssUY8rhcB...', '');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

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
