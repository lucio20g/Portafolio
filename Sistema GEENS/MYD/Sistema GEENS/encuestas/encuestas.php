<?php
    $ruta = new mysqli ("localhost","root","","encuestas"); 
    $ruta -> set_charset("utf8"); 

    session_start();

    if (isset($_SESSION['ID'])) {
        $user_id = $_SESSION['ID'];

        //Pregunta 0
        $p0 = $_POST['edad'];

        //Pregunta 1
        $p1 = $_POST['antivirus'];

        // Pregunta 2
        $p2a = isset($_POST['virus']) ? $_POST['virus'] : 0;
        $p2b = isset($_POST['virus2']) ? $_POST['virus2'] : 0;
        $p2c = isset($_POST['virus3']) ? $_POST['virus3'] : 0;
        $p2d = isset($_POST['virus4']) ? $_POST['virus4'] : 0;
        $p2e = isset($_POST['virus5']) ? $_POST['virus5'] : 0;
        $p2t = $p2a + $p2b + $p2c + $p2d + $p2e;

        // Pregunta 3
        $p3a = isset($_POST['seguridad']) ? $_POST['seguridad'] : 0;
        $p3b = isset($_POST['seguridad2']) ? $_POST['seguridad2'] : 0;
        $p3c = isset($_POST['seguridad3']) ? $_POST['seguridad3'] : 0;
        $p3d = isset($_POST['seguridad4']) ? $_POST['seguridad4'] : 0;
        $p3e = isset($_POST['seguridad5']) ? $_POST['seguridad5'] : 0;
        $p3t = $p3a + $p3b + $p3c + $p3d + $p3e;

        //Pregunta 4
        $p4 = $_POST['clave'];

        //Pregunta 5
        $p5 = $_POST['info'];

        //Pregunta 6
        $p6 = $_POST['comp'];

        //Pregunta 7
        $p7 = $_POST['cambio'];

        //Pregunta 8
        $p8 = $_POST['firewall'];

        //Pregunta 9
        $p9 = $_POST['cortafuego'];

        //Pregunta 10
        $p10 = $_POST['dia'];

        //Pregunta 11
        $p11 = $_POST['trabajo'];

        //Pregunta 12
        $p12 = $_POST['sexo'];

        $pt = $p1 + $p2t + $p3t + $p4 + $p5 + $p6 + $p7 + $p8 + $p9;

        if($pt <= 34){
            $resultado = "Bajo";
        } else if($pt > 34 && $pt <= 64){
            $resultado = "Medio";
        } else if($pt > 64){
            $resultado = "Alto";
        }

        $sql = "INSERT INTO preguntas (ID_ENCUESTADOR, PREGUNTA_A, PREGUNTA_B, PREGUNTA_C, 
        PREGUNTA_D, PREGUNTA_E, PREGUNTA_F, PREGUNTA_G, PREGUNTA_H, PREGUNTA_I, PREGUNTA_J,
        PREGUNTA_K, PREGUNTA_L, SEXO, PUNTAJE, NIVEL)
        VALUES ('$user_id', '$p0', '$p1', '$p2t', '$p3t', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$pt', '$resultado');";

        $consulta = mysqli_query($ruta,$sql);


        if($consulta) {
            echo"Puntaje guardado";
        }
        else {
            echo "Algo salio mal";
        }
    }
    header('Location: ../encuestador.php');

    mysqli_close($ruta); 
?>