<?php
// Inicia una sesión PHP para trabajar con variables de sesión.
session_start();

// Variables de configuración de la base de datos
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "id21488114_dbclinica";        // Nombre de usuario para la base de datos
$password = "3223bocaR-";            // Contraseña de la base de datos
$dbname = "id21488114_dbclinica";       // Nombre de la base de datos a la que se conectará

// Se crea una nueva instancia de la clase mysqli para establecer la conexión con la base de datos.
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión a la base de datos fue exitosa o no
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Obtiene el usuario y contraseña del formulario HTML enviado por el método POST
$usuario = $_POST["Usuarios"];
$contraseña = $_POST["Contraseña"];

// Se construye una consulta SQL para buscar al usuario en la base de datos.
$sql = "SELECT ID_USUARIOS, rol FROM usuarios WHERE USUARIO = '$usuario' AND CONTRASEÑA = '$contraseña'";

// Se ejecuta la consulta SQL
$result = $conn->query($sql);

// Verifica si hubo un error en la consulta
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}

// Verifica si se encontró algún resultado (usuario)
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["usuario_id"] = $row["id"];
    $_SESSION["rol"] = $row["rol"];

    // Redirige al usuario a la página correspondiente según su rol
    if ($_SESSION["rol"] == "administrador") {
        header("Location: ../paginas/admin.html");
    } else {
        header("Location: ../paginas/usuario.html");
    }
} else {
    // No se encontró un usuario con las credenciales proporcionadas
    echo "Inicio de sesión fallido. Verifica tus credenciales.";
}

// Cierra la conexión a la base de datos
$conn->close();
?>
