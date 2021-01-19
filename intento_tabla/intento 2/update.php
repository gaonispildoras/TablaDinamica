<?php 
include("../conexion.php");

$sql="UPDATE viajes SET nombre_viaje = '$_GET[input]' WHERE id_usuario = $_GET[usuario]";
$consulta=mysqli_query($conexion, $sql);




?>
