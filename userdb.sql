-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2018 at 11:20 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11
CREATE DATABASE IF NOT EXISTS `userdb`
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kratiseis`
--

CREATE TABLE `kratiseis` (
  `ekdromi` varchar(50) NOT NULL,
  `anaxorisi` varchar(50) NOT NULL,
  `afiksi` varchar(50) NOT NULL,
  `tickets` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `username`, `password`, `firstname`, `surname`) VALUES
('natasof@gmail.com', 'natasof', '$2y$10$KeuCE4vr94JkFO8lzPaGpOXjv30JEI.xJm4jy3E3ab1XAHW452xlS', 'natali', 'sofra'),
('kostas@gmail.com', 'kostasof', '$2y$10$9SCtiPFHxZ7gNZWS/bkZQeQN0NJBIhTAFpsdiIQ7vyCKCVitpbxaq', 'kostas', 'sofras'),
('antreas@gmail.com', 'antremap', '$2y$10$dhWyWoDdqGmevMSl/mrDg.P1wA.SyDbXisX7i3Z88Hqiczkfwu4bW', 'antreas', 'mparkoulis'),
('asd@dfad', 'lolaer_---$$$', '$2y$10$ZCUHssSCfVC7sjwrZeFPQeuI4yVO4Rn.xQ0NGdzrY3BD.FDOy0fPi', 'kakadodo', 'kakado sdas'),
('giannissar@gmail.com', 'giannisar', '$2y$10$fbfA7rOuejSBDehHjW9KgeSOjF1oRjpH3bWHuhOzYLq1a4YfoxS12', 'giannis', 'saragas'),
('antolol@poutso.com', 'antolol23', '$2y$10$PKHiETHRf307vkPqmOhEBORVPPqwt5QgDa7VZ5zCKgP6bbRjnQHdO', 'antonakis', 'lolakis'),
('dimbal@gmail.com', 'dimbal', '$2y$10$ZcFF8HlCd4Pc1bp1gj/xiuLFyrMs0E0DFk165vDHlj6Rc0c8r6eKC', 'dimitris', 'mpalastouras'),
('akako@gmail.com', 'akakos', '$2y$10$0jkx/PV1z0.002d0c2mNq.4RduWXjWcdS0bZRrrbO35N5u9roNV3e', 'akaks', 'akakoks'),
('kakas@gmail.com', 'abcd', '$2y$10$izKww5NVh/y8XVC2ZYxwY.CFWj.qUmwFC9CRbVQ/QP8/WBzbTzsH.', 'antar', 'kakas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
