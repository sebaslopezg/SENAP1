-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2024 at 07:26 PM
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

--
-- Table structure for table `aprendices`
--

CREATE Database `aprendices`;
use `aprendices`;

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

INSERT INTO `aprendices_has_cursos` (`Aprendices_id_aprendiz`, `Cursos_id_Cur`) VALUES
(0, 1),
(12354, 1);

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

INSERT INTO `cursos` (`id_Cur`, `nombre_Cur`, `descripcion_Cur`, `fecha_Creacion_Cur`) VALUES
(1, 'hola', 'asdsad', '2024-09-25 20:48:32');

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
  MODIFY `id_aprendiz` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_Cur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aprendices`
--
ALTER TABLE `aprendices`
  ADD CONSTRAINT `aprendices_ibfk_1` FOREIGN KEY (`id_aprendiz`) REFERENCES `aprendices_has_cursos` (`Aprendices_id_aprendiz`);

--
-- Constraints for table `aprendices_has_cursos`
--
ALTER TABLE `aprendices_has_cursos`
  ADD CONSTRAINT `fk_Aprendices_has_Cursos_Cursos1` FOREIGN KEY (`Cursos_id_Cur`) REFERENCES `cursos` (`id_Cur`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
