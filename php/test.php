<?php
include "conexionBD.php";


// Consulta SQL para seleccionar todos los registros de una tabla (por ejemplo, "usuarios")
$sql = "SELECT * FROM usuarios";
$result = $connec->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros en la tabla usuarios.";
}

// Cerrar la conexión

?>
