<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>GENNS|Encuestas</title>
</head>

<body>
    <header>
        <a href="#" class="logo"><img class="log" src="img/GENNS-PhotoRoom.png-PhotoRoom.png" alt=""></i>ENCUESTADOR</a>
        <div class='bx bx-menu' id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="encuestas/encuesta1.php">Encuesta</a></li>
            <li><a href="visualizacion.php">Visualizar</a></li>
        </ul>
        <div class="header-btn">
            <a href="login.php" class="login">Cerrar Sesion</a>
        </div>
    </header>
    <main>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "encuestas";

        $conn = new mysqli($servername, $username, $password, $dbname);

        session_start();

        if (isset($_SESSION['ID'])) {
            $user_id = $_SESSION['ID'];

            $query = "SELECT ID_ENCUESTA, PREGUNTA_A, PREGUNTA_B, PREGUNTA_C,
            PREGUNTA_D, PREGUNTA_E, PREGUNTA_F, PREGUNTA_G, PREGUNTA_H, PREGUNTA_I,
            PREGUNTA_J, PREGUNTA_K, PREGUNTA_L, SEXO, PUNTAJE, NIVEL FROM preguntas WHERE ID_ENCUESTADOR = $user_id";
            $result = $conn->query($query);

            if ($result === false) {
                die("Error en la consulta: " . $conn->error);
            }
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<th>ID</th><th>PREGUNTA_A</th><th>PREGUNTA_B</th><th>PREGUNTA_C</th><th>PREGUNTA_D</th>
                <th>PREGUNTA_E</th><th>PREGUNTA_F</th><th>PREGUNTA_G</th><th>PREGUNTA_H</th><th>PREGUNTA_I</th>
                <th>PREGUNTA_J</th><th>PREGUNTA_K</th><th>PREGUNTA_L</th><th>SEXO</th><th>PUNTAJE</th><th>NIVEL</th>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["ID_ENCUESTA"] . "</td>";
                    echo "<td>" . $row["PREGUNTA_A"] . "</td>";
                    echo "<td>" . $row["PREGUNTA_B"] . "</td>";
                    echo "<td>" . $row["PREGUNTA_C"] . "</td>";
                    echo "<td>" . $row["PREGUNTA_D"] . "</td>";
                    echo "<td>" . $row["PREGUNTA_E"] . "</td>";
                    echo "<td>" . $row["PREGUNTA_F"] . "</td>";
                    echo "<td>" . $row["PREGUNTA_G"] . "</td>";
                    echo "<td>" . $row["PREGUNTA_H"] . "</td>";
                    echo "<td>" . $row["PREGUNTA_I"] . "</td>";
                    echo "<td>" . $row["PREGUNTA_J"] . "</td>";
                    echo "<td>" . $row["PREGUNTA_K"] . "</td>";
                    echo "<td>" . $row["PREGUNTA_L"] . "</td>";
                    echo "<td>" . $row["SEXO"] . "</td>";
                    echo "<td>" . $row["PUNTAJE"] . "</td>";
                    echo "<td>" . $row["NIVEL"] . "</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
        } else {
            echo "No se encontraron encuestas.";
        }
        ?>
    </main>
    <br>

    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logof">
                    <a href="#"><img src="img/GENNS-PhotoRoom.png-PhotoRoom.png" alt=""></a>
                </div>
                <div class="terms">
                    <p></p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Info</h2>
                <a href="#">Empleados</a>
                <a href="#">Nosotros</a>
                <a href="#">Ayuda</a>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Empleo</a>
                <a href="#">Servicios</a>
                <a href="#">Politica y Privacidad</a>
            </div>
            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>
        </div>
    </footer>
    <script src="acciones/js.js"></script>
</body>

</html>
