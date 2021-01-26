<?php
//INCLUDES
include("../php/conexion.php");
include("../php/sesion.php");
include("../php/funciones.php");

$info_viaje=select_query("*", "viajes", "id_usuario", "$_SESSION[id_usuario]");

$sql="SELECT id_necesidad_viaje, id_usuario, necesidad_viaje FROM necesidades_viaje WHERE id_necesidad = 1";
$query=mysqli_query($conexion, $sql);


$sql2="SELECT id_usuario, necesidad_viaje FROM necesidades_viaje WHERE id_necesidad = 2";
$query2=mysqli_query($conexion, $sql2);

?>