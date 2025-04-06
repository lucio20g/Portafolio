<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Login</title>
</head>
<body>
<div id="form">

        <h3>Complete los siguientes datos</h3>

        <?php
            include "modelo/conexion.php";    
            include "controlador/controladorlogin.php";
        ?>

        <form action="" method="post" name="form">
        <br>
        <label for="usuario">Usuario</label><br>
        <input type="text" name="usuario" id="usuario"> <br> <br>

        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña"> <br> <br>

        <!-- <label for="cargo">Cargo</label>
        <input type="text" name="cargo" id="cargo"> <br> <br> -->
        <h4>seleccione su cargo</h4>
        <p>si es encuesador con colocar nada</p>
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