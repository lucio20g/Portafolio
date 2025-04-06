<?php
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

// Se realiza una consulta SQL para seleccionar datos de la tabla "enfermeros"
$query = "SELECT DNI, NOMBRE, APELLIDO, OCUPACION, LOCALIDAD, GENERO FROM enfermeros";

// Se ejecuta la consulta SQL
$result = $conn->query($query);

// Verifica si hubo un error en la consulta
if ($result === false) {
    die("Error en la consulta: " . $conn->error);
}

// Si se encontraron registros en la consulta
if ($result->num_rows > 0) {
    echo "<table>"; // Comienza una tabla HTML
    echo "<tr><th>DNI</th><th>Nombre</th><th>Apellido</th><th>Ocupación</th><th>Localidad</th><th>Género</th></tr>"; // Encabezados de la tabla

    // Itera sobre los resultados y muestra cada fila en la tabla HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["DNI"] . "</td>";
        echo "<td>" . $row["NOMBRE"] . "</td>";
        echo "<td>" . $row["APELLIDO"] . "</td>";
        echo "<td>" . $row["OCUPACION"] . "</td>";
        echo "<td>" . $row["LOCALIDAD"] . "</td>";
        echo "<td>" . $row["GENERO"] . "</td>";
        echo "</tr>";
    }

    echo "</table>"; // Cierra la tabla HTML
} else {
    echo "No se encontraron enfermeros."; // Mensaje si no se encontraron registros
}

// Cierra la conexión a la base de datos
$conn->close();
?>
