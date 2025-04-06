<?php
    $ruta = new mysqli ("localhost","root","","encuestas"); 
    $ruta -> set_charset("utf8"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $cargo = $_POST['cargo'];
    
    $sql = "UPDATE superiores SET DNI = '$dni', USUARIO = '$usuario', CONTRASEÑA = '$contraseña', CARGO = '$cargo' WHERE DNI = $dni";
    
    $consulta = mysqli_query($ruta,$sql);


    if($consulta) {
        echo "Cambios guardados con exito";
    }
    else {
        echo "Algo salio mal";
    }
}   
header('Location: ../../Lider.php');
mysqli_close($ruta); 

?>
