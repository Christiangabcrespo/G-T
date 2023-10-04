<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Planner</title>
    <link rel="stylesheet" href="css/home.css">
      
</head>
<body>

<?php
session_start();
?>

<?php
    //session_start(); // Inicia la sesión si no está iniciada

    if (empty($_SESSION['name'])) {
        // El usuario no está logueado, muestra el botón de "Iniciar sesión"
        echo '<a href="login.php" class="log">Iniciar Sesión</a>';
    } else {
        // El usuario está logueado, muestra el botón de "Cerrar sesión"
        echo '<a href="php/cerrarsesion.php" class="log">Cerrar Sesión</a>';
    }
?>

    <div class="container">
        <form action="php/agregarTarea.php" method="post">
            <div class="agregar-tarea">
                <input type="text" class="texto" name="texto" placeholder="agregar una tarea">
                <input type="date" name="fecha">
                <input type="submit" class="boton" value="agregar">
            </div>
        </form> 
            <div class="seccion-tarea">
                <h3>Estas son tus Tareas Pendientes </h3>
                <?php
                    // Incluye el archivo de conexión a la base de datos
                    include 'php/conexionBD.php';

                    // Verifica si el usuario ha iniciado sesión (en este caso, verifica si existe una sesión con el nombre 'name')
                    if (!empty($_SESSION['name'])) {
                        // Obtén el ID del usuario de la sesión
                        $idUsuario = $_SESSION['id'];

                        // Consulta SQL para obtener las tareas del usuario
                        $sql = "SELECT id, tarea, fecha FROM tareas WHERE id_usuario = $idUsuario";
                        $result = $connec->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<table>";
                            echo "<tr><th>Tarea</th><th>Fecha</th><th>Acciones</th></tr>";

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['tarea'] . "</td>";
                                echo "<td>" . $row['fecha'] . "</td>";
                                echo "<td><form action='php/eliminarTareas.php' method='post'>";
                                echo "<input type='hidden' name='tarea_id' value='" . $row['id'] . "'>";
                                echo "<input type='submit' value='Eliminar'>";
                                echo "</form></td>";
                                echo "</tr>";
                            }

                            echo "</table>";
                        } else {
                            echo "No hay datos disponibles.";
                        }

                        // Cierra la conexión a la base de datos
                        $connec->close();
                    } else {
                        // El usuario no ha iniciado sesión, muestra un mensaje o redirige a la página de inicio de sesión
                        //echo "Debes iniciar sesión para ver los datos.";
                        $texto = "Debes iniciar sesión para ver los datos.";
                        echo '<span class="error-message">' . $texto . '</span>';
                    }
                ?>
                    </div>  
        
    </div>
</body>
</html>