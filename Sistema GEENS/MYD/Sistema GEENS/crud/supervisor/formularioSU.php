<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/formularioE.css">
    <title>encuestadores</title>
</head>
<body>
<div class="formulario">
<form action="" method="post">
    <br><br>
    <label for="">DNI:</label><br>
    <input type="number" name="dni" class="ingresos">
    <br><br>
    <label for="">Usuario:</label><br>
    <input type="text" name="usuario" class="ingresos">
    <br><br>
    <label for="">Contraseña:</label><br>
    <input type="text" name="contraseña" class="ingresos">
    <br><br>
    <label for="">Cargo</label><br>
    <select name="cargo" id="cargo">
        <option value="supervisor">Supervisor</option>
    </select>
    <br>
    <br>
    <div class="botones">
    <input type="submit" name="btnsuper" value="Ingresar">
    <input type="submit" name="btnmodificasuper" value="Modificar">
    <input type="submit" name="btnBorrarSuper" value="Borrar">
    </div>
</form>
</div>

<?php
    include "../../modelo/Conexion.php";
    include "registroSU.php";
    include "modificarSU.php";
    include "borrarSU.php";
?>

</body>
</html>