<?php

	$mysqli = new MYSQLI('localhost', 'root', '', 'musica');
	
	
	if(isset($_POST['btnEnviar'])){
		
		$l = $_POST['login'];
		$cl = $_POST['clave'];
		$t = $_POST['tipo'];
		$us = $_POST['nombre'];
		$agregar = $mysqli->query("insert into usuarios values ('$l', '$cl', '$t', '$us')");
	}
	


?>

<html>
<head>
	<title>Registro Cuenta</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/estiloadmin.css" />
</head>
<body>
<form name="form" id="form" action="registro.php" method="post" enctype="multipart/form-data" onSubmit="return valida();">
	<table>
	<div align="center">
		<label class="label" for="login">Login:</label>
		<input type="text" name="login" id="login" />
	</div>

	<div align="center">
		<label class="label" for="clave">Clave:</label>
		<input type="text" name="clave" id="clave" />
	</div>

	<div align="center">
		<label class="label" for="tipo">Tipo de Usuario:</label>
		<input type="text" name="tipo" id="tipo" />
	</div>
	<div align="center">
		<label class="label" for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre" />
	</div>
	

	<div align="center">
		<input type="submit" name="btnEnviar" id="btnEnviar" value="Registrar" />
		
	</div>
	</table>
</form>	

</body>
</html>