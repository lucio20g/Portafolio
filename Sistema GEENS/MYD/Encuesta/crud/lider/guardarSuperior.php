<?php
    $ruta = new mysqli ("localhost","root","","encuestas"); 
    $ruta -> set_charset("utf8"); 

        $dni = $_POST['dni'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $cargo = $_POST['cargo'];

    $sql = "INSERT INTO superiores (DNI, USUARIO, CONTRASEÑA, CARGO) VALUES ('$dni', '$usuario', '$contraseña', 
    '$cargo')";

$consulta = mysqli_query($ruta,$sql);


if ($consulta) {
    echo "Superior subido con éxito";
} else {
    echo "Error al subir superior: " . mysqli_error($ruta);
}


header('Location: ../../Lider.php');

mysqli_close($ruta); 

?>
