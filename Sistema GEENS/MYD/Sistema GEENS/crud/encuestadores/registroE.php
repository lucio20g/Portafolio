<?php

if(isset($_POST["btnEncuestadores"])){

    $dni = $_POST["dni"];

    $id = $_POST["id"];

    $usuario = $_POST["usuario"];

    $contraseña = $_POST["contraseña"];

    $habilitado = $_POST["habilitado"];


$sql = "INSERT INTO encuestadores(DNI, ID, USUARIO, CONTRASEÑA, HABILITADO) VALUES ('$dni','$id','$usuario','$contraseña','$habilitado')";

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
