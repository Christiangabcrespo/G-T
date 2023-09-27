<?php 
session_start();
if (isset($_SESSION['name'], $_SESSION['email'], $_SESSION['id'])) { 
    $sql = "SELECT * FROM tareas";   
    echo "<table>";
    //echo "<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Edad</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["edad"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>