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
        <h1>Confirme ID de la encuesta a eliminar</h1>
        <form method="POST" action="borrarEncuesta.php">
            <label for="id">ID:</label>
            <input type="text" name="id" required>
            <input type="submit" value="Eliminar encuesta">
        </form>
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