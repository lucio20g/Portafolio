<?php

    if(isset($_POST["btnmodificarusuario"])) {
        
        $dni = $_POST["dni"];

        $id = $_POST["id"];
    
        $usuario = $_POST["usuario"];
    
        $contraseña = $_POST["contraseña"];
    
        $habilitado = $_POST["habilitado"];

        $sql = " UPDATE `encuestadores` SET `ID`='$id',`USUARIO`='$usuario',`CONTRASEÑA`='$contraseña',`HABILITADO`='$habilitado' WHERE `DNI`='$dni'";

        $consulta = mysqli_query($ruta,$sql); 

    if($consulta) {
        echo"todo joya";
    }
    else {
        echo "siga participando";
    }

    mysqli_close($ruta); 

    }