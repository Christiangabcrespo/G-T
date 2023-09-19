<?php
    include 'conexionBD.php';
    $pass = $_POST["pass"];    
    $email = $_POST["email"];

    $sql = "SELECT * FROM usuarios WHERE name = ? AND contraseña = ?";
    $stmt = $connec->prepare($sql);
    $stmt->bind_param("ss", $email, $pass);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        header("Location: ../index.html");
        session_start();
        $id = $_SESSION['id'];
        $mailsession = $_SESSION['name'];        
    } else {
        echo "Los datos no son válidos.";
    }
    
?>

