<?php

    if(isset($_POST["btnmodificarusuario"])) {
        
        $dni = $_POST["dni"];

        $usuario = $_POST["usuario"];
    
        $contraseña = $_POST["contraseña"];
    
        $cargo = $_POST["cargo"];

        $sql = " UPDATE `superiores` SET `USUARIO`='$usuario',`CONTRASEÑA`='$contraseña',`CARGO`='$cargo' WHERE `DNI`='$dni'";

        $consulta = mysqli_query($ruta,$sql); 

    if($consulta) {
        echo"todo joya";
    }
    else {
        echo "siga participando";
    }

    mysqli_close($ruta); 

    }