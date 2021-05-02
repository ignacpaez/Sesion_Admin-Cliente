<!DOCTYPE html>
<html>
<head>
	<title>		Música	</title>
	<meta charset="UTF8" />
	<link rel="stylesheet" href="css/estilo.css" />
	<script src="js/validacion.js" ></script>
</head>
<body>
	<section class="login">
	<div class="titulo">Acceso</div>
	<form action = "valida_usuario.php" method="post" enctype="application/x-www-form-urlencoded" onsubmit="return valida();">
    	<input id="usuario" type="text" name="usuario" required title="Usuario requerido" placeholder="Usuario" data-icon="U">
        <input id="clave" type="password" name="clave" required title="Contraseña requerida" placeholder="Contraseña" data-icon="x">
        <div class="olvido">
        	<div class="col"><a href="registro.php" title="Ver Carásteres">Registro</a></div>
            
        </div>
        <input class="enviar" type="submit" name="btnEnviar" id="btnEnviar" value ="Ingresar" />
    </form>
	</section>

</form>
</body>
</html>