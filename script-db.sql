-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 03, 2016 at 12:31 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_deptos`
--

CREATE TABLE `tb_deptos` (
  `id_depto` int(10) NOT NULL,
  `depto` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_deptos`
--

INSERT INTO `tb_deptos` (`id_depto`, `depto`) VALUES
(1, 'Contabilidad'),
(2, 'Proveeduria'),
(3, 'Seguridad'),
(4, 'Informatica'),
(5, 'Direccion'),
(6, 'RH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_deptos`
--
ALTER TABLE `tb_deptos`
  ADD PRIMARY KEY (`id_depto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_deptos`
--
ALTER TABLE `tb_deptos`
  MODIFY `id_depto` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;