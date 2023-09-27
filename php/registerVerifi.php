<?php
    include 'conexionBD.php';
    $pass = $_POST["pass"];    
    $email = $_POST["email"];
    $name = $_POST["name"];

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $connec->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute(); 
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo '<script>
            alert("El mail ya esta asociado a una cuenta existente.");
            window.location.href = "../register.php";
        </script>';
    } else {        
        $sqlInsertInto = "INSERT INTO usuarios (id, email,contraseña, name) VALUES ('', '$email', '$pass', '$name')";
        $stmt = $connec->query($sqlInsertInto);                    
        
        echo '<script>
            alert("Cuenta creada exitosamente.");
            window.location.href = "../login.php";
        </script>';
    }
   
?>