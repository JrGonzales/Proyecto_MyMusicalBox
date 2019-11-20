USE `DB_MyMusicalBox`;
-- <----------------------------------------------------------------------------->
-- <-----------------DATOS TABLA USUARIOS------------------------------------------------------------>
INSERT
  INTO `usuarios`
  (`codigoUsuario`, `nombre`, `correo`, `password`)
VALUES
  (NULL, 'Junnior Gonzales', 'admin@gmail.com', 'admin1');
-- <----------------------------------------------------------------------------->
-- <------------------DATOS TABLA CLIENTES----------------------------------------------------------->
INSERT
  INTO `clientes`
  (`codigoCliente`, `nombre`, `correo`, `password`)
VALUES
  (NULL, 'Jose Perez', 'jose@gmail.com', 'cliente1'),
  (NULL, 'Ana Diaz', 'ana@gmail.com', 'cliente2'),
  (NULL, 'Jorge Soliz', 'jorge@gmail.com', 'cliente3');
-- <----------------------------------------------------------------------------->
-- <-------------------DATOS TABLA PEDIDOS---------------------------------------------------------->
INSERT
  INTO `pedidos`
  (`numeroPedido`, `codigoCliente`, `fecha`)
VALUES
  (NULL, '3', '2019-10-17');
  (NULL, '3', '2019-10-22');
-- <----------------------------------------------------------------------------->
-- <------------------DATOS TABLA PRODUCTOS----------------------------------------------------------->
INSERT
  INTO `productos`
  (`codigoProducto`, `interprete`, `precio`, `stock`, `estado`, `album`, `imagen`)
VALUES
  (NULL, 'Artic Monkeys', '150.00', 50, 'Normal', 'AM', 'Artic Monkeys.jpg'),
  (NULL, 'AC-DC', '140.00', 50, 'Normal', 'Black in Black', 'AC-DC.jpg'),
  (NULL, 'Kings of Leon', '135.00', 50, 'Normal', 'Because of the Times', 'Kings of Leon.jpg'),
  (NULL, 'The Killers', '135.00', 50, 'Normal', 'Day & Age', 'The Killers.jpg'),
  (NULL, 'Aerosmith', '145.00', 50, 'Normal', 'Get Your Wings', 'Aerosmith.jpg'),
  (NULL, 'The Rolling Stone', '120.00', 50, 'Normal', 'Let it Bleed', 'The Rolling Stone.jpg'),
  (NULL, 'Deep Purple', '138.00', 50, 'Normal', 'Machine Head', 'Deep Purple.jpg'),
  (NULL, 'Pink Floyd', '155.00', 50, 'Normal', 'Money', 'Pink Floyd.jpg'),
  (NULL, 'The Police', '144.00', 50, 'Normal', 'Outlandos d Amour', 'The Police.jpg'),
  (NULL, 'Muse', '130.00', 50, 'Normal', 'Simulation Theory', 'Muse.jpg'),
  (NULL, 'The Beatles', '140.00', 50, 'Normal', 'Yellow Submarine', 'The Beatles.jpg');
-- <----------------------------------------------------------------------------->
-- <--------------------DATOS TABLA DETALLES PEDIDOS--------------------------------------------------------->
INSERT
  INTO `detallePedidos`
  (`numeroPedido`, `codigoProducto`, `cantidad`)
VALUES
  (1, 1, 2);
  (2, 3, 1);
  (2, 11, 2);
-- <----------------------------------------------------------------------------->
