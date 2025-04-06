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
    <title>GENNS|Contacto</title>
</head>
<body>

    <header>
        <a href="index.php" class="logo"><img class="log" src="img/GENNS-PhotoRoom.png-PhotoRoom.png" alt=""></i>GENNS</a>

        <div class='bx bx-menu' id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="promedio.php">Promedios</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>

        <div class="header-btn">
            <a href="login.php" class="login">Iniciar Sesion</a>
        </div>

    </header>
    <main>
        <br>
        <br>
        <div class="content">

<div class="contact-wrapper animated bounceInUp">
    <div class="contact-form">
        <h3>Contactanos</h3>
        <form action="">
            <p>
                <label>Nombre Completo</label>
                <input type="text" name="fullname">
            </p>
            <p>
                <label>Email</label>
                <input type="email" name="email">
            </p>
            <p>
                <label>telefono</label>
                <input type="tel" name="phone">
            </p>
            <p>
                <label>Asunto</label>
                <input type="text" name="affair">
            </p>
            <p class="block">
               <label>Mensaje</label> 
                <textarea name="message" rows="3"></textarea>
            </p>
            <p class="block">
                <button>
                    Enviar
                </button>
            </p>
        </form>
    </div>
    <div class="contact-info">
        <h4>Mas info</h4>
        <ul>
            <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
            <br>
            <li><i class="fas fa-envelope-open-text"></i> genns@gmail.com</li>
        </ul>
        
    </div>
</div>

</div>
        <br>
        <br>
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