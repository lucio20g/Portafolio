<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/styleWeb.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <title>Clínica - Zonas</title>
</head>
<body>
    <nav class="nav">
        <ul>
            <li><a href="../paginas/admin.html"><h2 class="title">Clínica Online</h2></a></li>
            <li><a href="../paginas/altaUsuarios.html"><p class="txt">Usuarios</p></a></li>
            <li><a href="../paginas/altaZonas.html"><p class="txt">Areas/Zonas</p></a></li>
            <li><a href="../paginas/pacientes.html"><p class="txt">Pacientes</p></a></li>
            <li><a href="../paginas/enfermeros.html"><p class="txt">Enfermeros</p></a></li>
            <li><a href="../index.html"><p class="txtsalir">Salir</p></a></li>
        </ul>
    </nav>

    <div class="content-zonas">
    <table>
        <h1 class="titleUsu">Lista de zonas</h1>
            <thead>
                <tr>
                    <!-- En esta sección se cargaran los datos-->
                    <th>Zona</th>
                    <th>Paciente</th>
                    <th>Doctor</th>
                    <th>Llamado</th>
                </tr>
            </thead>
            <tbody>
                <!-- Referenciamos el archivo PHP-->
                <?php include('ver_zonas.php'); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
