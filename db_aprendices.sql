-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2024 a las 18:02:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_aprendices`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE DATABASE `aprendices`;

CREATE TABLE `aprendices` (
  `num_Doc_Apr` int(11) NOT NULL,
  `nombre_Apr` varchar(50) NOT NULL,
  `apellido_Apr` varchar(50) NOT NULL,
  `genero_Apr` varchar(45) NOT NULL,
  `fecha_Nacimiento_Apr` date NOT NULL,
  `telefono_Apr` varchar(45) DEFAULT NULL,
  `correo_Apr` varchar(50) NOT NULL,
  `fecha_Creacion_Apr` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices_has_cursos`
--

CREATE TABLE `aprendices_has_cursos` (
  `Aprendices_num_Doc_Apr` int(11) NOT NULL,
  `Cursos_id_Cur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_Cur` int(11) NOT NULL,
  `nombre_Cur` varchar(45) NOT NULL,
  `descripcion_Cur` varchar(45) NOT NULL,
  `fecha_Creacion_Cur` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD PRIMARY KEY (`num_Doc_Apr`);

--
-- Indices de la tabla `aprendices_has_cursos`
--
ALTER TABLE `aprendices_has_cursos`
  ADD PRIMARY KEY (`Aprendices_num_Doc_Apr`,`Cursos_id_Cur`),
  ADD KEY `fk_Aprendices_has_Cursos_Cursos1_idx` (`Cursos_id_Cur`),
  ADD KEY `fk_Aprendices_has_Cursos_Aprendices_idx` (`Aprendices_num_Doc_Apr`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_Cur`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_Cur` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendices_has_cursos`
--
ALTER TABLE `aprendices_has_cursos`
  ADD CONSTRAINT `fk_Aprendices_has_Cursos_Aprendices` FOREIGN KEY (`Aprendices_num_Doc_Apr`) REFERENCES `aprendices` (`num_Doc_Apr`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Aprendices_has_Cursos_Cursos1` FOREIGN KEY (`Cursos_id_Cur`) REFERENCES `cursos` (`id_Cur`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
