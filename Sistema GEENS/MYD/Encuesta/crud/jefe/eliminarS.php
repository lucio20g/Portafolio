<?php
$ruta = new mysqli ("localhost","root","","encuestas"); 
$ruta -> set_charset("utf8");

$dni = $_POST['dni'];


$sql = "DELETE FROM superiores WHERE DNI = '$dni' ";

$consulta = mysqli_query($ruta,$sql);


if($consulta) {
    echo"Supervisor eliminado con exito";
}
else {
    echo "Algo salio mal revise los campos";
}

header('Location: ../../JefeProyecto.php');

mysqli_close($ruta); 
?>