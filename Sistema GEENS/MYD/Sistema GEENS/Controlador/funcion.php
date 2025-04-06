<?php
function obtenerId($usuario) {
    $ruta = new mysqli("localhost", "root", "", "encuestas");
    $consulta = $ruta->query("SELECT ID FROM encuestadores WHERE USUARIO='$usuario'");

    if ($encuestador = $consulta->fetch_object()) {
        return $encuestador->ID;
    } else {
        return null;
    }
}
?>
