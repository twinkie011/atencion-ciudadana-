-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2024 a las 05:28:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gobierno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(4) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `pregunta` varchar(50) DEFAULT NULL,
  `respuesta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `apellido`, `correo`, `contrasena`, `fecha`, `pregunta`, `respuesta`) VALUES
(13, 'Christian', 'Gomez', 'christiangomez@hotmail.com', '$2y$10$bXxAt2pnAzZcHXJSrKtZtus6MI074G/8ioaJCgVn7W7z4E281/6ha', '2024-06-10', NULL, NULL),
(22, 'chris', 'gomez', '1@1', '$2y$10$b2xp6tE84aCKDYjkGXZu.eclsZRXPvaUsXu.FUdWEFGoDIphLng0y', '2024-10-09', 'lugar_nacimiento', '$2y$10$Ts91a2c0aXkTPWDIe8IJGunm3HM6jeOxvmHYTdEUA9.'),
(24, '1', '1', '1@2', '$2y$10$oSxCVto1eI0ggtpCP3QrnOpwHaMf973.9ym.WmBdn/a.jQ2mpSkvC', '2024-10-18', 'escuela_primaria', '$2y$10$M6fCLM9gnxB/Yn59WQm70urPF1snPNHspVqyMGnmrog'),
(25, '1', '2', '2@2', '$2y$10$o2bj2pcx6VBsOLjnpfRsbuQ0G.pOHfPtIx71ZBpTrzrJzvTUrSHgu', '2024-10-22', 'lugar_nacimiento', '$2y$10$yT07emhztZi8JLN8tgvuzOJQbiEI/i4GgcV77mrsVKp'),
(26, 'chris', 'gomez', '3@3', '$2y$10$2KIJeIGaFZXl6wZsF0v1QOoEh0IS.lp9XRFQBYRwduILm4IvkQozi', '2024-10-17', 'nombre_mascota', 'dogo'),
(28, '1', '1', '5@5', '$2y$10$/RrSoiZmJRAPAI6NGH6yJ.ocwDaJAyNxEf/nbcoNlHTXCh2/ax3h2', '2024-10-16', 'lugar_nacimiento', 'cancun'),
(29, 'chris', 'rodriguez', 'chris@gmail.com', '$2y$10$1yKPQ.NwoB.vNDaOTAqHnee6wQnFFy3ze855vp2lT.JO512/92Hwu', '2024-10-02', 'lugar_nacimiento', 'cancun');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_apoyo`
--

CREATE TABLE `solicitudes_apoyo` (
  `id` int(4) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `identificacion` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `ocupacion` varchar(255) DEFAULT NULL,
  `ingresos` decimal(10,2) DEFAULT NULL,
  `dependientes` int(5) DEFAULT NULL,
  `seguro_medico` varchar(3) DEFAULT NULL,
  `nivel_educativo` varchar(255) DEFAULT NULL,
  `tipo_apoyo` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `ruta_curp` text DEFAULT NULL,
  `ruta_ine` varchar(255) DEFAULT NULL,
  `ruta_comprobante` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `solicitudes_apoyo`
--

INSERT INTO `solicitudes_apoyo` (`id`, `nombre`, `identificacion`, `fecha_nacimiento`, `telefono`, `email`, `direccion`, `ocupacion`, `ingresos`, `dependientes`, `seguro_medico`, `nivel_educativo`, `tipo_apoyo`, `descripcion`, `ruta_curp`, `ruta_ine`, `ruta_comprobante`) VALUES
(1, 'christian gomez', '21212121', '2024-10-10', '121212', '12@12', 'sdasdasdasdasd', '121212', 1212.00, 12121, 'si', 'universidad', 'medico', '12121212', 'uploads/2024-10-09-12-56-12_1.1 Infografía tipos de investigación para mi proyecto - Equipo 4.pdf', 'uploads/2024-10-09-12-56-13_20210531222741_IMG_0627.JPG', 'uploads/2024-10-09-12-56-13_20210531222741_IMG_0627.JPG'),
(2, 'christian gomez', '21212121', '2024-10-10', '121212', '12@12', 'sdasdasdasdasd', '121212', 1212.00, 12121, 'si', 'universidad', 'medico', '12121212', 'uploads/2024-10-09-12-56-31_1.1 Infografía tipos de investigación para mi proyecto - Equipo 4.pdf', 'uploads/2024-10-09-12-56-31_20210531222741_IMG_0627.JPG', 'uploads/2024-10-09-12-56-31_20210531222741_IMG_0627.JPG'),
(3, 'christian gomez', '21212121', '2024-10-10', '121212', '12@12', 'sdasdasdasdasd', '121212', 1212.00, 12121, 'si', 'universidad', 'medico', '12121212', 'uploads/2024-10-09-01-00-10_1.1 Infografía tipos de investigación para mi proyecto - Equipo 4.pdf', 'uploads/2024-10-09-01-00-10_20210531222741_IMG_0627.JPG', 'uploads/2024-10-09-01-00-10_20210531222741_IMG_0627.JPG'),
(5, '1', '1', '2024-10-08', '1', '1@1', '1', '1', 1.00, 1, 'si', 'universidad', 'otros', '1', 'uploads/2024-10-09-02-10-33_1.jpg', 'uploads/2024-10-09-02-10-33_2.jpg', 'uploads/2024-10-09-02-10-33_20210531222741_IMG_0627.JPG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes_apoyo`
--
ALTER TABLE `solicitudes_apoyo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `solicitudes_apoyo`
--
ALTER TABLE `solicitudes_apoyo`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
