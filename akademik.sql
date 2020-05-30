-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2019 at 12:39 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `angkatan` int(50) NOT NULL,
  `kalkulus` int(10) NOT NULL,
  `alpro` int(10) NOT NULL,
  `pti` int(10) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `angkatan`, `kalkulus`, `alpro`, `pti`, `nilai`) VALUES
('080155201008', 'Angga', 2008, 80, 50, 88, 72.6667),
('090155201009', 'Jarvis', 2009, 95, 90, 95, 93.3333),
('100155201019', 'Tony', 2010, 93, 95, 95, 94.3333),
('100155201070', 'Imron', 2010, 75, 85, 30, 63.3333),
('110155201011', 'hulk', 2011, 80, 70, 30, 60),
('120155201013', 'Natasha', 2012, 75, 85, 30, 63.3333),
('130155201013', 'clint', 2013, 90, 95, 90, 91.6667),
('130155201035', 'Carl', 2013, 80, 85, 55, 73.3333),
('140155201074', 'Andang', 2014, 75, 70, 30, 58.3333),
('150155201087', 'Phai', 2015, 80, 90, 90, 86.6667),
('170155201005', 'Dimas Nugroho Putro', 2017, 75, 85, 90, 83.3333);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
