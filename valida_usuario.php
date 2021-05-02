<?php
//include('coneccion.php');
require('conexion.php');
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$sql = "SELECT login, clave, tipo, nombre FROM usuarios WHERE login = '$usuario' AND clave = '$clave'";
$buscar = $mysqli->query($sql);
if($buscar->num_rows > 0){
	foreach($buscar as $usu){
		session_start();
		$_SESSION['login'] = $usu['login'];
		$_SESSION['tipo'] = $usu['tipo'];
		$_SESSION['nombre'] = $usu['nombre'];
		if($usu['tipo'] == "A"){
			header("location:admin3.php");
		}
		elseif($usu['tipo'] == "U")
		{
			header("location:usu1.php");
		}
		else
		{	header("location:index.php?m=Usuario no valido");	}		
	}
}
else
{	header("location:index.php?m=Usuario no valido");  }

?>