<?php 
include("../conexion.php");

$sql="UPDATE prueba SET comida = '$_GET[input]' WHERE usuarios = '$_GET[usuario]'";
$consulta=mysqli_query($conexion, $sql);

?>
