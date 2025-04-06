<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/encuestas.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>GENNS|Encuesta</title>
</head>

<body>

    <header>
        <a href="../../PP.html" class="logo"><img class="log" src="../img/GENNS-PhotoRoom.png-PhotoRoom.png"></i>ENCUESTADOR</a>

        <div class='bx bx-menu' id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="../encuestador.php">Inicio</a></li>
            <li><a href="#">Visualizar</a></li>
        </ul>

        <div class="header-btn">
            <a href="../login.php" class="login">Cerrar Sesion</a>
        </div>

    </header>
    <main>
        <br>
        <br>
        <h1 class="en">Encuesta</h1>
        <br>
        <br>
        <br>
        <br>
        <h2>Preguntas de Seleccion</h2>
        <br>
        <br>
        <form action="" method="post" class="formulario">
            <div class="radio">
                <h3 class="sus">- ¿Vive en el partido de Lomas de Zamora?</h3>
                <br>
                <div>
                    <section class="radio-section" name="pregunta1">

                        <div class="radio-list">
                          <div class="radio-item">
                            <input type="radio" name="radioa" id="radio1">
                            <label for="radio1">Si</label>
                          </div>
                          <div class="radio-item">
                            <input type="radio" name="radioa" id="radio2">
                            <label for="radio2">No</label>
                          </div>
                          </div>
                        </div>
                      </section>
                </div>
                <br>
                <br>
                <br>
                <h3  class="sus">- ¿Tiene acceso a la web?</h3>
                <br>
                <div>
                    <section class="radio-section" name="pregunta2">

                        <div class="radio-list">
                          <div class="radio-item">
                            <input type="radio" name="radio2" id="radio3">
                            <label for="radio3">Si</label>
                          </div>
                          <div class="radio-item">
                            <input type="radio" name="radio2" id="radio4">
                            <label for="radio4">No</label>
                          </div>
                        </div>
                      </section>
                </div>
                <br>
                <br>
                <br>
                <h3  class="sus">- ¿Tiene entre 18 y 45 años?</h3>
                <br>
                <div>
                    <section class="radio-section" name="pregunta3">

                        <div class="radio-list">
                          <div class="radio-item">
                            <input type="radio" name="radio3" id="radio5">
                            <label for="radio5">Si</label>
                          </div>
                          <div class="radio-item">
                            <input type="radio" name="radio3" id="radio6">
                            <label for="radio6">No</label>
                          </div>
                        </div>
                      </section>
                </div>
            </div>

            <br>
            <br>
            <a href="encuesta2.php"><button type="button">Siguiente</button></a>
    </form>
    </main>
    <br>

    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logof">
                    <a href="#"><img src="../img/GENNS-PhotoRoom.png-PhotoRoom.png" alt=""></a>
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

    <script src="../../acciones/js.js"></script>
</body>

</html>