<?php
$ruta = new mysqli ("localhost","root","","encuestas"); 
$ruta -> set_charset("utf8");

$id = $_POST['id'];

$sql = "DELETE FROM encuestadores WHERE ID = '$id' ";

$consulta = mysqli_query($ruta,$sql);


if($consulta) {
    echo"Encuestador eliminado con exito";
}
else {
    echo "Algo salio mal revise los campos";
}

header('Location: ../../Supervisor.php');

mysqli_close($ruta); 
?>