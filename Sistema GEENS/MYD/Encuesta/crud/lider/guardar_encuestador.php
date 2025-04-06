<?php
    $ruta = new mysqli ("localhost","root","","encuestas"); 
    $ruta -> set_charset("utf8"); 

        $dni = $_POST['dni'];
        $id = $_POST['id'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $habilitado = $_POST['habilitado'];

        $sql = "INSERT INTO encuestadores (DNI, ID, USUARIO, CONTRASEÑA, HABILITADO) VALUES ('$dni', '$id', '$usuario', 
        '$contraseña', '$habilitado')";

$consulta = mysqli_query($ruta,$sql);


if($consulta) {
    echo"Encuestador subido con exito";
}
else {
    echo "Algo salio mal";
}

header('Location: ../../Lider.php');

mysqli_close($ruta); 

?>
