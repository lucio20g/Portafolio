<?php
$ruta = new mysqli ("localhost","root","","encuestas"); 
$ruta -> set_charset("utf8");

$id = $_POST['id'];

$sql = "DELETE FROM preguntas WHERE ID_ENCUESTA = '$id' ";

$consulta = mysqli_query($ruta,$sql);


if($consulta) {
    echo"Encuestador eliminado con exito";
}
else {
    echo "Algo salio mal revise los campos";
}

header('Location: Encuestador.php');

mysqli_close($ruta); 
?>