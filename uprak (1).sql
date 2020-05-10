-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 09:42 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uprak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('razkifadillah', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `kategori`, `keluhan`, `lokasi`, `status`, `tanggal`, `gambar`) VALUES
('25031168', 'keamanan', 'dwadaww', 'dawdada', 'selesai', '2019-11-25 02:54:09', ''),
('25031692', 'keamanan', 'dwadaww', 'dawdada', 'selesai', '2019-11-25 06:22:25', ''),
('25033614', 'keamanan', 'dawdaw', 'dawdaw', 'selesai', '2019-11-25 06:22:34', ''),
('25035727', 'kebersihan', 'dwadaw', 'dwad', 'proses', '2019-11-25 02:19:57', ''),
('25031538', 'keamanan', 'dawda', 'dwadwa', 'proses', '2019-11-25 02:22:15', ''),
('25032614', 'kebersihan', 'ac rusak tolong ancurin', 'smk telkom malang', 'proses', '2019-11-25 02:59:26', ''),
('25044294', 'keamanan', 'dawdawdawdaw', 'dawdada', 'proses', '2019-11-25 03:20:42', ''),
('25041140', 'keamanan', 'dwadaw', 'dwadwadaw', 'selesai', '2019-11-25 03:45:34', ''),
('25051417', 'keamanan', 'dwadwad', 'dwadawdawdaw', 'proses', '2019-11-25 04:12:14', ''),
('25053193', 'keamanan', 'dwadaw', 'dwadawdawdaw', 'proses', '2019-11-25 04:24:31', 'logo 1.png'),
('25072883', 'keamanan', 'dwadaw', 'dawdaw', 'proses', '2019-11-25 06:24:28', 'listrik.jpg'),
('25075060', 'kebersihan', 'dawdwa', 'dwadwa', 'proses', '2019-11-25 06:49:50', 'taman.jpg'),
('25075074', 'kebersihan', 'dawdwa', 'dwaawd', 'proses', '2019-11-25 06:51:50', 'kolam.jpg'),
('25075171', 'keamanan', 'dwadaw', 'dwadawdawdaw', 'proses', '2019-11-25 06:52:51', 'background.png'),
('25074290', 'keamanan', 'dwadwa', 'dwada', 'proses', '2019-11-25 06:53:42', '25074216.'),
('25073650', 'keamanan', 'dwadwa', 'dwada', 'proses', '2019-11-25 06:54:36', '25073653.'),
('25074031', 'keamanan', 'dwadwa', 'dwada', 'selesai', '2019-11-25 07:12:04', '25074064.'),
('25074032', 'keamanan', 'dwa', 'dawdwa', 'proses', '2019-11-25 06:56:40', '25074045.'),
('25075733', 'keamanan', 'd', 'd', 'proses', '2019-11-25 06:58:57', '25075791.'),
('25071082', 'keamanan', 'd', 'd', 'proses', '2019-11-25 06:59:10', '25071016.'),
('25074540', 'kebersihan', 'dd', 'dd', 'proses', '2019-11-25 06:59:45', '25074597.'),
('25080587', 'keamanan', 'dwadaw', 'dwadwadaw', 'proses', '2019-11-25 07:04:05', '25080559.'),
('25082842', 'keamanan', 'DWADAW', 'dwadawdawdaw', 'proses', '2019-11-25 07:05:28', '25082823.'),
('25082073', 'keamanan', 'dwadaw', 'dwadaw', 'proses', '2019-11-25 07:16:20', '25082065.'),
('25080387', 'kebersihan', 'dwadawdaw', 'dawdaw', 'proses', '2019-11-25 07:17:03', '25080393.'),
('25084487', 'keamanan', 'dawdawdaw', 'dwadawdwa', 'proses', '2019-11-25 07:18:44', '25084429.'),
('25085014', 'keamanan', 'dwadwa', 'ddd', 'proses', '2019-11-25 07:22:50', '25085021.'),
('25080296', 'kebersihan', 'SQsq', 'SQsq', 'selesai', '2019-11-25 07:46:47', '25080273.'),
('25092589', 'keamanan', 'kemalingan', 'depok', 'selesai', '2019-11-25 08:03:00', '25092527.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
