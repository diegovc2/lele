-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2017 a las 22:40:19
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `subidas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulaciones`
--

CREATE TABLE `postulaciones` (
  `nombre` varchar(50) NOT NULL,
  `rut` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `comuna` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `educacion_basica` varchar(400) NOT NULL,
  `educacion_superior` varchar(400) NOT NULL,
  `titulos` varchar(400) NOT NULL,
  `cursos` varchar(400) NOT NULL,
  `experiencia` varchar(400) NOT NULL,
  `comentarios` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postulaciones`
--

INSERT INTO `postulaciones` (`nombre`, `rut`, `region`, `comuna`, `direccion`, `telefono`, `email`, `educacion_basica`, `educacion_superior`, `titulos`, `cursos`, `experiencia`, `comentarios`) VALUES
('Diego', '18.119.561-4', 'Arica y Parinacota', 'Putre', 'Rio Loa 7721', '+56956445645', 'diegoveloso34@hotmail.com', '1999 Colegio Las Aguilas', '2010 Ingenieria en la Universidad de Chile', 'Ingenieria', '2009 Tromp', '2013 Trabajo en Doggis', 'Se hacer malabares con una sola mano6545645313');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD PRIMARY KEY (`rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
