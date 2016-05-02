-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 02, 2016 at 10:00 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_personal`
--

CREATE TABLE `tb_personal` (
  `id_personal` int(10) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `depto` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_personal`
--

INSERT INTO `tb_personal` (`id_personal`, `nombre`, `apellido`, `depto`) VALUES
(1, 'foo@bar.com', 'foo@bar.com', '123456'),
(2, 'foo@bar.com', 'foo@bar.com', 'foo'),
(3, 'foo@bar.com', 'foo@bar.com', 'foo'),
(4, 'foo@bar.com', 'foo@bar.com', 'foo'),
(5, 'foo@bar.com', 'foo@bar.com', 'foo'),
(6, 'foo@bar.com', 'foo@bar.com', 'foo'),
(7, 'foo@bar.com', 'foo@bar.com', 'foo'),
(8, 'foo@bar.com', 'foo@bar.com', 'foo'),
(9, 'foo@bar.com', 'foo@bar.com', 'foo'),
(10, 'qwerty', 'qwerty', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_personal`
--
ALTER TABLE `tb_personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_personal`
--
ALTER TABLE `tb_personal`
  MODIFY `id_personal` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;