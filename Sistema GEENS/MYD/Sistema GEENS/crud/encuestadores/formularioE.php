<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/formularioE.css">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>encuestadores</title>
</head>
<body>
<div class="formulario">
<form action="" method="post">
    <br><br>
    <label for="">DNI:</label><br>
    <input type="number" name="dni" class="ingresos">
    <br><br>
    <label for="">ID</label><br>
    <input type="number" name="id" class="ingresos">
    <br><br>
    <label for="">Usuario:</label><br>
    <input type="text" name="usuario" class="ingresos">
    <br><br>
    <label for="">Contraseña:</label><br>
    <input type="text" name="contraseña" class="ingresos">
    <br><br>
    <label for="">Habilitado</label><br>
    <input type="text" name="habilitado" class="ingresos">
    <br>
    <br>
    <div class="botones">
    <input type="submit" name="btnEncuestadores" value="Ingresar">
    <input type="submit" name="btnmodificarusuario" value="Modificar">
    <input type="submit" name="btnBorrarEncuestadores" value="Borrar">
    </div>
</form>
</div>

<?php
    include "../../modelo/Conexion.php";
    include "registroE.php";
    include "modificarE.php";
    include "borrarE.php";
?>

</body>
</html>