/*
 Navicat Premium Data Transfer

 Source Server         : mysqliDB
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : dbpersona

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 20/05/2024 12:25:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes`  (
  `ClienteID` int NOT NULL AUTO_INCREMENT,
  `PersonaId` int NULL DEFAULT NULL,
  `Ci` int NULL DEFAULT NULL,
  `RazonSocial` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ClienteID`) USING BTREE,
  UNIQUE INDEX `Ci`(`Ci` ASC) USING BTREE,
  INDEX `PersonaId`(`PersonaId` ASC) USING BTREE,
  CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`PersonaId`) REFERENCES `personas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES (6, 1, 1234567, 'Juan Perez & Co.');
INSERT INTO `clientes` VALUES (7, 2, 7654321, 'Maria Lopez Emporium');
INSERT INTO `clientes` VALUES (8, 3, 9876543, 'Carlos Garcia Fashion');
INSERT INTO `clientes` VALUES (9, 4, 3456789, 'Ana Martinez Moda');
INSERT INTO `clientes` VALUES (10, 5, 9876544, 'Pedro Sanchez Shoes');

-- ----------------------------
-- Table structure for pedidos
-- ----------------------------
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos`  (
  `PedidoID` int NOT NULL AUTO_INCREMENT,
  `ClienteID` int NULL DEFAULT NULL,
  `ProductoID` int NULL DEFAULT NULL,
  `Cantidad` int NULL DEFAULT NULL,
  `fecha` datetime NULL DEFAULT NULL,
  `Descripcion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`PedidoID`) USING BTREE,
  INDEX `ClienteID`(`ClienteID` ASC) USING BTREE,
  INDEX `ProductoID`(`ProductoID` ASC) USING BTREE,
  CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`ClienteID`) REFERENCES `clientes` (`ClienteID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`ProductoID`) REFERENCES `productos` (`ProductoID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pedidos
-- ----------------------------
INSERT INTO `pedidos` VALUES (4, 6, 1, 5, '2024-04-15 10:00:00', 'Pedido de camisetas para Juan Perez & Co.');
INSERT INTO `pedidos` VALUES (5, 7, 2, 3, '2024-04-15 11:00:00', 'Pedido de pantalones para Maria Lopez Emporium');
INSERT INTO `pedidos` VALUES (6, 6, 3, 2, '2024-04-15 12:00:00', 'Pedido de zapatos para Juan Perez & Co.');

-- ----------------------------
-- Table structure for personas
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telefono` int NULL DEFAULT NULL,
  `direccion` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES (1, 'Juan Perez', 123456789, 1);
INSERT INTO `personas` VALUES (2, 'Maria Lopez', 987654321, 2);
INSERT INTO `personas` VALUES (3, 'Carlos Garcia', 555555555, 3);
INSERT INTO `personas` VALUES (4, 'Ana Martinez', 111111111, 4);
INSERT INTO `personas` VALUES (5, 'Pedro Sanchez', 222222222, 5);
INSERT INTO `personas` VALUES (6, 'Laura Fernandez', 333333333, 6);
INSERT INTO `personas` VALUES (7, 'Diego Rodriguez', 444444444, 7);
INSERT INTO `personas` VALUES (8, 'Elena Gomez', 555555555, 8);
INSERT INTO `personas` VALUES (9, 'Sara Ramirez', 666666666, 9);
INSERT INTO `personas` VALUES (10, 'Pablo Diaz', 777777777, 10);
INSERT INTO `personas` VALUES (11, 'Lucia Munoz', 888888888, 11);
INSERT INTO `personas` VALUES (12, 'Daniel Torres', 999999999, 12);
INSERT INTO `personas` VALUES (13, 'Carmen Ruiz', 1010101010, 13);
INSERT INTO `personas` VALUES (14, 'Manuel Vazquez', 1111111111, 14);
INSERT INTO `personas` VALUES (15, 'Rosa Serrano', 1212121212, 15);
INSERT INTO `personas` VALUES (16, 'Javier Martin', 1313131313, 16);
INSERT INTO `personas` VALUES (17, 'Isabel Jimenez', 1414141414, 17);
INSERT INTO `personas` VALUES (18, 'Antonio Perez', 1515151515, 18);
INSERT INTO `personas` VALUES (19, 'Luisa Moreno', 1616161616, 19);
INSERT INTO `personas` VALUES (20, 'Mario Gomez', 1717171717, 20);
INSERT INTO `personas` VALUES (21, 'Nuria Delgado', 1818181818, 21);
INSERT INTO `personas` VALUES (22, 'Ruben Ortiz', 1919191919, 22);
INSERT INTO `personas` VALUES (23, 'Sonia Castro', 2020202020, 23);
INSERT INTO `personas` VALUES (24, 'Marta Guerrero', 2121212121, 24);
INSERT INTO `personas` VALUES (25, 'Victor Ramos', 2147483647, 25);
INSERT INTO `personas` VALUES (26, 'Eva Bravo', 2147483647, 26);
INSERT INTO `personas` VALUES (27, 'Alberto Navarro', 2147483647, 27);
INSERT INTO `personas` VALUES (28, 'Celia Medina', 2147483647, 28);
INSERT INTO `personas` VALUES (29, 'Raul Marquez', 2147483647, 29);
INSERT INTO `personas` VALUES (30, 'Beatriz Jimenez', 2147483647, 30);
INSERT INTO `personas` VALUES (31, 'Adrian Soto', 2147483647, 31);
INSERT INTO `personas` VALUES (32, 'Alicia Blanco', 2147483647, 32);
INSERT INTO `personas` VALUES (33, 'Hector Rosado', 2147483647, 33);
INSERT INTO `personas` VALUES (34, 'Elena Herrera', 2147483647, 34);
INSERT INTO `personas` VALUES (35, 'Julio Delgado', 2147483647, 35);
INSERT INTO `personas` VALUES (36, 'Ines Gallego', 2147483647, 36);
INSERT INTO `personas` VALUES (37, 'Oscar Aguilar', 2147483647, 37);
INSERT INTO `personas` VALUES (38, 'Natalia Ortega', 2147483647, 38);
INSERT INTO `personas` VALUES (39, 'Pablo Moya', 2147483647, 39);
INSERT INTO `personas` VALUES (40, 'Lucia Morales', 2147483647, 40);
INSERT INTO `personas` VALUES (41, 'Gonzalo Suarez', 2147483647, 41);
INSERT INTO `personas` VALUES (42, 'Laura Castro', 2147483647, 42);
INSERT INTO `personas` VALUES (43, 'Andres Vidal', 2147483647, 43);
INSERT INTO `personas` VALUES (44, 'Teresa Santos', 2147483647, 44);
INSERT INTO `personas` VALUES (45, 'Irene Roman', 2147483647, 45);
INSERT INTO `personas` VALUES (46, 'Felipe Lozano', 2147483647, 46);
INSERT INTO `personas` VALUES (47, 'Olga Marin', 2147483647, 47);
INSERT INTO `personas` VALUES (48, 'Ramon Cuesta', 2147483647, 48);
INSERT INTO `personas` VALUES (49, 'Esther Pascual', 2147483647, 49);
INSERT INTO `personas` VALUES (50, 'Samuel Guerrero', 2147483647, 50);

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos`  (
  `ProductoID` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `PrecioUnitario` int NULL DEFAULT NULL,
  `stock` int NULL DEFAULT NULL,
  `Descripcion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ProductoID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES (1, 'Camiseta', 20, 100, 'Camiseta de algodón');
INSERT INTO `productos` VALUES (2, 'Pantalón', 30, 80, 'Pantalón vaquero');
INSERT INTO `productos` VALUES (3, 'Zapatos', 50, 50, 'Zapatos de cuero');
INSERT INTO `productos` VALUES (4, 'Bufanda', 15, 60, 'Bufanda de lana');
INSERT INTO `productos` VALUES (5, 'Sombrero', 25, 40, 'Sombrero de fieltro');
INSERT INTO `productos` VALUES (6, 'Gorra', 10, 90, 'Gorra de béisbol');
INSERT INTO `productos` VALUES (7, 'Botas', 60, 30, 'Botas de montaña');
INSERT INTO `productos` VALUES (8, 'Gafas de sol', 35, 70, 'Gafas de sol polarizadas');
INSERT INTO `productos` VALUES (9, 'Chaqueta', 70, 20, 'Chaqueta de invierno');
INSERT INTO `productos` VALUES (10, 'Vestido', 45, 60, 'Vestido elegante');
INSERT INTO `productos` VALUES (11, 'Reloj', 100, 50, 'Reloj de pulsera');
INSERT INTO `productos` VALUES (12, 'Bolso', 55, 40, 'Bolso de cuero');
INSERT INTO `productos` VALUES (13, 'Cinturón', 25, 80, 'Cinturón de piel');
INSERT INTO `productos` VALUES (14, 'Bufanda', 20, 70, 'Bufanda de seda');
INSERT INTO `productos` VALUES (15, 'Paraguas', 15, 90, 'Paraguas resistente al viento');
INSERT INTO `productos` VALUES (16, 'Mochila', 40, 50, 'Mochila para senderismo');
INSERT INTO `productos` VALUES (17, 'Cartera', 30, 60, 'Cartera de piel');
INSERT INTO `productos` VALUES (18, 'Chaleco', 50, 30, 'Chaleco acolchado');
INSERT INTO `productos` VALUES (19, 'Pendientes', 15, 100, 'Pendientes de plata');
INSERT INTO `productos` VALUES (20, 'Collar', 25, 80, 'Collar de perlas');
INSERT INTO `productos` VALUES (21, 'Anillo', 35, 70, 'Anillo de compromiso');
INSERT INTO `productos` VALUES (22, 'Guantes', 10, 120, 'Guantes de lana');
INSERT INTO `productos` VALUES (23, 'Jersey', 40, 50, 'Jersey de lana merina');
INSERT INTO `productos` VALUES (24, 'Pulsera', 20, 90, 'Pulsera de oro');
INSERT INTO `productos` VALUES (25, 'Corbata', 15, 60, 'Corbata de seda');
INSERT INTO `productos` VALUES (26, 'Calcetines', 5, 150, 'Calcetines de algodón');
INSERT INTO `productos` VALUES (27, 'Zapatillas', 30, 80, 'Zapatillas deportivas');
INSERT INTO `productos` VALUES (28, 'Cazadora', 60, 40, 'Cazadora de piel');
INSERT INTO `productos` VALUES (29, 'Sandalias', 25, 70, 'Sandalias de verano');
INSERT INTO `productos` VALUES (30, 'Gorro de lana', 10, 100, 'Gorro de lana');
INSERT INTO `productos` VALUES (31, 'Pijama', 35, 50, 'Pijama de algodón');
INSERT INTO `productos` VALUES (32, 'Abrigo', 70, 30, 'Abrigo largo');
INSERT INTO `productos` VALUES (33, 'Chaqueta de cuero', 80, 20, 'Chaqueta de cuero auténtico');
INSERT INTO `productos` VALUES (34, 'Traje', 120, 40, 'Traje de negocios');
INSERT INTO `productos` VALUES (35, 'Blusa', 25, 60, 'Blusa de seda');
INSERT INTO `productos` VALUES (36, 'Bañador', 40, 30, 'Bañador de natación');
INSERT INTO `productos` VALUES (37, 'Pantalones cortos', 20, 80, 'Pantalones cortos de algodón');
INSERT INTO `productos` VALUES (38, 'Chaquetón', 90, 20, 'Chaquetón acolchado');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `idPersona` int NULL DEFAULT NULL,
  `correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idUsuario`) USING BTREE,
  INDEX `idPersona`(`idPersona` ASC) USING BTREE,
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `personas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (1, 4, 'ana@gmail.com', 'ana123');

SET FOREIGN_KEY_CHECKS = 1;
