<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/style.css">
    <link rel="stylesheet" href=".css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>GENNS|Superiores</title>
</head>

<body>

    <header>
        <a href="../../Lider.php" class="logo"><img class="log" src="../../img/GENNS-PhotoRoom.png-PhotoRoom.png" alt=""></i>Lider</a>

        <div class='bx bx-menu' id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="superiores.php">Superiores</a></li>
            <li><a href="formularioE.php">Encuestadores</a></li>
        </ul>

        <div class="header-btn">
            <a href="index.php" class="login">Cerrar Sesion</a>
        </div>

    </header>
    <main>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "encuestas";
    
            $conn = new mysqli($servername, $username, $password, $dbname);

            $query = "SELECT * FROM superiores";
            $result = $conn->query($query);

            if ($result === false) {
                die("Error en la consulta: " . $conn->error);
            }
            if ($result->num_rows > 0){
                echo "<table border='3px solid';>";
                echo "<th>DNI</th><th>USUARIO</th><th>CONTRASEÑA</th><th>CARGO</th>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["DNI"] . "</td>";
                    echo "<td>" . $row["USUARIO"] . "</td>";
                    echo "<td>" . $row["CONTRASEÑA"] . "</td>";
                    echo "<td>" . $row["CARGO"] . "</td>";
                    echo "<td><a href='modificarCargo.php?dni=" . $row['DNI'] . "'><button>Modificar</button></a></td>";
                    echo "<td>" ."<a href='eliminarCargo.php'><button>Eliminar</button></a>" . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
        } else {
            echo "No se encontraron Superiores.";
        }
        ?>
    <a href="agregarCargo.php"><button type="button">Agregar</button></a>
    </main>
    <br>

    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logof">
                    <a href="Supervisor"><img src="img/GENNS-PhotoRoom.png-PhotoRoom.png" alt=""></a>
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