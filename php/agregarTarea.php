<?php 
    session_start();
    include 'conexionBD.php';

    $texto = $_POST["texto"];
    $fecha = $_POST["fecha"];
    

    // Verifica si el usuario ha iniciado sesión y obtén su ID desde la sesión
    if (isset($_SESSION['id'])) {
        $idUsuario = $_SESSION['id'];
        if (empty($texto) != 1 && empty($fecha)!= 1) {
            $sql = "INSERT INTO tareas (id, tarea, id_usuario, fecha) VALUES ('id', '$texto', '$idUsuario', '$fecha')";        
                if ($connec->query($sql) === TRUE) {
                    header('Location: ../index.php');
                } 
        }else {
            echo '<script>
            alert("Error al insertar los datos: Vacios o inadmisibles.");
            window.location.href = "../index.php";
        </script>';
                }
        // Consulta SQL para insertar los datos en la tabla
        
    } else {
        // Maneja el caso en el que el usuario no ha iniciado sesión
        echo '<script>
        alert("Debe de iniciar sesion para agregar una tarea.");
        window.location.href = "../login.php";
    </script>';
    }

    // Cierra la conexión a la base de datos
    $connec->close();
?>