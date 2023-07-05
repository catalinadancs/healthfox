-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 12:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `healthfox`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctori`
--

CREATE TABLE `doctori` (
  `id` int(200) NOT NULL,
  `nume` varchar(200) NOT NULL,
  `prenume` varchar(200) NOT NULL,
  `specializare` varchar(200) NOT NULL,
  `clinica` varchar(200) NOT NULL,
  `locatie` varchar(200) NOT NULL,
  `telefon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctori`
--

INSERT INTO `doctori` (`id`, `nume`, `prenume`, `specializare`, `clinica`, `locatie`, `telefon`) VALUES
(3, 'da', 'da', 'da', 'da', 'da', '2121w');

-- --------------------------------------------------------

--
-- Table structure for table `rezultate`
--



--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `parola` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nume`, `prenume`, `username`, `email`, `parola`, `utype`) VALUES
(1, 'Dancs', 'Catalina', 'dnxcatalina', 'catalinadancs@gmail.com', 'brutus', 'admin'),
(3, 'da', 'da', 'da', 'da', 'da', 'admin'),
(8, 'brutus', 'brutus', 'brutus', 'brutus@gmail.com', 'brutus', 'admin'),
(10, 'dada', 'dada', 'dada1', 'dadaff@dd', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctori`
--
ALTER TABLE `doctori`
  ADD PRIMARY KEY (`id`);

--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctori`
--
ALTER TABLE `doctori`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4334;

--
-- AUTO_INCREMENT for table `rezultate`
--


--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
