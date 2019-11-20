
-- CREACION DE LA BASE DE DATOS
CREATE DATABASE `DB_MyMusicalBox`;

-- USANDO LA BASE DE DATOS
USE `DB_MyMusicalBox`;
-- <----------------------------------------------------------------------------->
-- CREACION DE LA TABLA USUARIOS O ADMINISTRADOR
CREATE TABLE `usuarios` (
  `codigoUsuario` int AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
);
-- <----------------------------------------------------------------------------->
-- CREACION DE LA TABLA CLIENTES
CREATE TABLE `clientes` (
  `codigoCliente` int AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
  `dni` int(9) NOT NULL,
  `direccion` varchar(50) NOT NULL
);
-- <----------------------------------------------------------------------------->
-- CREACION DE LA TABLA PEDIDOS
CREATE TABLE `pedidos` (
  `numeroPedido` int AUTO_INCREMENT PRIMARY KEY,
  `codigoCliente` varchar(100) NOT NULL REFERENCES `clientes` (`codigoCliente`),
  `fecha` date NOT NULL
);
-- <----------------------------------------------------------------------------->
-- CREACION DE LA TABLA PRODUCTOS
CREATE TABLE `productos` (
  `codigoProducto` int AUTO_INCREMENT PRIMARY KEY,
  `interprete` varchar(100) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `stock` int NOT NULL,
  `estado` varchar(30) NOT NULL,
  `album` varchar(1000) NOT NULL,
  `imagen` varchar(50) NOT NULL
);
-- <----------------------------------------------------------------------------->
-- CREACION DE LA TABLA DETALLE PEDIDOS
CREATE TABLE `detallePedidos` (
  `numeroPedido` int NOT NULL REFERENCES `pedidos` (`numeroPedido`),
  `codigoProducto` int NOT NULL REFERENCES `prodcutos` (`codigoProducto`),
  `cantidad` int NOT NULL
);
-- <----------------------------------------------------------------------------->
