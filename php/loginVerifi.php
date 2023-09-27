<?php
    session_start();
    include 'conexionBD.php';    
    $pass = $_POST["pass"];    
    $email = $_POST["email"];    

    $sql = "SELECT * FROM usuarios where email = '$email' and contraseña = '$pass'";
    $respuesta= $connec->query($sql);           
        
    if ($respuesta->num_rows > 0) {
        $sesionUsuario = $respuesta->fetch_assoc();
        $_SESSION['name'] = $sesionUsuario['name'];
        $_SESSION['email'] = $sesionUsuario['email'];
        $_SESSION['id'] = $sesionUsuario['id'];        
        header("Location: ../index.php");
    } else {        
        echo '<script>
            alert("Los datos ingresados son incorrectos.");
            window.location.href = "../login.php";
        </script>';
        
    }
   
?>

