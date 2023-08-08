
-- Creacion de la base de datos
DROP DATABASE IF EXISTS DBSISTEMAFINALSEXTO;
CREATE DATABASE IF NOT EXISTS DBSISTEMAFINALSEXTO;

-- Base de datos: `dbsistemafinalsexto`
--
USE DBSISTEMAFINALSEXTO;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(50) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `IDROL` INT NOT NULL,
  `ESTADO` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`ID`)
) ENGINE=INNODB;

INSERT INTO usuario(USUARIO,NOMBRE,PASSWORD,IDROL,ESTADO)
VALUES('JUANQUI','JUAN CARLOS','123456',1,1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CATEGORIA` varchar(100) NOT NULL,
  `IMAGEN` VARCHAR(150) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(150) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(250) NOT NULL,
  `PERFIL` varchar(100) DEFAULT 'default.png',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_TRANSACCION` varchar(80) DEFAULT NULL,
  `MONTO` decimal(10,2) DEFAULT NULL,
  `ESTADO` varchar(30) DEFAULT NULL,
  `FECHA` datetime DEFAULT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `APELLIDO` varchar(100) DEFAULT NULL,
  `DIRECCION` varchar(200) DEFAULT NULL,
  `CIUDAD` varchar(50) DEFAULT NULL,
  `EMAIL_USER` varchar(50) DEFAULT NULL,
  `PROCESO` enum('1','2','3') DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

DROP TABLE IF EXISTS `detalle_pedido`;
CREATE TABLE IF NOT EXISTS `detalle_pedido` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRODUCTO` varchar(255) NOT NULL,
  `PRECIO` decimal(10,2) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `ID_PEDIDO` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  FOREIGN KEY (ID_PEDIDO) REFERENCES pedido(ID)
) ENGINE=InnoDB;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(200) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `PRECIO` decimal(10,2) NOT NULL,
  `CANTIDAD` int(11) DEFAULT NULL,
  `IMAGEN` VARCHAR(150) DEFAULT NULL,
  `ID_CATEGORIA` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  FOREIGN KEY (ID_CATEGORIA) REFERENCES categoria(ID)
) ENGINE=InnoDB;


