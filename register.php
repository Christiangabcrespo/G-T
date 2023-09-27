<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <div class="formulario">
        <h1>Registrarse</h1>
        <form method="post" action="php/registerVerifi.php">
            <div class="name">
                <input type="text" required placeholder="nombre" name="name">
            </div>
            <div class="email">
                <input type="email" required placeholder="email" name="email">
            </div>
            <div class="password">
                <input type="password" required placeholder="Contraseña" name="pass">
            </div>
            <input type="submit" value="Registarse">
            <div class="registro">
                ¿Ya tiene una cuenta? <a href="login.php">Iniciar Sesion</a>
            </div>
        </form>
    </div>
</body>
</html>