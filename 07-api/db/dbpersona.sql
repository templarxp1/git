-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 06:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpersona`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `ClienteID` int(11) NOT NULL,
  `PersonaId` int(11) DEFAULT NULL,
  `Ci` int(11) DEFAULT NULL,
  `RazonSocial` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`ClienteID`, `PersonaId`, `Ci`, `RazonSocial`) VALUES
(6, 1, 1234567, 'Juan Perez & Co.'),
(7, 2, 7654321, 'Maria Lopez Emporium'),
(8, 3, 9876543, 'Carlos Garcia Fashion'),
(9, 4, 3456789, 'Ana Martinez Moda'),
(10, 5, 9876544, 'Pedro Sanchez Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `PedidoID` int(11) NOT NULL,
  `ClienteID` int(11) DEFAULT NULL,
  `ProductoID` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`PedidoID`, `ClienteID`, `ProductoID`, `Cantidad`, `fecha`, `Descripcion`) VALUES
(4, 6, 1, 5, '2024-04-15 10:00:00', 'Pedido de camisetas para Juan Perez & Co.'),
(5, 7, 2, 3, '2024-04-15 11:00:00', 'Pedido de pantalones para Maria Lopez Emporium'),
(6, 6, 3, 2, '2024-04-15 12:00:00', 'Pedido de zapatos para Juan Perez & Co.');

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`id`, `Nombre`, `telefono`, `direccion`) VALUES
(1, 'Juan Perez', 123456789, 1),
(2, 'Maria Lopez', 987654321, 2),
(3, 'Carlos Garcia', 555555555, 3),
(4, 'Ana Martinez', 111111111, 4),
(5, 'Pedro Sanchez', 222222222, 5),
(6, 'Laura Fernandez', 333333333, 6),
(7, 'Diego Rodriguez', 444444444, 7),
(8, 'Elena Gomez', 555555555, 8),
(9, 'Sara Ramirez', 666666666, 9),
(10, 'Pablo Diaz', 777777777, 10),
(11, 'Lucia Munoz', 888888888, 11),
(12, 'Daniel Torres', 999999999, 12),
(13, 'Carmen Ruiz', 1010101010, 13),
(14, 'Manuel Vazquez', 1111111111, 14),
(15, 'Rosa Serrano', 1212121212, 15),
(16, 'Javier Martin', 1313131313, 16),
(17, 'Isabel Jimenez', 1414141414, 17),
(18, 'Antonio Perez', 1515151515, 18),
(19, 'Luisa Moreno', 1616161616, 19),
(20, 'Mario Gomez', 1717171717, 20),
(21, 'Nuria Delgado', 1818181818, 21),
(22, 'Ruben Ortiz', 1919191919, 22),
(23, 'Sonia Castro', 2020202020, 23),
(24, 'Marta Guerrero', 2121212121, 24),
(25, 'Victor Ramos', 2147483647, 25),
(26, 'Eva Bravo', 2147483647, 26),
(27, 'Alberto Navarro', 2147483647, 27),
(28, 'Celia Medina', 2147483647, 28),
(29, 'Raul Marquez', 2147483647, 29),
(30, 'Beatriz Jimenez', 2147483647, 30),
(31, 'Adrian Soto', 2147483647, 31),
(32, 'Alicia Blanco', 2147483647, 32),
(33, 'Hector Rosado', 2147483647, 33),
(34, 'Elena Herrera', 2147483647, 34),
(35, 'Julio Delgado', 2147483647, 35),
(36, 'Ines Gallego', 2147483647, 36),
(37, 'Oscar Aguilar', 2147483647, 37),
(38, 'Natalia Ortega', 2147483647, 38),
(39, 'Pablo Moya', 2147483647, 39),
(40, 'Lucia Morales', 2147483647, 40),
(41, 'Gonzalo Suarez', 2147483647, 41),
(42, 'Laura Castro', 2147483647, 42),
(43, 'Andres Vidal', 2147483647, 43),
(44, 'Teresa Santos', 2147483647, 44),
(45, 'Irene Roman', 2147483647, 45),
(46, 'Felipe Lozano', 2147483647, 46),
(47, 'Olga Marin', 2147483647, 47),
(48, 'Ramon Cuesta', 2147483647, 48),
(49, 'Esther Pascual', 2147483647, 49),
(50, 'Samuel Guerrero', 2147483647, 50);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `ProductoID` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `PrecioUnitario` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`ProductoID`, `Nombre`, `PrecioUnitario`, `stock`, `Descripcion`) VALUES
(1, 'Camiseta', 20, 100, 'Camiseta de algodón'),
(2, 'Pantalón', 30, 80, 'Pantalón vaquero'),
(3, 'Zapatos', 50, 50, 'Zapatos de cuero'),
(4, 'Bufanda', 15, 60, 'Bufanda de lana'),
(5, 'Sombrero', 25, 40, 'Sombrero de fieltro'),
(6, 'Gorra', 10, 90, 'Gorra de béisbol'),
(7, 'Botas', 60, 30, 'Botas de montaña'),
(8, 'Gafas de sol', 35, 70, 'Gafas de sol polarizadas'),
(9, 'Chaqueta', 70, 20, 'Chaqueta de invierno'),
(10, 'Vestido', 45, 60, 'Vestido elegante'),
(11, 'Reloj', 100, 50, 'Reloj de pulsera'),
(12, 'Bolso', 55, 40, 'Bolso de cuero'),
(13, 'Cinturón', 25, 80, 'Cinturón de piel'),
(14, 'Bufanda', 20, 70, 'Bufanda de seda'),
(15, 'Paraguas', 15, 90, 'Paraguas resistente al viento'),
(16, 'Mochila', 40, 50, 'Mochila para senderismo'),
(17, 'Cartera', 30, 60, 'Cartera de piel'),
(18, 'Chaleco', 50, 30, 'Chaleco acolchado'),
(19, 'Pendientes', 15, 100, 'Pendientes de plata'),
(20, 'Collar', 25, 80, 'Collar de perlas'),
(21, 'Anillo', 35, 70, 'Anillo de compromiso'),
(22, 'Guantes', 10, 120, 'Guantes de lana'),
(23, 'Jersey', 40, 50, 'Jersey de lana merina'),
(24, 'Pulsera', 20, 90, 'Pulsera de oro'),
(25, 'Corbata', 15, 60, 'Corbata de seda'),
(26, 'Calcetines', 5, 150, 'Calcetines de algodón'),
(27, 'Zapatillas', 30, 80, 'Zapatillas deportivas'),
(28, 'Cazadora', 60, 40, 'Cazadora de piel'),
(29, 'Sandalias', 25, 70, 'Sandalias de verano'),
(30, 'Gorro de lana', 10, 100, 'Gorro de lana'),
(31, 'Pijama', 35, 50, 'Pijama de algodón'),
(32, 'Abrigo', 70, 30, 'Abrigo largo'),
(33, 'Chaqueta de cuero', 80, 20, 'Chaqueta de cuero auténtico'),
(34, 'Traje', 120, 40, 'Traje de negocios'),
(35, 'Blusa', 25, 60, 'Blusa de seda'),
(36, 'Bañador', 40, 30, 'Bañador de natación'),
(37, 'Pantalones cortos', 20, 80, 'Pantalones cortos de algodón'),
(38, 'Chaquetón', 90, 20, 'Chaquetón acolchado');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ClienteID`),
  ADD UNIQUE KEY `Ci` (`Ci`),
  ADD KEY `PersonaId` (`PersonaId`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`PedidoID`),
  ADD KEY `ClienteID` (`ClienteID`),
  ADD KEY `ProductoID` (`ProductoID`);

--
-- Indexes for table `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ProductoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ClienteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `PedidoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `ProductoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`PersonaId`) REFERENCES `personas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`ClienteID`) REFERENCES `clientes` (`ClienteID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`ProductoID`) REFERENCES `productos` (`ProductoID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
