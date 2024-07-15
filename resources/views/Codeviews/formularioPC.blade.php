<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Codigo</title>
</head>
<body>
    <h2>Formulario de Codigo</h2>
    <form action="/codigos/int" method="POST">
        @csrf

        <label for="DESCRIPCION">Descripcion:</label><br>
        <input type="text" id="DESCRIPCION" name="DESCRIPCION"><br>

        <label for="USUARIO_CREACION">Usuario de creacion:</label><br>
        <input type="text" id="USUARIO_CREACION" name="USUARIO_CREACION"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
