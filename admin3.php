<?php

	$mysqli = new MYSQLI('localhost', 'root', '', 'musica');
	
	
	if(isset($_POST['btnEnviar'])){
		//$agregar = $mysqli->query("insert into noticias values (null, '".$_POST['titulo']."', '".$_POST['categoria']."', '".$_POST['noticia']."', '".$_FILES['imagen']['name']."' )");
		
		
		$n = $_POST['nom_can'];
		$ob = $_POST['cancion'];
		$ge = $_POST['genero'];
		$agregar = $mysqli->query("insert into cancion values (null, '$n', '$ob', '$ge')");
	}
	
	//Eliminar 
	if(isset($_GET['id'])){
		$id= $_GET['id'];
		$eliminar = $mysqli->query("delete from cancion where nom_can='$id'");
	}
	if(isset($_GET['ide'])){
		$id= $_GET['ide'];
		$buscar = $mysqli->query("select from cancion where nom_far='$id'");
	}
	session_start();
	if(!isset($_SESSION['nombre']) || $_SESSION['tipo'] != "A"){
		header("location:index.php?m=Su session ha caducado");
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/estiloadmin.css" />
	<script type="text/javascript" src="js/validacionnoticia.js"></script>
</head>

<body background="#05555D">


<form  border="2" name="form" id="form" action="admin3.php" method="post" enctype="multipart/form-data" onSubmit="return valida();">
<div id="contenedoradmin" background="#05555D">
	<table border="2">

	<h3 align="center">Agregar Canción (Administrador)</h3>
	Bienvenido (<?php echo $_SESSION['tipo']. ') ' .$_SESSION['nombre']; ?>
<br>

<a background="#ACD522" href="cerrarsession.php"> Cerrar Sesión </a>

	<div align="center">
		<label class="label" for="nom_can">Servidor:</label>
		<input type="text" name="nom_can" id="nom_can" />
	</div>

	<div align="center">
		<label class="label" for="cancion">Canción:</label>
		<textarea name="cancion" id="cancion"></textarea>
	</div>

	<div align="center">
		<label class="label" for="genero">Género:</label>
		<input type="text" name="genero" id="genero" />
	</div>
	
	

	<div align="center">
		<input type="submit" name="btnEnviar" id="btnEnviar" value="Guardar" />
		
	</div>
</table>

	<h3 align="center">Lista de canciones </h3>

	<table border="3" align="center">

<tr>
	<th bgcolor="#073A3F">Identificador</th>
   	<th bgcolor="#073A3F">Servidor</th>
   	<th bgcolor="#073A3F">Canción</th>
   	<th bgcolor="#073A3F">Género</th>
   	<th bgcolor="#073A3F">|=|</th>
   

</tr>
<?php
	$consulta = $mysqli->query("Select * from cancion");
	while($registro = $consulta->fetch_assoc()){
?>
<tr>
   <th> <?php echo $registro['cod_can']; ?> </th>
   <th> <?php echo $registro['nom_can']; ?> </th>
   <th> <?php echo $registro['cancion']; ?> </th>
   <th> <?php echo $registro['genero']; ?> </th>
   <th bgcolor="#A40A0A"> <a href="admin3.php?id=<?php echo $registro['nom_can']; ?>">Eliminar </a>  </th>

</tr>
<?php
	}
?>
</table>
</form>
</div>
</body>
</html>