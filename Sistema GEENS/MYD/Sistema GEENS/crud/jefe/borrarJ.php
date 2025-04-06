<?php

if(isset($_POST["btnBorrarjefe"])){

    $dni = $_POST["dni"];

    $usuario = $_POST["usuario"];

    $contraseña = $_POST["contraseña"];

    $cargo = $_POST["cargo"];

    $sql = "DELETE FROM `superiores` WHERE `DNI` = '$dni'";

    $consulta = mysqli_query($ruta,$sql); 

if($consulta) {
    echo"todo joya";
}
else {
    echo "siga participando";
}

mysqli_close($ruta); 

}

?>