<?php
    $ruta = new mysqli ("localhost","root","","encuestas"); 
    $ruta -> set_charset("utf8"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $pa = $_POST['edad'];
    $pb = $_POST['pb'];
    $pc = $_POST['pc'];
    $pd = $_POST['pd'];
    $pe = $_POST['pe'];
    $pf = $_POST['pf'];
    $pg = $_POST['pg'];
    $ph = $_POST['ph'];
    $pi = $_POST['pi'];
    $pj = $_POST['pj'];
    $pk = $_POST['pk'];
    $pl = $_POST['pl'];
    $SEXO = $_POST['sexo'];
    $PUNTAJE = $_POST['puntaje'];
    $NIVEL = $_POST['nivel'];
    $PUNTAJE = $pb + $pc + $pd + $pe + $pf + $pg + $ph + $pi + $pj;

    if($PUNTAJE <= 34){
        $NIVEL = "Bajo";
    } else if($PUNTAJE > 34 && $PUNTAJE <= 64){
        $NIVEL = "Medio";
    } else if($PUNTAJE > 64){
        $NIVEL = "Alto";
    }

    $sql = "UPDATE preguntas SET PREGUNTA_A = '$pa', PREGUNTA_B = '$pb', PREGUNTA_C = '$pc', PREGUNTA_D = '$pd', PREGUNTA_E = '$pe', PREGUNTA_F = '$pf', PREGUNTA_G = '$pg', PREGUNTA_H = '$ph', PREGUNTA_I = '$pi', PREGUNTA_J = '$pj', PREGUNTA_K = '$pk', PREGUNTA_L = '$pl', SEXO = '$SEXO', PUNTAJE = '$PUNTAJE', NIVEL = '$NIVEL' WHERE ID_ENCUESTA = $id";
    
    $consulta = mysqli_query($ruta,$sql);

    if($consulta) {
        echo "Cambios guardados con exito";
    }
    else {
        echo "Algo salio mal " . mysqli_error($ruta);
    }
}
header("Location: Encuestador.php");
mysqli_close($ruta); 

?>
