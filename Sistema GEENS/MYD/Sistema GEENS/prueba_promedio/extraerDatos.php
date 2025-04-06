<?php
// Conexión a la base de datos
$mysql = new mysqli("localhost", "root", "", "encuestas");

function listadoDeAnimales()
{
    global $mysql;
    $listadoAnimales = array();

    $query2 = "SELECT PREGUNTA_A, NIVEL FROM preguntas GROUP BY PREGUNTA_A";
    $result2 = $mysql->query($query2);

    if ($result2->num_rows > 0) {
        while ($row = $result2->fetch_assoc()) {
            $listadoAnimales[] = $row['PREGUNTA_A'];
        }
    }

    return json_encode($listadoAnimales); // Convertir a JSON para JavaScript
}

function valoresDeNivelesPorEdad() {
    global $mysql;
    $rangos_edades = array("18-25", "26-35", "36-45");
    $niveles = array("Alto", "Medio", "Bajo");
    $data = array();

    foreach ($rangos_edades as $rango) {
        $edad_data = array("Edad" => $rango);
        foreach ($niveles as $nivel) {
            $query = "SELECT COUNT(*) as CANTIDAD FROM preguntas WHERE PREGUNTA_A = '$rango' AND NIVEL = '$nivel'";
            $result = $mysql->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $cantidad = $row['CANTIDAD'];
            } else {
                $cantidad = 0;
            }

            $edad_data[$nivel] = $cantidad;
        }

        $data[] = $edad_data;
    }

    return json_encode($data); // Convertir a JSON para JavaScript
}

function obtenerConocimientoInternet() {
    global $mysql;

    $query = "SELECT NIVEL, PREGUNTA_K, COUNT(*) as CANTIDAD FROM preguntas GROUP BY NIVEL, PREGUNTA_K";
    $result = $mysql->query($query);

    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nivel = $row['NIVEL'];
            $internet = $row['PREGUNTA_K'];
            $cantidad = $row['CANTIDAD'];

            // Crear una estructura de datos adecuada
            $data[] = array(
                "Nivel" => $nivel,
                "Internet" => $internet,
                "Cantidad" => $cantidad
            );
        }
    }

    return json_encode($data);
}

function obtenerConocimientoSiUsaInternet() {
    global $mysql;

    $query = "SELECT NIVEL, PREGUNTA_L, COUNT(*) as CANTIDAD FROM preguntas GROUP BY NIVEL, PREGUNTA_L";
    $result = $mysql->query($query);

    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nivel = $row['NIVEL'];
            $internet = $row['PREGUNTA_L'];
            $cantidad = $row['CANTIDAD'];

            // Crear una estructura de datos adecuada
            $data[] = array(
                "Nivel" => $nivel,
                "Internet" => $internet,
                "Cantidad" => $cantidad
            );
        }
    }

    return json_encode($data);
}

function obtenerConocimientoSegunEdad() {
    global $mysql;

    $rangos_edades = array("18-25", "26-35", "36-45");
    $trabajoLabels = ["Si", "No"]; 
    $data = array();

    foreach ($rangos_edades as $rango) {
        $edad_data = array("Edad" => $rango);
        foreach ($trabajoLabels as $trabajaInternet) {
            $query = "SELECT COUNT(*) as CANTIDAD FROM preguntas WHERE PREGUNTA_A = '$rango' AND PREGUNTA_K = '$trabajaInternet'";
            $result = $mysql->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $cantidad = $row['CANTIDAD'];
            } else {
                $cantidad = 0;
            }

            $edad_data[$trabajaInternet] = $cantidad;
        }

        $data[] = $edad_data;
    }

    return json_encode($data);
}

function obtenerConocimientosUsoCotidiano() {
    global $mysql;

    $rangos_edades = array("18-25", "26-35", "36-45");
    $trabajoLabels = ["Si", "No"]; 
    $data = array();

    foreach ($rangos_edades as $rango) {
        $edad_data = array("Edad" => $rango);
        foreach ($trabajoLabels as $trabajaInternet) {
            $query = "SELECT COUNT(*) as CANTIDAD FROM preguntas WHERE PREGUNTA_A = '$rango' AND PREGUNTA_L = '$trabajaInternet'";
            $result = $mysql->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $cantidad = $row['CANTIDAD'];
            } else {
                $cantidad = 0;
            }

            $edad_data[$trabajaInternet] = $cantidad;
        }

        $data[] = $edad_data;
    }

    return json_encode($data);
}
?>
