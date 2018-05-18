-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mai 2018 la 09:28
-- Versiune server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(4) NOT NULL,
  `nume` varchar(10) NOT NULL,
  `parola` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nume`, `parola`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `apa`
--

CREATE TABLE `apa` (
  `id_citire` int(5) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `scara` varchar(1) NOT NULL,
  `apartament` varchar(5) NOT NULL,
  `baie` int(10) NOT NULL,
  `bucatarie` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `apa`
--

INSERT INTO `apa` (`id_citire`, `nume`, `scara`, `apartament`, `baie`, `bucatarie`) VALUES
(1, 'nume', 'A', '10', 100, 20),
(2, 'nume', 'A', '10', 100, 20),
(3, 'pop ioan', 'D', '71', 9, 12);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `mesaje`
--

CREATE TABLE `mesaje` (
  `id_mesaj` int(10) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subiect` varchar(64) NOT NULL,
  `mesaj` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `mesaje`
--

INSERT INTO `mesaje` (`id_mesaj`, `nume`, `email`, `subiect`, `mesaj`) VALUES
(1, 'nume', 'rafael@rafael.ro', 'test', 'sunt interesat de ceea ce sunt interesat ?i mai sunt interesat dac? v? intereseaz? ?i pe voi'),
(2, 'pop ioan', 'ion@mere.ro', 'nu are', 'mere');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `apa`
--
ALTER TABLE `apa`
  ADD PRIMARY KEY (`id_citire`);

--
-- Indexes for table `mesaje`
--
ALTER TABLE `mesaje`
  ADD PRIMARY KEY (`id_mesaj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `apa`
--
ALTER TABLE `apa`
  MODIFY `id_citire` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mesaje`
--
ALTER TABLE `mesaje`
  MODIFY `id_mesaj` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
