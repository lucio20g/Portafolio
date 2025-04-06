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
    <title>GENNS|Promedio</title>
    <style>
      #myChart {
        width: 100px;
        height: 100px;
      }
    </style>
</head>
<body>

<?php
// llamado al archivo con las funciones
require_once("prueba_promedio/extraerDatos.php");
?>

    <header>
        <a href="#" class="logo"><img class="log" src="img/GENNS-PhotoRoom.png-PhotoRoom.png" alt=""></i>GENNS</a>

        <div class='bx bx-menu' id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>

        <div class="header-btn">
            <a href="login.php" class="login">Iniciar Sesion</a>
        </div>

    </header>
    <main>
        <br>
        <br>
        <div>
<!--objeto canvas-->
<canvas id="myChart" width="50" height="10"></canvas>

</div>
<!--llamado a la librería-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    const data = JSON.parse(`<?php echo valoresDeNivelesPorEdad(); ?>`);

    const edades = data.map(item => item.Edad);
    const niveles = ["Alto", "Medio", "Bajo"];

    const datasets = niveles.map(nivel => ({
        label: nivel,
        data: data.map(item => item[nivel]),
        backgroundColor: niveles.indexOf(nivel) === 0 ? '#FFB1C1' : (niveles.indexOf(nivel) === 1 ? '#FE2E2E' : '#31B404')
    }));    
    new Chart(ctx, {
    type: 'bar',
    data: {
        labels: edades,
        datasets: datasets
    },
    options: {
        scales: {
            x: {
                stacked: true,
            },
            y: {
                stacked: true,
            }
        },
        plugins: {
            legend: {
                display: true,
                position: 'top',
            }
        },
    }
});





</script>


        <br>
        <br>
        <a href="promedio2.php"><button type="button">Siguiente grafico</button></a>
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