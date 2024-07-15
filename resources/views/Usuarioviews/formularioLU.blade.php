<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="/usuarios/log" method="POST">
        @csrf

        <label for="NOMBRES">Nombre:</label><br>
        <input type="text" id="NOMBRES" name="NOMBRES"><br>

        <label for="CONTRASENA">Contrasena:</label><br>
        <input type="text" id="CONTRASENA" name="CONTRASENA"><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
