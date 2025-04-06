<!--===== Vinculación a la conexión de la base de datos =====-->
<?php @include 'PHP/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/index.css"> 
    <title> TEJO | Estadísticas </title>
</head>
<body>

<div class="animación">

<!-- CABECERA -->

<header class="sub-header">
<nav>
<ul class="sub-nav-links">
  <li> <a href="index.html"> Inicio </a> </li>
  <li> <a href="comojugar.html"> Como jugar </a> </li>
  <li> <a href="estadisticas.php"> Estadísticas </a> </li>
</ul>            
</nav>
<a onclick="openNav()" class="menu" href="#"> <button> Menú </button> </a>
<div id="mobile-menu" class="overlay">
  <a onclick="closeNav()" href="#" class="close"> &times; </a>
  <div class="overlay-content">
    <a href="index.html"> Inicio </a>
    <a href="comojugar.html"> Como jugar </a>
    <a href="estadisticas.php"> Estadísticas </a>
  </div>
</div>
</header>



<div class="table">
    <div class="table-header">
      <h1 id="titulo-1"> Ganadores </h1>
    </div>
  </div>
  <div class="table-section">
    <table>
      <thead>
        <tr>
          <th> Nombre </th>
          <th> Partidas ganadas </th>
        </tr>
      </thead>
      <?php 
      $sql = "SELECT * FROM ganadores";
      $result = mysqli_query($conn, $sql);
      while($mostrar = mysqli_fetch_array($result)) { ?>
      <tbody>
        <tr>
          <td> <?php echo $mostrar['Nombre'] ?> </td>
          <td> <?php echo $mostrar['Partidas_ganadas'] ?> </td>
        </td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
  </div>

  <div class="table">
    <div class="table-header">
      <h1 id="titulo-2"> Partidas jugadas </h1>
    </div>
  </div>
  <div class="table-section">
    <table>
      <thead>
        <tr>
          <th> Primer jugador </th>
          <th> Puntaje </th>
          <th> Segundo jugador </th>
          <th> Puntaje </th>
        </tr>
      </thead>
      <?php 
      $sql = "SELECT * FROM partidas";
      $result = mysqli_query($conn, $sql);
      while($mostrar = mysqli_fetch_array($result)) { ?>
      <tbody>
        <tr>
          <td> <?php echo $mostrar['primer_jugador'] ?> </td>
          <td> <?php echo $mostrar['Puntaje_j1'] ?> </td>
          <td> <?php echo $mostrar['segundo_jugador'] ?> </td>
          <td> <?php echo $mostrar['Puntaje_j2'] ?> </td>
        </td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
  </div>

</div>

</body>
</html>