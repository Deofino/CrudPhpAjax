-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 10:14 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulariopw`
--
CREATE DATABASE IF NOT EXISTS `formulariopw` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `formulariopw`;

-- --------------------------------------------------------

--
-- Table structure for table `tbmensagem`
--

CREATE TABLE `tbmensagem` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbmensagem`
--

INSERT INTO `tbmensagem` (`id`, `nome`, `sobrenome`, `email`, `assunto`, `mensagem`) VALUES
(39, 'Guilherme Delfino', 'dsds', 'guilhermedelfino25@gmail.com', 'dsdsdd', 'dsdsdsd'),
(40, 'Guilherme Delfino', 'dsds', 'guilhermedelfino25@gmail.com', 'dsasd', 'asdasdsad'),
(41, 'Guilherme Delfino', 'dsds', 'guilhermedelfino25@gmail.com', 'dsasd', 'asdasdsad'),
(42, 'Guilherme Delfino', 'dsds', 'guilhermedelfino25@gmail.com', 'dsasd', 'asdasdsad'),
(43, 'Guilherme Delfino', 'dsds', 'guilhermedelfino25@gmail.com', 'dsasd', 'asdasdsad'),
(44, 'Guilherme Delfino', 'dsds', 'guilhermedelfino25@gmail.com', 'dsasd', 'asdasdsad'),
(45, 'Guilherme Delfino', 'dsds', 'guilhermedelfino25@gmail.com', 'dsasd', 'asdasdsad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbmensagem`
--
ALTER TABLE `tbmensagem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbmensagem`
--
ALTER TABLE `tbmensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
