CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUXCOD` int(11) DEFAULT NULL,
  `NOMBRES` varchar(100) DEFAULT NULL,
  `APELLIDOS` varchar(100) DEFAULT NULL,
  `FECHA_NACIMIENTO` datetime DEFAULT NULL,
  `ESTADO` varchar(1) DEFAULT NULL,
  `USUARIO_CREACION` int(11) DEFAULT NULL,
  `FECHA_CREACION` datetime DEFAULT NULL,
  `USUARIO_MODIFICACION` int(11) DEFAULT NULL,
  `FECHA_MODIFICACION` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

go

CREATE TABLE `codigos` (
  `ID_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUXCOD` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(100) DEFAULT NULL,
  `ESTADO` varchar(1) DEFAULT NULL,
  `USUARIO_CREACION` int(11) DEFAULT NULL,
  `FECHA_CREACION` datetime DEFAULT NULL,
  `USUARIO_MODIFICACION` int(11) DEFAULT NULL,
  `FECHA_MODIFICACION` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

go

CREATE TABLE `usuarioxcodigos` (
  `ID_USUXCOD` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CODIGO` int(11) DEFAULT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(100) DEFAULT NULL,
  `ESTADO` varchar(1) DEFAULT NULL,
  `USUARIO_CREACION` int(11) DEFAULT NULL,
  `FECHA_CREACION` datetime DEFAULT NULL,
  `USUARIO_MODIFICACION` int(11) DEFAULT NULL,
  `FECHA_MODIFICACION` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_USUXCOD`),
  KEY `FK_ID_CODIGO` (`ID_CODIGO`),
  KEY `FK_ID_USUARIO` (`ID_USUARIO`),
  CONSTRAINT `FK_ID_CODIGO` FOREIGN KEY (`ID_CODIGO`) REFERENCES `codigos` (`ID_CODIGO`),
  CONSTRAINT `FK_ID_USUARIO` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
