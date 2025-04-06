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

// Se construye una consulta SQL para seleccionar datos de la tabla "usuarios"
$sql = "SELECT USUARIO, ROL FROM usuarios";

// Se ejecuta la consulta SQL
$result = $conn->query($sql);

// Verifica si hubo un error en la consulta o si no se encontraron registros
if ($result->num_rows > 0) {
    // Comienza a imprimir la tabla HTML
    echo "<table>";
    echo "<tr><th>Usuario</th><th>Rol</th></tr>"; // Encabezados de la tabla

    // Itera sobre los resultados y muestra cada fila en la tabla HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["USUARIO"] . "</td>";
        echo "<td>" . $row["ROL"] . "</td>";
        echo "</tr>";
    }

    echo "</table>"; // Cierra la tabla HTML
} else {
    echo "No se encontraron usuarios."; // Mensaje si no se encontraron registros
}

// Cierra la conexión a la base de datos
$conn->close();
?>
