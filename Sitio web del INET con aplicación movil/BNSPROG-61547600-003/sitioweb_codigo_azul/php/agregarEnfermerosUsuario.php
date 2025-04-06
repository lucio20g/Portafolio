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
$dni = $_POST["DNI"];
$nombre = $_POST["Nombre"];
$apellido = $_POST["Apellido"];
$ocupacion = $_POST["Ocupacion"];
$localidad = $_POST["Localidad"];
$genero = $_POST["Genero"];

// Se construye una consulta SQL para insertar los datos en la tabla "enfermeros" de la base de datos
$sql = "INSERT INTO enfermeros (DNI, NOMBRE, APELLIDO, OCUPACION, LOCALIDAD, GENERO) VALUES ('$dni', '$nombre', '$apellido', '$ocupacion', '$localidad', '$genero')";

// Se ejecuta la consulta SQL y se verifica si la inserción fue exitosa
if ($conn->query($sql) === TRUE) {
    // Si la inserción fue exitosa, redirige al usuario a la página enfermerosUsuario.html
    header("Location: ../paginas/enfermerosUsuario.html");
    exit(); // Detiene la ejecución del script
} else {
    // Si hubo un error en la inserción, muestra un mensaje de error en la página actual.
    echo "Error al agregar el enfermero: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
