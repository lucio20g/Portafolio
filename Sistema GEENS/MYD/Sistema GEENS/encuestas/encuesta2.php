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
        <a href="../../PP.html" class="logo"><img class="log"
                src="../img/GENNS-PhotoRoom.png-PhotoRoom.png"></i>ENCUESTADOR</a>

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
        <br>
        <form action="encuestas.php" method="post" class="formulario">
            <div class="check">
                <h3 class="sus">- ¿Que edad tiene?</h3>
                <br>
                <div>
                    <section class="radio-section" name="check1">

                        <div class="radio-list">
                            <div class="radio-item">
                                <input type="radio" name="edad" id="radio1" value="18-25">
                                <label for="radio1">De 18 a 25</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" name="edad" id="radio2" value="26-35">
                                <label for="radio2">De 26 a 35</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" name="edad" id="radio3" value="36-45">
                                <label for="radio3">De 36 a 45</label>
                            </div>
                        </div>
                </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <h3 class="sus">- ¿Usted utiliza antivirus?</h3>
            <br>
            <div>
                <section class="radio-section">

                    <div class="radio-list">
                        <div class="radio-item">
                            <input type="radio" name="antivirus" id="radio4" value="26">
                            <label for="radio4">Si</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="antivirus" id="radio5" value="0">
                            <label for="radio5">No</label>
                        </div>
                    </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <h3 class="sus">- ¿Cual de los siguientes virus conoce? (Selecciones todas las opciones correctas)</h3>
            <br>
            <div>
                <section class="check-section">

                    <div class="check-list">
                        <div class="check-item">
                            <input type="checkbox" name="virus" id="check1" value="4">
                            <label for="check1">Gusanos</label>
                        </div>
                        <div class="check-item">
                            <input type="checkbox" name="virus2" id="check2" value="4">
                            <label for="check2">Troyanos</label>
                        </div>
                        <div class="check-item">
                            <input type="checkbox" name="virus3" id="check3" value="4">
                            <label for="check3">Pop Ups</label>
                        </div>
                        <div class="check-item">
                            <input type="checkbox" name="virus4" id="check4" value="4">
                            <label for="check4">Otros</label>
                        </div>
                        <div class="check-item">
                            <input type="checkbox" name="virus5" id="check5" value="0">
                            <label for="check5">NS/Ninguno de los anteriores</label>
                        </div>
                    </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <h3 class="sus">- ¿En cuál de las siguientes acciones usted toma recaudos para no contraer virus? (Selecciones todas las opciones correctas)</h3>
            <br>
            <div>
                <section class="check-section">

                    <div class="check-list">
                        <div class="check-item">
                            <input type="checkbox" name="seguridad" id="check6" value="4">
                            <label for="check6">Descargas de Internet</label>
                        </div>
                        <div class="check-item">
                            <input type="checkbox" name="seguridad2" id="check7" value="4">
                            <label for="check7">Conectar Celulares, pen-driver, MP3 u otras unidades de memorias a la PC</label>
                        </div>
                        <div class="check-item">
                            <input type="checkbox" name="seguridad3" id="check8" value="4">
                            <label for="check8">Al abrir Mails</label>
                        </div>
                        <div class="check-item">
                            <input type="checkbox" name="seguridad4" id="check9" value="0">
                            <label for="check9">NS/Ninguno de los anteriores</label>
                        </div>
                    </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <h3 class="sus">- ¿Suele utilizar la misma clave para distintas cuentas?</h3>
            <br>
            <div>
                <section class="radio-section">

                    <div class="radio-list">
                        <div class="radio-item">
                            <input type="radio" name="clave" id="radio6" value="12">
                            <label for="radio6">Nunca</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="clave" id="radio7" value="5">
                            <label for="radio7">A veces</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="clave" id="radio8" value="2">
                            <label for="radio8">Muchas Veces</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="clave" id="radio9" value="0">
                            <label for="radio9">Siempre</label>
                        </div>
                    </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <h3 class="sus">- ¿Suele utilizar información personal para sus claves?</h3>
            <br>
            <div>
                <section class="radio-section">

                    <div class="radio-list">
                        <div class="radio-item">
                            <input type="radio" name="info" id="radio10" value="15">
                            <label for="radio10">Nunca</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="info" id="radio11" value="10">
                            <label for="radio11">A veces</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="info" id="radio12" value="5">
                            <label for="radio12">Muchas Veces</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="info" id="radio13" value="0">
                            <label for="radio13">Siempre</label>
                        </div>
                    </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <h3 class="sus">- ¿Comparte claves con alguna otra persona?</h3>
            <br>
            <div>
                <section class="radio-section">

                    <div class="radio-list">
                        <div class="radio-item">
                            <input type="radio" name="comp" id="radio14" value="0">
                            <label for="radio14">Si</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="comp" id="radio15" value="5">
                            <label for="radio15">No</label>
                        </div>
                    </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <h3 class="sus">- ¿Cambia sus claves mensualmente?</h3>
            <br>
            <div>
                <section class="radio-section">

                    <div class="radio-list">
                        <div class="radio-item">
                            <input type="radio" name="cambio" id="radio16" value="5">
                            <label for="radio16">Si</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="cambio" id="radio17" value="0">
                            <label for="radio17">No</label>
                        </div>
                    </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <h3 class="sus">- Para usted ¿Qué considera que es un cortafuego o firewall?</h3>
            <br>
            <div>
                <section class="radio-section">

                    <div class="radio-list">
                        <div class="radio-item">
                            <input type="radio" name="firewall" id="radio18" value="0">
                            <label for="radio18">Un software que sirve para mejorar el rendimiento de la PC.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="firewall" id="radio19" value="0">
                            <label for="radio19">Un software que sirve para bloquear páginas web.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="firewall" id="radio20" value="4">
                            <label for="radio20">Un software que sirve para bloquear el acceso no autorizado a la PC</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="firewall" id="radio21" value="0">
                            <label for="radio21">No sabe</label>
                        </div>
                    </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <h3 class="sus">- ¿Cuenta con algún cortafuego independientemente del que provee Windows o el sistema operativo que utilice?</h3>
            <br>
            <div>
                <section class="radio-section">

                    <div class="radio-list">
                        <div class="radio-item">
                            <input type="radio" name="cortafuego" id="radio22" value="5">
                            <label for="radio22">Si</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="cortafuego" id="radio23" value="0">
                            <label for="radio23">No</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="cortafuego" id="radio24" value="0">
                            <label for="radio24">NS/NC</label>
                        </div>
                        
                    </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <h3 class="sus">- ¿Utiliza Internet al menos una vez al día?</h3>
            <br>
            <div>
                <section class="radio-section">

                    <div class="radio-list">
                        <div class="radio-item">
                            <input type="radio" name="dia" id="radio25" value="Si">
                            <label for="radio25">Si</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="dia" id="radio26" value="No">
                            <label for="radio26">No</label>
                        </div>
                        
                    </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <h3 class="sus">- ¿Utiliza Internet como herramienta de trabajo?</h3>
            <br>
            <div>
                <section class="radio-section">

                    <div class="radio-list">
                        <div class="radio-item">
                            <input type="radio" name="trabajo" id="radio27" value="Si">
                            <label for="radio27">Si</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="trabajo" id="radio28" value="No">
                            <label for="radio28">No</label>
                        </div>
                       
                    </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <h3 class="sus">- Sexo</h3>
            <br>
            <div>
                <section class="radio-section">

                    <div class="radio-list">
                        <div class="radio-item">
                            <input type="radio" name="sexo" id="radio29" value="M">
                            <label for="radio29">Masculino</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="sexo" id="radio30" value="F">
                            <label for="radio30">Femenino</label>
                        </div>
                    </div>
                </section>
            </div>
            </div>
            <input type="submit" value="Guardar respuestas">
</form>
            <br>
            <br>
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