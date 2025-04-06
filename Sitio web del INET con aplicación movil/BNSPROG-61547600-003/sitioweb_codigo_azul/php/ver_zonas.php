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
    die("Error de conexión: " . $conn->connect_error);
}

// Se construye una consulta SQL para seleccionar datos de la tabla "areas"
$sql = "SELECT AREA, PACIENTE, DOCTOR, LLAMADO FROM areas";

// Se ejecuta la consulta SQL
$result = $conn->query($sql);

// Verifica si hubo un error en la consulta o si no se encontraron registros
if ($result !== false && $result->num_rows > 0) {
    // Comienza a imprimir la tabla HTML
    echo "<table>";
    echo "<tr><th>Área</th><th>Paciente</th><th>Doctor</th><th>Llamado</th></tr>"; // Encabezados de la tabla

    // Itera sobre los resultados y muestra cada fila en la tabla HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["AREA"] . "</td>";
        echo "<td>" . $row["PACIENTE"] . "</td>";
        echo "<td>" . $row["DOCTOR"] . "</td>";
        echo "<td>" . $row["LLAMADO"] . "</td>";
        echo "</tr>";
    }

    echo "</table>"; // Cierra la tabla HTML
} else {
    if ($result === false) {
        echo "Error en la consulta SQL."; // Mensaje si hubo un error en la consulta SQL
    } else {
        echo "No se encontraron zonas."; // Mensaje si no se encontraron registros
    }
}

// Cierra la conexión a la base de datos
$conn->close();
?>
