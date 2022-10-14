<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		html {

			background-color: antiquewhite;
			text-align: center;
		}
	</style>
</head>

<body>

	<?php
	$busqueda = $_GET["buscar"];
	require("datos_conexion.php");


	$consulta = "SELECT * FROM usuarios WHERE DNI LIKE '%$busqueda%';";
	$resultados = mysqli_query($conexion, $consulta);
	while ($fila = mysqli_fetch_array($resultados,)) {

		echo "<table> <tr> <td>";
		echo $fila[0] . "</td> <td>";
		echo $fila[1] . "</td> <td>";
		echo $fila[2] . "</td> <td>";
		echo $fila[3] . "</td> </tr></table><br>";
		
	}

	?>

</body>

</html>