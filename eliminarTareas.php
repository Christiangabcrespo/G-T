<?php
// Incluye el archivo de conexión a la base de datos
require 'php/conexionBD.php';

// Verifica si se ha enviado un ID de tarea a eliminar
if (isset($_POST['tarea_id'])) {
    $idTarea = $_POST['tarea_id'];
    
    // Consulta SQL para eliminar la tarea por su ID
    $sql = "DELETE FROM tareas WHERE id_tarea = $idTarea";
    
    if ($connec->query($sql) === TRUE) {
        echo "Tarea eliminada correctamente.";
    } else {
        echo "Error al eliminar la tarea: " . $connec->error;
    }
}

// Redirige de regreso a la página de la lista de tareas
header("Location: index.php");
exit();
?>