-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2024 at 02:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aprendices`
--

-- --------------------------------------------------------
--Para Crear la base de datos
--CREATE DATABASE `db_aprendices`;
--USE `db_aprendices`;


--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_Adm` int(11) NOT NULL,
  `usuario_Adm` varchar(45) NOT NULL,
  `pass_Adm` varchar(45) NOT NULL,
  `correo_Adm` varchar(45) NOT NULL,
  `nombre_Adm` varchar(45) NOT NULL,
  `apellido_Adm` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aprendices`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aprendices`
--
-- --------------------------------------------------------

--
-- Table structure for table `aprendices_has_cursos`
--

CREATE TABLE `aprendices_has_cursos` (
  `Aprendices_id_aprendiz` int(11) NOT NULL,
  `Cursos_id_Cur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aprendices_has_cursos`
--
-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `id_Cur` int(11) NOT NULL,
  `nombre_Cur` varchar(45) NOT NULL,
  `descripcion_Cur` varchar(255) NOT NULL,
  `fecha_Creacion_Cur` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cursos`
--
--
-- Indexes for dumped tables
--

--
-- Indexes for table `aprendices`
--
ALTER TABLE `aprendices`
  ADD PRIMARY KEY (`id_aprendiz`);

--
-- Indexes for table `aprendices_has_cursos`
--
ALTER TABLE `aprendices_has_cursos`
  ADD PRIMARY KEY (`Aprendices_id_aprendiz`,`Cursos_id_Cur`),
  ADD KEY `fk_Aprendices_has_Cursos_Cursos1_idx` (`Cursos_id_Cur`),
  ADD KEY `fk_Aprendices_has_Cursos_Aprendices_idx` (`Aprendices_id_aprendiz`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_Cur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aprendices`
--
ALTER TABLE `aprendices`
  MODIFY `id_aprendiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_Cur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aprendices_has_cursos`
--
ALTER TABLE `aprendices_has_cursos`
  ADD CONSTRAINT `aprendices_has_cursos_ibfk_1` FOREIGN KEY (`Cursos_id_Cur`) REFERENCES `cursos` (`id_Cur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aprendices_has_cursos_ibfk_2` FOREIGN KEY (`Aprendices_id_aprendiz`) REFERENCES `aprendices` (`id_aprendiz`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
