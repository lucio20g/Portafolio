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
$localidad = $_POST["Localidad"];
$obra_social = $_POST["Obra_Social"];
$numero_obra = $_POST["Numero_Obra"];
$ubicacion = $_POST["Ubicacion"];
$enfermero = $_POST["Enfermero"];

// Se construye una consulta SQL para insertar los datos en la tabla "paciente" de la base de datos
$sql = "INSERT INTO paciente (DNI, NOMBRE, APELLIDO, LOCALIDAD, OBRA_SOCIAL, NUM_OBRA, ZONA, ENFERMERO) VALUES ('$dni', '$nombre', '$apellido', '$localidad', '$obra_social', '$numero_obra', '$ubicacion', '$enfermero')";

// Se ejecuta la consulta SQL y se verifica si la inserción fue exitosa
if ($conn->query($sql) === TRUE) {
    // Si la inserción fue exitosa, redirige al usuario a la página pacientesUsuario.html
    header("Location: ../paginas/pacientesUsuario.html");
    exit(); // Detiene la ejecución del script
} else {
    // Si hubo un error en la inserción, muestra un mensaje de error en la página actual.
    echo "Error al agregar el paciente: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
