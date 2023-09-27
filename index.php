<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Planner</title>
    <link rel="stylesheet" href="css/home.css">  
</head>
<body>
    <div class="container">
        <form action="php/agregarTarea.php" method="post">
            <div class="agregar-tarea">
                <input type="text" class="texto" placeholder="agregar una tarea">
                <input type="submit" class="boton" value="agregar">
            </div>
            <div class="seccion-tarea">
                <h3>Estas son tus Tareas Pendientes </h3>
                <table>                    
                    <?php include "php/mostrarTareas.php"?>
                </table>
            </div>  
        </form> 
    </div>
</body>
</html>