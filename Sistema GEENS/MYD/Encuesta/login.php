<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/sas.css">
    <title>Login</title>
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

    </header>
<div id="form">

        <h3>Complete los siguientes datos</h3>

        <?php
            include "modelo/conexion.php";    
            include "controlador/controladorlogin.php";
        ?>

        <form action="" method="post" name="form">
        <br>
        <label for="usuario">Usuario</label><br>
        <input type="text" name="usuario" id="usuario" required> <br> <br>

        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" requered> <br> <br>

        <!-- <label for="cargo">Cargo</label>
        <input type="text" name="cargo" id="cargo"> <br> <br> -->
        <h4>Seleccione su cargo</h4><br>
        <select name="cargo" id="cargo">
        <option value="encuestador">Encuestador</option>
            <option value="Lider">Líder</option>
            <option value="JefeProyecto">Jefe de proyecto</option>
            <option value="Supervisor">Supervisor</option>
        </select>
        <br>
        <br>
        

        <input type="submit" value="Ingresar" name="ingresar" class="btn">
        </form>
    </div>
</body>
</html>