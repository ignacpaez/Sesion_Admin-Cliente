<?php

$mysqli = new MYSQLI('localhost', 'root', '', 'musica');

$consultacanc = '';


function laConsulta(){
	global $mysqli, $consultacanc;
	$sql = 'SELECT * FROM musica WHERE 	genero = Electronica';
	return $mysqli->query($sql);

}


?>