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
// Llamado al archivo con las funciones
require_once("prueba_promedio/extraerDatos.php");
?>

<header>
    <a href="#" class="logo"><img class="log" src="img/GENNS-PhotoRoom.png-PhotoRoom.png" alt="GENNS"></a>
    <div class='bx bx-menu' id="menu-icon"></div>
    <ul class="navbar">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Contacto</a></li>
    </ul>
    <div class="header-btn">
        <a href="login.php" class="login">Iniciar Sesión</a>
    </div>
</header>
<main>
    <br>
    <br>
    <div>
        <!-- Objeto canvas -->
        <canvas id="myChart" width="50" height="10"></canvas>
    </div>
    <!-- Llamado a la librería -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        const data = JSON.parse(`<?php echo obtenerConocimientoSegunEdad(); ?>`);
        const edades = ["18-25", "26-35", "36-45"];
        const trabajaInternetLabels = ["Si", "No"];
        const datasets = trabajaInternetLabels.map(trabajaInternet => ({
            label: trabajaInternet,
            data: edades.map(edad => {
                const item = data.find(item => item.Edad === edad && item[trabajaInternet]);
                return item ? item[trabajaInternet] : 0;
            }),
            backgroundColor: getRandomColor()
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
                }
            }
        });

        // Función para generar colores aleatorios
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>
    <br>
    <br>
    <a href="promedio5.php"><button type="button">Siguiente gráfico</button></a>
    <a href="promedio3.php"><button type="button">Gráfico anterior</button></a>
</main>
<br>

<footer>
    <div class="container__footer">
        <div class="box__footer">
            <div class="logof">
                <a href="#"><img src="img/GENNS-PhotoRoom.png-PhotoRoom.png" alt="GENNS"></a>
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
        <div class "box__footer">
            <h2>Compañía</h2>
            <a href="#">Empleo</a>
            <a href="#">Servicios</a>
            <a href="#">Política y Privacidad</a>
        </div>
        <div class="box__footer">
            <h2>Redes Sociales</h2>
            <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
        </div>
    </div>
</footer>

<script src="acciones/js.js"></script>

</body>
</html>
