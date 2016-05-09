-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-05-2016 a las 18:36:56
-- Versión del servidor: 5.6.20-log
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_deptos`
--

CREATE TABLE IF NOT EXISTS `tb_deptos` (
`id_depto` int(10) NOT NULL,
  `depto` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tb_deptos`
--

INSERT INTO `tb_deptos` (`id_depto`, `depto`) VALUES
(1, 'Contabilidad'),
(2, 'Proveeduria'),
(3, 'Seguridad'),
(4, 'Informatica'),
(5, 'Direccion'),
(6, 'RH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_personal`
--

CREATE TABLE IF NOT EXISTS `tb_personal` (
`id_personal` int(10) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `id_depto` int(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `tb_personal`
--

INSERT INTO `tb_personal` (`id_personal`, `nombre`, `apellido`, `id_depto`, `gender`, `profile`) VALUES
(1, 'Ricky', 'Lucas', 1, 'm', 'profile/rlucas.jpg'),
(7, 'Martha', 'Nelson', 2, 'f', 'profile/mnelson.jpg'),
(10, 'Luis', 'Brown', 3, 'm', 'profile/lbrown.jpg'),
(11, 'Pedro', 'Burke', 3, 'm', 'profile/pburke.jpg'),
(12, 'Kurt', 'Collins', 4, 'm', 'profile/kcollins.jpg'),
(13, 'Owen', 'Medina', 4, 'm', 'profile/omedina.jpg'),
(14, 'Amelia', 'Wallace', 5, 'f', 'profile/awallace.jpg'),
(15, 'Penny', 'Larson', 6, 'f', 'profile/plarson.jpg'),
(16, 'Adrian', 'Neal', 6, 'm', 'profile/aneal.jpg'),
(17, 'Sophia', 'Bates', 2, 'f', 'profile/sbates.jpg'),
(18, 'Bella', 'Ruiz', 5, 'f', 'profile/bruiz.jpg'),
(19, 'Leslie', 'Newman', 6, 'f', 'profile/lnewman.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_deptos`
--
ALTER TABLE `tb_deptos`
 ADD PRIMARY KEY (`id_depto`);

--
-- Indices de la tabla `tb_personal`
--
ALTER TABLE `tb_personal`
 ADD PRIMARY KEY (`id_personal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_deptos`
--
ALTER TABLE `tb_deptos`
MODIFY `id_depto` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tb_personal`
--
ALTER TABLE `tb_personal`
MODIFY `id_personal` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
