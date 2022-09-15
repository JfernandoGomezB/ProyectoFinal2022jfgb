<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
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
<div class="navbar">
  
  <a href="index.php">inicio</a> 
  <a href="tiendas.php">Tiendas</a> 
  <a href="contactenos.php">Contactenos</a>
</div>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
<table>
  <tr>
    <th>Nonombre</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Mensaje</th>
  </tr>
<?php
$inc = include("con_db.php");
if ($inc) {
    $consulta = "SELECT * FROM mensajes";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $nomensaje = $row['nomensaje'];
            $nombre = $row['nombre'];
            $telefono = $row['telefono'];
            $correo = $row['correo'];
            $mensaje = $row['mensaje']; 
            ?>
            <div>
            <h2><?php echo $nombre; ?></h2>
            <div>
            <p>
            <b>nomensaje: </b> <?php echo $nomensaje ?><br>
            <b>telefono: </b> <?php echo $telefono ?><br>
        	<b>correo: </b> <?php echo $correo ?><br>
        	<b>mensaje: </b> <?php echo $mensaje ?><br>
            </p>
        	</div>
        </div> 
        <?php
        }
    }
}
?>
   </table>
</body>
</html> 
    