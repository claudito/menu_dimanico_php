create database test;
  use test;

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


INSERT INTO `menu` (`id`, `nombre`, `tipo`) VALUES
(1, 'Procesos', 'menu_central'),
(2, 'Transacción', 'menu_central'),
(3, '', 'menu_config');


CREATE TABLE IF NOT EXISTS `sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `permiso` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


INSERT INTO `sub_menu` (`id`, `nombre`, `ruta`, `menu_id`, `permiso`) VALUES
(1, 'Página #1', 'pages/pagina1.php', 1, 'disabled'),
(2, 'Página #2', 'pages/pagina2.php', 1, ''),
(3, 'Página #3', 'pages/pagina3.php', 2, 'disabled'),
(4, 'Página #4', 'pages/pagina4.php', 2, ''),
(8, 'Configuración', '#', 3, ''),
(9, 'Salir', '#', 3, ''),
(10, 'Perfil', '#', 3, '');