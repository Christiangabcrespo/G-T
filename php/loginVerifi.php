<?php
    session_start();
    include 'conexionBD.php';    
    $pass = $_POST["pass"];    
    $email = $_POST["email"];    

    $sql = "SELECT * FROM usuarios";
    $result = $connec->query($sql);
    $dato = $result->fetch_assoc();
    foreach ($dato as $value) {
        echo $value;echo "<br>";
    }

    /*if ($result->num_rows()<1) {
        # code...
    }
    
    
    if ($result->num_rows > 0 ) {
        /*$sesionUsuario = $stmt->fetch_assoc();
        $_SESSION['name'] = $sesionUsuario['name'];
        $_SESSION['email'] = $sesionUsuario['email'];
        $_SESSION['id'] = $sesionUsuario['id'];*//*
        header("Location: ../index.php");
    } else {        
        echo '<script>
            alert("Los datos ingresados son incorrectos.");
            window.location.href = "../login.php";
        </script>';
        
    }
   */
?>

