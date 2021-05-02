<?php

	$mysqli = new MYSQLI('localhost', 'root', '', 'musica');

	session_start();
	if(!isset($_SESSION['nombre']) || $_SESSION['tipo'] != "U"){
		header("location:index.php?m=Su session ha caducado");
	}
	


?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estiloadmin.css" />
	<script type="text/javascript" src="js/validacionnoticia.js"></script>
</head>
<body>
<div id="contenedoradmin" background="#05555D">
<table border="3">
	<h3 align="center">Canciones (Usuario)</h3>
Bienvenido (<?php echo $_SESSION['tipo']. ') ' .$_SESSION['nombre']; ?>
<br>
<a background="#ACD522" href="cerrarsession.php"> Cerrar Sesión </a>

	<h3 align="center">Lista de canciones </h3>

	<table border="3" align="center">

<tr>
   <th bgcolor="#073A3F">Servidor</th>
   <th bgcolor="#073A3F">Canción</th>
   <th bgcolor="#073A3F">Género</th>
   

</tr>
<?php
	$consulta = $mysqli->query("Select * from cancion");
	while($registro = $consulta->fetch_assoc()){
?>
<tr>
   <th> <?php echo $registro['nom_can']; ?> </th>
   <th> <?php echo $registro['cancion']; ?> </th>
   <th> <?php echo $registro['genero']; ?> </th>
   

</tr>
<?php
	}
?>
</table>
</table>
</div>
</body>
</html>