-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2022 a las 10:03:23
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `admin_password` varchar(500) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `item_price` double NOT NULL,
  `item_image` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `item_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `item_image`, `item_date`) VALUES
(5, 'Item2 ', 100, '147124.jpg', '2016-11-10'),
(6, 'Item3', 50, '181757.jpg', '2016-11-10'),
(7, 'Item4', 60, '783298.jpg', '2016-11-10'),
(8, 'Item5', 55, '14231.jpg', '2016-11-10'),
(9, 'Item6', 90, '289865.jpg', '2016-11-10'),
(11, 'Item1', 40, '722934.jpg', '2016-11-10'),
(12, 'Item101', 1000, '838084.jpg', '2016-11-14'),
(13, 'Item102', 500, '320199.jpg', '2016-11-14'),
(14, 'Item103', 300, '361204.jpg', '2016-11-14'),
(15, 'Item105', 500, '444526.jpg', '2016-11-14'),
(16, 'Item106', 600, '956983.jpg', '2016-11-14'),
(17, 'Item107', 300, '855187.jpg', '2016-11-14'),
(18, 'Item108', 400, '45968.jpg', '2016-11-14'),
(19, 'item909', 50.5, '158191.jpg', '2016-11-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_name` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `order_price` double NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_total` double NOT NULL,
  `order_status` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `user_id`, `order_name`, `order_price`, `order_quantity`, `order_total`, `order_status`, `order_date`) VALUES
(20, 1, 'Item2 ', 100, 2, 200, 'Ordered_Finished', '2016-11-14'),
(23, 1, 'Item2 ', 100, 3, 300, 'Ordered_Finished', '2016-11-14'),
(30, 1, 'Item2 ', 100, 1, 100, 'Ordered', '2016-11-15'),
(31, 1, 'Item2 ', 100, 1, 100, 'Pending', '2022-11-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `user_password` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `user_firstname` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `user_lastname` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `user_address` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_firstname`, `user_lastname`, `user_address`) VALUES
(1, 'ale.140290.aa@gmail.com', '1234', 'ale', 'astu', 'manta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indices de la tabla `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_orderdetails_user_idx` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `fk_orderdetails_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
