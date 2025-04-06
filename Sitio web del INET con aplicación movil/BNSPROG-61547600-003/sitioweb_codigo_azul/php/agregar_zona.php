<?php
// Inicia una sesión PHP. Esto se usa para trabajar con variables de sesión.
session_start();

// Variables de configuración de la base de datos
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "root";        // Nombre de usuario para la base de datos
$password = "";            // Contraseña de la base de datos
$dbname = "clinica";       // Nombre de la base de datos a la que se conectará

// Se crea una nueva instancia de la clase mysqli para establecer la conexión con la base de datos.
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión a la base de datos fue exitosa o no
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Se obtienen los datos del formulario HTML enviados por el método POST y se almacenan en variables
$area = $_POST["Area"];
$paciente = $_POST["Paciente"];
$doctor = $_POST["Doctor"];
$llamado = $_POST["Llamado"];

// Se construye una consulta SQL para insertar los datos en la tabla "areas" de la base de datos
$sql = "INSERT INTO areas (AREA, PACIENTE, DOCTOR, LLAMADO) VALUES ('$area', '$paciente', '$doctor', '$llamado')";

// Se ejecuta la consulta SQL y se verifica si la inserción fue exitosa
if ($conn->query($sql) === TRUE) {
    // Si la inserción fue exitosa, redirige al usuario a la página altaZonas.html
    // Además, muestra un mensaje de éxito en la página.
    header("Location: ../paginas/altaZonas.html");
    echo "Se agregó con éxito";
    exit(); // Detiene la ejecución del script
} else {
    // Si hubo un error en la inserción, muestra un mensaje de error en la página.
    echo "Error al agregar el área/zona: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
