<?php

if(isset($_POST["btnsuper"])){

    $dni = $_POST["dni"];

    $usuario = $_POST["usuario"];

    $contraseña = $_POST["contraseña"];

    $cargo = $_POST["cargo"];


$sql = "INSERT INTO superiores(DNI, USUARIO, CONTRASEÑA, CARGO) VALUES ('$dni','$usuario','$contraseña','$cargo')";

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