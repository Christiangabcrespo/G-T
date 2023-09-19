
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <?php
        include 'php/conexionBD.php';    
    ?>
    <div class="formulario">
        <h1>Iniciar Sesion</h1>
        <form method="post" action="php/loginVerifi.php">
            <div class="email">
                <input type="email" required placeholder="email" name="email">
            </div>
            <div class="password">
                <input type="password" required placeholder="Contraseña" name="pass">
            </div>
            <input type="submit" value="Iniciar">
            <div class="registro">
                ¿No Tiene cuenta? <a href="register.html">Registarse</a>
            </div>
        </form>
    </div>
</body>
</html>