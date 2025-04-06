<?php
    $ruta = new mysqli ("localhost","root","","encuestas"); 
    $ruta -> set_charset("utf8"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $dni = $_POST['dni'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $habilitado = $_POST['habilitado'];
    
    $sql = "UPDATE encuestadores SET DNI = '$dni', USUARIO = '$usuario', CONTRASEÑA = '$contraseña', HABILITADO = '$habilitado' WHERE ID = $id";
    
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
