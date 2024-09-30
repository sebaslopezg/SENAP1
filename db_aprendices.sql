-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2024 a las 14:02:06
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
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_Adm` int(11) NOT NULL,
  `usuario_Adm` varchar(45) NOT NULL,
  `pass_Adm` varchar(45) NOT NULL,
  `correo_Adm` varchar(45) NOT NULL,
  `nombre_Adm` varchar(45) NOT NULL,
  `apellido_Adm` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE `aprendices` (
  `id_aprendiz` int(11) NOT NULL,
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
  `Aprendices_id_aprendiz` int(11) NOT NULL,
  `Cursos_id_Cur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_Cur` int(11) NOT NULL,
  `nombre_Cur` varchar(45) NOT NULL,
  `descripcion_Cur` varchar(255) NOT NULL,
  `fecha_Creacion_Cur` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_Adm`),
  ADD UNIQUE KEY `usuario_Adm` (`usuario_Adm`),
  ADD UNIQUE KEY `correo_Adm` (`correo_Adm`);

--
-- Indices de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD PRIMARY KEY (`id_aprendiz`);

--
-- Indices de la tabla `aprendices_has_cursos`
--
ALTER TABLE `aprendices_has_cursos`
  ADD PRIMARY KEY (`Aprendices_id_aprendiz`,`Cursos_id_Cur`),
  ADD KEY `fk_Aprendices_has_Cursos_Cursos1_idx` (`Cursos_id_Cur`),
  ADD KEY `fk_Aprendices_has_Cursos_Aprendices_idx` (`Aprendices_id_aprendiz`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_Cur`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_Adm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  MODIFY `id_aprendiz` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_Cur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD CONSTRAINT `aprendices_ibfk_1` FOREIGN KEY (`id_aprendiz`) REFERENCES `aprendices_has_cursos` (`Aprendices_id_aprendiz`);

--
-- Filtros para la tabla `aprendices_has_cursos`
--
ALTER TABLE `aprendices_has_cursos`
  ADD CONSTRAINT `fk_Aprendices_has_Cursos_Cursos1` FOREIGN KEY (`Cursos_id_Cur`) REFERENCES `cursos` (`id_Cur`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
