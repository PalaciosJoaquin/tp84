-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2022 a las 13:30:51
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `viviendas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `tipo` enum('Piso','Adosado','Chalet','Casa') DEFAULT NULL,
  `zona` enum('Centro','Nervión','Triana','Aljarafe','Macarena') DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `dormitorios` enum('1','2','3','4','5') DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `tamano` decimal(10,0) DEFAULT NULL,
  `extras` set('Piscina','Jardín','Garage') DEFAULT NULL,
  `foto` varchar(70) DEFAULT NULL,
  `observaciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`tipo`, `zona`, `direccion`, `dormitorios`, `precio`, `tamano`, `extras`, `foto`, `observaciones`) VALUES
('Piso', 'Centro', NULL, '3', '0', '0', '', 'fotopibes.jpg', NULL),
('Piso', 'Centro', NULL, '3', '0', '0', '', 'fotorancia2.jpg', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
