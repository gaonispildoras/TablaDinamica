<?php 
include("../conexion.php");

$sql="UPDATE necesidades_viaje SET necesidad_viaje = '$_GET[input]' WHERE usuarios = '$_GET[usuario]'";
$consulta=mysqli_query($conexion, $sql);

?>
