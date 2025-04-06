<?php
include 'conexion.php';

// Realizar la consulta a la tabla 'reportes'
$consulta = "SELECT * FROM reportes";
$resultado = mysqli_query($conexion, $consulta);

// Crear un array para almacenar los resultados
$reportes = array();

while ($fila = mysqli_fetch_assoc($resultado)) {
    $reportes[] = $fila;
}

// Devolver los resultados en formato JSON
echo json_encode($reportes);

// Cerrar la conexión
mysqli_close($conexion);
?>
