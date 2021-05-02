<?php

$mysqli = new MYSQLI('localhost', 'root', '', 'cancion');

session_start();
   if(!isset($_SESSION['nombre']) || $_SESSION['tipo'] != "A"){
      header("location:index.php?m=Su session ha caducado");
   }

?>

Hola <?php echo $_SESSION['tipo']. ' ' .$_SESSION['nombre']; ?>

<table border="1">

<tr>
   <th>Identificador</th>
   <th>Nombre</th>
   <th>Link</th>
   <th>Categoria</th>
   <th>Accion</th>

</tr>
<?php
	$list_cancion = $mysqli->query("Select * from musica");
	while($registro = $list_cancion->fetch_assoc()){
?>
<tr>
   <th> <?php echo $registro['cod_cancion']; ?> </th>
   <th> <?php echo $registro['nombre']; ?> </th>
   <th> <?php echo $registro['link']; ?> </th>
   <th> <?php echo $registro['cod_gen']; ?> </th>
   <th> <a href="index.php?id=<?php echo $registro['cod_gen']; ?>"> Quitar </a>  </th>

</tr>
<?php
	}
?>
</table>