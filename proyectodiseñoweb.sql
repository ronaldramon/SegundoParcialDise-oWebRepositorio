-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2024 a las 21:39:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectodiseñoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productostabla`
--

CREATE TABLE `productostabla` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productostabla`
--

INSERT INTO `productostabla` (`Id`, `Nombre`, `Imagen`) VALUES
(1, 'Samsung Galaxy A05 128GB Silver', 'https://casacuesta.com/media/catalog/product/cache/fde49a4ea9a339628caa0bc56aea00ff/3/3/3344494-1__1711439134.jpg'),
(2, 'Apple iPhone 15 Pro Max', 'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-15-pro-max-1.jpg'),
(3, 'Realme 12 4G', 'https://fdn2.gsmarena.com/vv/bigpic/realme-12-4g.jpg'),
(5, 'Xiaomi Redmi Note 13', 'https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-13-5g.jpg'),
(7, 'Samsung Galaxy S24+', 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s24-plus-5g-sm-s926.jpg'),
(9, 'Google Pixel 8 Pro', 'https://fdn2.gsmarena.com/vv/bigpic/google-pixel-8-pro.jpg'),
(10, 'OnePlus12', 'https://fdn2.gsmarena.com/vv/bigpic/oneplus-12.jpg'),
(11, 'Alcatel 1SE (2020)', 'https://fdn2.gsmarena.com/vv/bigpic/alcatel-1-se-2020.jpg'),
(12, 'Motorola Razr 50 Ultra', 'https://fdn2.gsmarena.com/vv/bigpic/motorola-razr-50-ultra.jpg'),
(13, 'Samsung Galaxy Tab A9+', 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-tab-a9-plus.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productostabla`
--
ALTER TABLE `productostabla`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productostabla`
--
ALTER TABLE `productostabla`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
