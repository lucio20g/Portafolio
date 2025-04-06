<?php

if(isset($_POST["btnBorrarEncuestadores"])){

    $dni = $_POST["dni"];

    $id = $_POST["id"];

    $usuario = $_POST["usuario"];

    $contraseña = $_POST["contraseña"];

    $habilitado = $_POST["habilitado"];

    $sql = "DELETE FROM `encuestadores` WHERE `DNI` = '$dni' ";

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