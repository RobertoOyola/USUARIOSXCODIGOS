<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario X Code</title>
</head>
<body>
    <h2>Formulario de Usuario X Code</h2>
    <form action="/usuxcode/int" method="POST">
        @csrf

        <label for="ID_CODIGO">ID Codigo:</label><br>
        <input type="text" id="ID_CODIGO" name="ID_CODIGO"><br>

        <label for="ID_USUARIO">ID Usuario:</label><br>
        <input type="text" id="ID_USUARIO" name="ID_USUARIO"><br>

        <label for="DESCRIPCION">Descripcion:</label><br>
        <input type="text" id="DESCRIPCION" name="DESCRIPCION"><br>

        <label for="USUARIO_CREACION">Usuario Creacion:</label><br>
        <input type="text" id="USUARIO_CREACION" name="USUARIO_CREACION"><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
