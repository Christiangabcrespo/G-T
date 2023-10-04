<?php 
    session_start();
    include 'conexionBD.php';

    $texto = $_POST["texto"];
    $fecha = $_POST["fecha"];

    // Verifica si el usuario ha iniciado sesión y obtén su ID desde la sesión
    if (isset($_SESSION['id'])) {
        $idUsuario = $_SESSION['id'];

        // Consulta SQL para insertar los datos en la tabla
        $sql = "INSERT INTO tareas (id, tarea, id_usuario, fecha) VALUES ('id', '$texto', '$idUsuario', '$fecha')";

        if ($connec->query($sql) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Error al insertar los datos: " . $connec->error;
        }
    } else {
        // Maneja el caso en el que el usuario no ha iniciado sesión
        echo "El usuario no ha iniciado sesión.";
    }

    // Cierra la conexión a la base de datos
    $connec->close();
?>