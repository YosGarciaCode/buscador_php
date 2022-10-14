<?php
$db_host="localhost";
$db_usuario="root";
$db_nombre="tienda";
$db_contra="";


$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
}

mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la BBDD");
mysqli_set_charset($conexion, "UTF-8");
?>
