<?php

include 'funcion.php';

if (!empty($_POST["ingresar"])) {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $cargo = $_POST["cargo"];
    
    if (!empty($usuario) && !empty($contraseña)) {
        session_start();

        if ($cargo == "encuestador") {
            $encuestador = obtenerId($usuario);
            $consulta = $ruta->query("SELECT ID FROM encuestadores WHERE USUARIO='$usuario' AND CONTRASEÑA='$contraseña'");
            if ($encuestador = $consulta->fetch_object()) {
                $_SESSION['ID'] = $encuestador->ID;
                header("Location: encuestador.php");
            } else {
                echo "Credenciales de encuestador incorrectas.";
            }
        } elseif (in_array($cargo, ["Lider", "Supervisor", "JefeProyecto"])) {
            $consulta = obtenerId($usuario);
            $consulta = $ruta->query("SELECT DNI FROM superiores WHERE USUARIO='$usuario' AND CONTRASEÑA='$contraseña' AND CARGO='$cargo'");

            if ($consulta === false) {
                die("Error en la consulta: " . $ruta->error);
            }
            
            if ($consulta->num_rows > 0) {
                $superior = $consulta->fetch_object();
                $_SESSION['ID'] = $superior->ID;
                header("Location: $cargo.php");
            } else {
                echo "Credenciales de $cargo incorrectas.";
            }
            
        } else {
            echo "Cargo no válido.";
        }
    } else {
        echo "Faltan datos de usuario y/o contraseña.";
    }
    
}

?>
