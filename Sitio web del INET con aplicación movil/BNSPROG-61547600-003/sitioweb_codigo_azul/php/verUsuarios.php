<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/styleWeb.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <title>Ver Usuarios</title>
</head>
<body>
    <nav class="nav">
        <ul>
            <li><a href="../paginas/admin.html"><h2 class="title">Clínica Online</h2></a></li>
            <li><a href="../paginas/altaUsuarios.html"><p class="txt">Usuarios</p></a></li>
            <li><a href="../paginas/altaZonas.html"><p class="txt">Asignar zona</p></a></li>
            <li><a href="../paginas/pacientes.html"><p class="txt">Pacientes</p></a></li>
            <li><a href="../paginas/enfermeros.html"><p class="txt">Enfermeros</p></a></li>
            <li><a href="../index.html"><p class="txtsalir">Salir</p></a></li>
        </ul>
    </nav>

    <div class="content-usuarios">
        <h1 class="titleUsu">Usuarios Registrados</h1>
        <table>
            <thead>
                <tr>
                    <!-- En esta sección se cargaran los datos-->
                    <th>Usuario</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                <!-- Referenciamos el archivo PHP-->
                <?php include('ver_usuarios.php'); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
