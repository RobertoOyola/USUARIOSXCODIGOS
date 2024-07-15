CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`CODIGO_DEL`(

	in ID_CODIGOi   INT,

    IN USUARIO_MODIFICACIONIi INT

)
BEGIN

    update codigos 

        set

		ESTADO = 'I',

        USUARIO_MODIFICACION = USUARIO_MODIFICACIONIi,

        FECHA_MODIFICACION = NOW()

       WHERE ID_CODIGO  = ID_CODIGOi;

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`CODIGO_GET`()
BEGIN

	SELECT * FROM codigos;

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`CODIGO_GETID`(IN `id` INT)
BEGIN

	SELECT * from codigos WHERE ID_CODIGO = id;

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`CODIGO_INTO`(

    IN id_usuxcodI INT,

    IN descripcionI VARCHAR(100),

    IN usuariocreacionI INT

)
BEGIN

    INSERT INTO codigos 

        (ID_USUXCOD, DESCRIPCION, ESTADO, USUARIO_CREACION, FECHA_CREACION)

    VALUES 

        (id_usuxcodI, descripcionI, 'A', usuariocreacionI, NOW());

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`CODIGO_UPD`(

	in ID_CODIGOi   INT,

    IN ID_USUXCODi   INT,

    IN DESCRIPCIONi  INT,

    IN USUARIO_MODIFICACIONIi INT

)
BEGIN

    update codigos 

        set

        ID_USUXCOD = ID_USUXCODi,

        DESCRIPCION = DESCRIPCIONi,

        USUARIO_MODIFICACION = USUARIO_MODIFICACIONIi,

        FECHA_MODIFICACION = NOW()

       WHERE ID_CODIGO  = ID_CODIGOi;

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`USUARIO_DEL`(

	in ID_USUARIOI    INT,

    IN USUARIO_MODIFICACIONI INT

)
BEGIN

    update usuarios 

        set

		ESTADO = 'I',

        USUARIO_MODIFICACION = USUARIO_MODIFICACIONII,

        FECHA_MODIFICACION = NOW()

       WHERE ID_USUARIO   = ID_USUARIOI ;

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`USUARIO_GET`()
BEGIN

	SELECT * FROM usuarios;

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`USUARIO_GETID`(IN `id` INT)
BEGIN

	SELECT * FROM usuarios WHERE ID_USUARIO = id;

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`USUARIO_INTO`(

    IN id_usuxcodI INT,

    IN nombreI VARCHAR(100),

    IN apellidoI VARCHAR(100),

    IN fechanacimientoI DATE,

    IN usuariocreacionI INT

)
BEGIN

    INSERT INTO usuarios

        (ID_USUXCOD, NOMBRES, APELLIDOS, FECHA_NACIMIENTO, ESTADO, USUARIO_CREACION, FECHA_CREACION )

    VALUES

        (id_usuxcodI, nombreI, apellidoI, fechanacimientoI, 'A', usuariocreacionI, now());

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`USUARIO_UPD`(

	in ID_USUARIOI INT,

    IN ID_USUXCODI  INT,

    IN NOMBRESI VARCHAR(100),

    IN APELLIDOSI VARCHAR(100),

    IN FECHA_NACIMIENTOI DATETIME,

    in USUARIO_MODIFICACIONI INT

)
BEGIN

    update usuarios 

        set

        ID_USUXCOD = ID_USUXCODI,

        NOMBRES = NOMBRESI,

        APELLIDOS = APELLIDOSI,

        FECHA_NACIMIENTO = FECHA_NACIMIENTOI,

        USUARIO_MODIFICACION = USUARIO_MODIFICACIONI,

        FECHA_MODIFICACION = NOW()

       WHERE ID_USUARIO  = ID_USUARIOI;

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`USUXCOD_DEL`(

	in ID_USUXCODI     INT,

    IN USUARIO_MODIFICACIONI INT

)
BEGIN

    update usuarioxcodigos 

        set

		ESTADO = 'I',

        USUARIO_MODIFICACION = USUARIO_MODIFICACIONI,

        FECHA_MODIFICACION = NOW()

       WHERE ID_USUXCOD = ID_USUXCODI  ;

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`USUXCOD_GET`()
BEGIN

	SELECT * FROM usuarioxcodigos;

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`USUXCOD_GETID`(IN `id` INT)
BEGIN

	SELECT * FROM usuarioxcodigos WHERE ID_USUXCOD = id;

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`USUXCOD_INTO`(

    IN ID_CODIGOI  INT,

    IN ID_USUARIOI INT,

    IN DESCRIPCIONI VARCHAR(100),

    IN USUARIO_CREACIONI INT

)
BEGIN

    INSERT INTO usuarioxcodigo 

        (ID_CODIGO , ID_USUARIO , DESCRIPCION, ESTADO, USUARIO_CREACION, FECHA_CREACION )

    VALUES 

        (ID_CODIGOI, ID_USUARIOI, DESCRIPCIONI, 'A', USUARIO_CREACIONI, NOW());

END

go

CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarioxcodigo`.`USUXCOD_UPD`(

	in ID_USUXCODI INT,

    IN ID_CODIGOI  INT,

    IN ID_USUARIOI INT,

    IN DESCRIPCIONI VARCHAR(100),

    IN USUARIO_MODIFICACIONI INT

)
BEGIN

    update usuarioxcodigo 

        set

        ID_CODIGO = ID_CODIGOI,

        ID_USUARIO = ID_USUARIOI,

        DESCRIPCION = DESCRIPCIONI,

        USUARIO_MODIFICACION = USUARIO_MODIFICACIONI,

        FECHA_MODIFICACION = NOW()

       WHERE ID_USUXCOD = ID_USUXCODI;

END
