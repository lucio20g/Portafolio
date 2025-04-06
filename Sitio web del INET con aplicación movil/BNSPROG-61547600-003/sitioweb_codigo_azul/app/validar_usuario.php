<?php
include 'conexion.php';
$email=$_POST['email'];
$password=$_POST['password'];

//$email="luciogauna2468@gmailcom";
//$password="3223papa";

$sentencia=$conexion->prepare("SELECT * FROM usuarios WHERE email=? AND password=?");
$sentencia->bind_param('ss',$email,$password);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
}
$sentencia->close();
$conexion->close();
?>