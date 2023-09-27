<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "gt_proyecto";

// Crear una conexión a la base de datos
$connec = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($connec->connect_error) {
    die("Error en la conexión: " . $conec->connect_error);
}  
?>
