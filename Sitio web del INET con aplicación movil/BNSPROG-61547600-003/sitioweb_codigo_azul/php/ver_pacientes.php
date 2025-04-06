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

// Se construye una consulta SQL para seleccionar datos de la tabla "paciente"
$sql = "SELECT DNI, NOMBRE, APELLIDO, LOCALIDAD, OBRA_SOCIAL, NUM_OBRA, ZONA, ENFERMERO FROM paciente";

// Se ejecuta la consulta SQL
$result = $conn->query($sql);

// Verifica si hubo un error en la consulta o si no se encontraron registros
if ($result !== false && $result->num_rows > 0) {
    echo "<table>"; // Comienza una tabla HTML
    echo "<tr><th>DNI</th><th>Nombre</th><th>Apellido</th><th>Localidad</th><th>Obra Social</th><th>Número de Obra</th><th>Zona</th><th>Enfermero</th></tr>"; // Encabezados de la tabla

    // Itera sobre los resultados y muestra cada fila en la tabla HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["DNI"] . "</td>";
        echo "<td>" . $row["NOMBRE"] . "</td>";
        echo "<td>" . $row["APELLIDO"] . "</td>";
        echo "<td>" . $row["LOCALIDAD"] . "</td>";
        echo "<td>" . $row["OBRA_SOCIAL"] . "</td>";
        echo "<td>" . $row["NUM_OBRA"] . "</td>";
        echo "<td>" . $row["ZONA"] . "</td>";
        echo "<td>" . $row["ENFERMERO"] . "</td>";
        echo "</tr>";
    }

    echo "</table>"; // Cierra la tabla HTML
} else {
    if ($result === false) {
        echo "Error en la consulta SQL."; // Mensaje si hubo un error en la consulta SQL
    } else {
        echo "No se encontraron pacientes."; // Mensaje si no se encontraron registros
    }
}

// Cierra la conexión a la base de datos
$conn->close();
?>
