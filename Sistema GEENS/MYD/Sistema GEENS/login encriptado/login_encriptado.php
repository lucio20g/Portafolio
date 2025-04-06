<?php

$conexion = new mysqli("localhost","root","","encuestas");
                    // conexion local, usuario, clave(si ponemos), nombre de la bd 

$conexion -> set_charset("utf8"); 

if($conexion-> connect_error) {
    die ("no anda". $mysql->connect_error);
    echo "erro en codigo sql"; 
}
else {

}

$nombre = $_POST('usuario'); 

$contra = $_POST('contraseña'); 

if(isset($_POST['ingresar']))

?>


?> 