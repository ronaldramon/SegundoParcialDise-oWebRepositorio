-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2024 a las 21:40:25
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
-- Base de datos: `productostabla`
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
(3, 'Realme 12 4G', 'https://www.gsmarena.com/realme_12_4g-13172.php'),
(4, 'Realme 12 4G', 'https://www.gsmarena.com/realme_12_4g-13172.php'),
(5, 'Xiaomi Redmi Note 13', 'https://www.gsmarena.com/xiaomi_redmi_note_13-12776.php'),
(6, 'Xiaomi Redmi Note 13', 'https://www.gsmarena.com/xiaomi_redmi_note_13-12776.php'),
(7, 'Samsung Galaxy S24+', 'https://www.gsmarena.com/samsung_galaxy_s24+-12772.php'),
(8, 'Samsung Galaxy S24+', 'https://www.gsmarena.com/samsung_galaxy_s24+-12772.php'),
(9, 'Google Pixel 8 Pro', 'https://www.gsmarena.com/google_pixel_8_pro-12545.php'),
(10, 'OnePlus12', 'https://www.gsmarena.com/oneplus_12-12725.php'),
(11, 'Alcatel 1SE (2020)', 'https://www.gsmarena.com/alcatel_1se_(2020)-10618.php'),
(12, 'Motorola Razr 50 Ultra', 'https://www.gsmarena.com/motorola_razr_50_ultra-13150.php'),
(13, 'Samsung Galaxy Tab A9+', 'https://www.gsmarena.com/samsung_galaxy_tab_a9+-12617.php');

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
