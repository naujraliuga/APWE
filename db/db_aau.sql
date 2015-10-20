-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2015 a las 00:26:32
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_aau`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(60) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre`, `descripcion`) VALUES
(100, 'Programación 1', 'En este curso el alumno aprendera los conceptos basicos de programacion 1, manejo de condiciones (if-else,switch,etc), ciclos (for,while, do-while), manejo de arreglos y estructuras en lenguaje C.'),
(101, 'Cálculo Diferencial', 'Este curso esta dividido en tres importantes partes que es el temario, la parte teórica y la parte práctica que son la resolución de ejercicios mostrados en un video.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `matricula` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(40) DEFAULT NULL,
  `apellidos` varchar(60) DEFAULT NULL,
  `password` varchar(12) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `correo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`matricula`, `nombre`, `apellidos`, `password`, `tipo`, `correo`) VALUES
(201307186, 'Francisco Javier', 'Ramirez Tovar', '201307186', 1, 'xavi_991@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_cursos`
--

CREATE TABLE IF NOT EXISTS `usuarios_cursos` (
  `matricula` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `usuarios_cursos`
--
ALTER TABLE `usuarios_cursos`
  ADD KEY `matricula` (`matricula`), ADD KEY `id_curso` (`id_curso`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios_cursos`
--
ALTER TABLE `usuarios_cursos`
ADD CONSTRAINT `usuarios_cursos_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `usuarios` (`matricula`),
ADD CONSTRAINT `usuarios_cursos_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
