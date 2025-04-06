<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <title>GENNS|Modificar</title>
</head>
<body>

<?php
            include "Controlador/script.php";    
        ?>
    <header>
        <a href="encuestador.php" class="logo"><img class="log" src="img/GENNS-PhotoRoom.png-PhotoRoom.png" alt=""></i>ENCUESTADOR</a>

        <div class='bx bx-menu' id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="encuestas/encuesta1.php">Encuesta</a></li>  
            <li><a href="visualizacion.php">Visualizar</a></li>
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

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            
            $query = "SELECT ID_ENCUESTA, PREGUNTA_A, PREGUNTA_B, PREGUNTA_C,
            PREGUNTA_D, PREGUNTA_E, PREGUNTA_F, PREGUNTA_G, PREGUNTA_H,
            PREGUNTA_I, PREGUNTA_J, PREGUNTA_K, PREGUNTA_L, SEXO, PUNTAJE, NIVEL FROM preguntas WHERE ID_ENCUESTA = $id";
            $result = $conn->query($query);
            
            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $id = $row["ID_ENCUESTA"];
                $PREGUNTA_A = $row['PREGUNTA_A'];
                $PREGUNTA_B = $row['PREGUNTA_B'];
                $PREGUNTA_C = $row['PREGUNTA_C'];
                $PREGUNTA_D = $row['PREGUNTA_D'];
                $PREGUNTA_E = $row['PREGUNTA_E'];
                $PREGUNTA_F = $row['PREGUNTA_F'];
                $PREGUNTA_G = $row['PREGUNTA_G'];
                $PREGUNTA_H = $row['PREGUNTA_H'];
                $PREGUNTA_I = $row['PREGUNTA_I'];
                $PREGUNTA_J = $row['PREGUNTA_J'];
                $PREGUNTA_K = $row['PREGUNTA_K'];
                $PREGUNTA_L = $row['PREGUNTA_L'];
                $SEXO = $row['SEXO'];
                $PUNTAJE = $row['PUNTAJE'];
                $NIVEL = $row['NIVEL'];
            }
        }
    ?>
    <h1>Modifique los datos de la encuesta</h1>
    <form action="guardarPuntajeNuevo.php" method="POST">
        <label for="id">ID:</label>
        <input type="text" name="id" value="<?php echo $id; ?>" readonly>
        <br>
        <label for="pa">PREGUNTA_A:</label>
        <input type="text" name="edad" value="<?php echo $PREGUNTA_A; ?>" readonly>
        <select name="edad" id="edad">
                <option value="18-25">18-25</option>
                <option value="26-35">26-35</option>
                <option value="36-45">36-45</option>
        </select>
        <br>
        <label for="pb">PREGUNTA_B:</label>
        <input type="text" name="pb" value="<?php echo $PREGUNTA_B; ?>" readonly>
        <select name="pb" id="pb">
                <option value="26">26</option>
                <option value="0">0</option>
        </select>
        <br>
        <label for="pc">PREGUNTA_C:</label>
        <input type="text" name="pc" value="<?php echo $PREGUNTA_C; ?>" readonly>
        <select name="pc" id="pc">
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="12">12</option>
                <option value="16">16</option>
                <option value="0">0</option>
        </select>
        <br>
        <label for="pd">PREGUNTA_D:</label>
        <input type="text" name="pd" value="<?php echo $PREGUNTA_D; ?>" readonly>
        <select name="pd" id="pd">
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="12">12</option>
                <option value="0">0</option>
        </select>
        <br>
        <label for="pe">PREGUNTA_E:</label>
        <input type="text" name="pe" value="<?php echo $PREGUNTA_E; ?>" readonly>
        <select name="pe" id="pe">
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="12">12</option>
                <option value="0">0</option>
        </select>
        <br>
        <label for="pf">PREGUNTA_F:</label>
        <input type="text" name="pf" value="<?php echo $PREGUNTA_F; ?>" readonly>
        <select name="pf" id="pf">
                <option value="15">15</option>
                <option value="5">5</option>
                <option value="2">2</option>
                <option value="0">0</option>
        </select>
        <br>
        <label for="pg">PREGUNTA_G:</label>
        <input type="text" name="pg" value="<?php echo $PREGUNTA_G; ?>" readonly>
        <select name="pg" id="pg">
                <option value="5">5</option>
                <option value="0">0</option>
        </select>
        <br>
        <label for="ph">PREGUNTA_H:</label>
        <input type="text" name="ph" value="<?php echo $PREGUNTA_H; ?>" readonly>
        <select name="ph" id="ph">
                <option value="5">5</option>
                <option value="0">0</option>
        </select>
        <br>
        <label for="pi">PREGUNTA_I:</label>
        <input type="text" name="pi" value="<?php echo $PREGUNTA_I; ?>" readonly>
        <select name="pi" id="pi">
                <option value="4">4</option>
                <option value="0">0</option>
        </select>
        <br>
        <label for="pj">PREGUNTA_J:</label>
        <input type="text" name="pj" value="<?php echo $PREGUNTA_J; ?>" readonly>
        <select name="pj" id="pj">
                <option value="5">5</option>
                <option value="0">0</option>
        </select>
        <br>
        <label for="pk">PREGUNTA_K:</label>
        <input type="text" name="pk" value="<?php echo $PREGUNTA_K; ?>" readonly>
        <select name="pk" id="pk">
                <option value="Si">Si</option>
                <option value="No">No</option>
        </select>
        <br>
        <label for="pl">PREGUNTA_L:</label>
        <input type="text" name="pl" value="<?php echo $PREGUNTA_L; ?>" readonly>
        <select name="pl" id="pl">
                <option value="Si">Si</option>
                <option value="No">No</option>
        </select>
        <br>
        <label for="sexo">SEXO:</label>
        <input type="text" name="sexo" value="<?php echo $SEXO; ?>" readonly>
        <select name="sexo" id="sexo">
                <option value="M">M</option>
                <option value="F">F</option>
        </select>
        <br>
        <label for="puntaje">PUNTAJE:</label>
        <input type="text" name="puntaje" value="<?php echo $PUNTAJE; ?>" readonly>
        <br>
        <label for="nivel">NIVEL:</label>
        <input type="text" name="nivel" value="<?php echo $NIVEL; ?>" readonly>
        <br>
        <input type="submit" value="Guardar Cambios">
        <br>
    </form>
    </main>
    <br>

    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logof">
                    <a href="index.php"><img src="img/GENNS-PhotoRoom.png-PhotoRoom.png" alt=""></a>
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