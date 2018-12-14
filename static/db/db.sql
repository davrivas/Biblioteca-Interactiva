-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 05:28 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_biblioteca_interactiva`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estados_libros`
--

CREATE TABLE `tbl_estados_libros` (
  `id` int(11) NOT NULL,
  `estado_libro` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_estados_libros`
--

INSERT INTO `tbl_estados_libros` (`id`, `estado_libro`) VALUES
(1, 'Por revisar'),
(2, 'Aprobado'),
(3, 'Rechazado');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estados_usuarios`
--

CREATE TABLE `tbl_estados_usuarios` (
  `id` int(11) NOT NULL,
  `estado_usuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_estados_usuarios`
--

INSERT INTO `tbl_estados_usuarios` (`id`, `estado_usuario`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_generos`
--

CREATE TABLE `tbl_generos` (
  `id` int(11) NOT NULL,
  `codigo_dewey` varchar(3) NOT NULL,
  `genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_generos`
--

INSERT INTO `tbl_generos` (`id`, `codigo_dewey`, `genero`) VALUES
(1, '0', 'Generalidades'),
(2, '1', 'Filosofía y psicología'),
(3, '2', 'Religión'),
(4, '3', 'Ciencias sociales'),
(5, '4', 'Lenguas'),
(6, '5', 'Ciencias naturales y matemáticas'),
(7, '6', 'Tecnología (ciencias aplicadas)'),
(8, '7', 'Artes'),
(9, '8', 'Literatura y retórica'),
(10, '9', 'Geografía e historia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_libros`
--

CREATE TABLE `tbl_libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `autor` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `anio_publicacion` int(4) NOT NULL,
  `url_archivo` text CHARACTER SET utf8 NOT NULL,
  `url_imagen` text CHARACTER SET utf8 NOT NULL,
  `alt_imagen` text CHARACTER SET utf8 NOT NULL,
  `fecha_subida` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_estado_libro` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(16) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(16) CHARACTER SET utf8 NOT NULL,
  `nombres` varchar(45) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(45) CHARACTER SET utf8 NOT NULL,
  `clave` varchar(16) CHARACTER SET utf8 NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_estado_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_estados_libros`
--
ALTER TABLE `tbl_estados_libros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_estados_usuarios`
--
ALTER TABLE `tbl_estados_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_generos`
--
ALTER TABLE `tbl_generos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_libros`
--
ALTER TABLE `tbl_libros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_libros_tbl_usuarios1_idx` (`id_usuario`),
  ADD KEY `fk_tbl_libros_tbl_estados_libros1_idx` (`id_estado_libro`),
  ADD KEY `fk_tbl_libros_tbl_generos1_idx` (`id_genero`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_usuario_UNIQUE` (`nombre_usuario`),
  ADD KEY `fk_tbl_usuarios_tbl_roles_idx` (`id_rol`),
  ADD KEY `fk_tbl_usuarios_tbl_estados_usuario1_idx` (`id_estado_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_estados_libros`
--
ALTER TABLE `tbl_estados_libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_estados_usuarios`
--
ALTER TABLE `tbl_estados_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_generos`
--
ALTER TABLE `tbl_generos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_libros`
--
ALTER TABLE `tbl_libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_libros`
--
ALTER TABLE `tbl_libros`
  ADD CONSTRAINT `fk_tbl_libros_tbl_estados_libros1` FOREIGN KEY (`id_estado_libro`) REFERENCES `tbl_estados_libros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_libros_tbl_generos1` FOREIGN KEY (`id_genero`) REFERENCES `tbl_generos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_libros_tbl_usuarios1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `fk_tbl_usuarios_tbl_estados_usuario1` FOREIGN KEY (`id_estado_usuario`) REFERENCES `tbl_estados_usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_usuarios_tbl_roles` FOREIGN KEY (`id_rol`) REFERENCES `tbl_roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
