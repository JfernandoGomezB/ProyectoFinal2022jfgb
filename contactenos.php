<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="pagina2.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png.png">
    <title>Contactenos</title>
  </head>
<style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #0C285F;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #ECEFF7;
}

.navbar a.active {
  background-color: #BDC3D1;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<body>



<div class="navbar">
  
  <a href="servicios.php">Productos / Servicios</a> 
  <a href="tiendas.php">Tiendas</a> 
  <a href="index.php">Inicio</a>
  <a href="vermensajes.php">Ver mensajes</a>
</div>

<br>
<h1>CONTACTENOS</h1>
<form method="POST">
  <h1>Bienvenidos a Tigo</h1>
  <input type="text" name="name" placeholder="Nombre Completo">
  <input type="num" name="telefono" placeholder="Telefono">
  <input type="email" name="correo" placeholder="Email">
  <input type="text" name="mensajes" placeholder="Mensajes">
  <input type="submit" name= "registro">
  
</form>
<?php
include("registrar.php");
?>

<footer>
    <table border="0" width="100%" cellpadding="15" cellpacing="5" bgcolor="#0C285F">
      <tr bg color="white"> 
        <td style="color:#E8E8E8">PBX:XXXX-XXXX</td>
        <td style="color:#E8E8E8">DIRECCION:KM 9.5CARRETERA EL SLVR</td>
        <td style="color:#E8E8E8">CARNET:2022-40435</td>
        <td style="color:#E8E8E8">NOMBRE:JOSE FERNANDO GOMEZ BAUTISTA</td>
      </tr>
    </table>
  </footer><br>

</html>