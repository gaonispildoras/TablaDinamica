<?php 
include("../conexion.php");

$sql="INSERT INTO viajes (comida, usuarios) VALUES ('$_GET[input_nuevo]' , '$_GET[usuario_nuevo]')";
$consulta=mysqli_query($conexion, $sql);




?>
