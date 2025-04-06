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
$usuario = $_POST["Usuario"];
$contraseña = $_POST["Contraseña"];
$repitaContraseña = $_POST["repitaContraseña"];
$rol = $_POST["rol"];

// Se verifica si la contraseña y su repetición coinciden
if ($contraseña !== $repitaContraseña) {
    die("La contraseña y su repetición no coinciden. Vuelve a intentarlo.");
}

// Se construye una consulta SQL para insertar los datos en la tabla "usuarios" de la base de datos
$sql = "INSERT INTO usuarios (USUARIO, CONTRASEÑA, rol) VALUES ('$usuario', '$contraseña', '$rol')";

// Se ejecuta la consulta SQL y se verifica si el registro fue exitoso
if ($conn->query($sql) === TRUE) {
    // Si la inserción fue exitosa, redirige al usuario a la página altaUsuario.html
    header("Location: ../paginas/altaUsuarios.html");
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
