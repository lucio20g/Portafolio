<?php
    $ruta = new mysqli ("localhost","root","","encuestas"); 
    $ruta -> set_charset("utf8"); 

        $dni = $_POST['dni'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $cargo = "Supervisor";

        $sql = "INSERT INTO superiores (DNI, USUARIO, CONTRASEÑA, CARGO) VALUES ('$dni', '$usuario', '$contraseña', '$cargo')";

$consulta = mysqli_query($ruta,$sql);


if($consulta) {
    echo "Supervisor subido con exito";
}
else {
    echo "Algo salio mal";
}

header('Location: ../../JefeProyecto.php');

mysqli_close($ruta); 

?>
