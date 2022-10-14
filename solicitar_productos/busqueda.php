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


	$consulta = "SELECT * FROM productos WHERE NOMBREARTÍCULO LIKE '%$busqueda%';";
	$resultados = mysqli_query($conexion, $consulta);
	while ($fila = mysqli_fetch_array($resultados,)) {

		echo "<table> <tr> <td>";
		echo $fila['CÓDIGOARTÍCULO'] . "</td> <td>";
		echo $fila['SECCIÓN'] . "</td> <td>";
		echo $fila['NOMBREARTÍCULO'] . "</td> <td>";
		echo $fila['PRECIO'] . "</td> <td>";
		echo $fila['FECHA'] . "</td> </tr></table><br>";
		echo $fila['IMPORTADO'] . "</td> <td>";
		echo $fila['PAÍSDEORIGEN'] . "</td> <td>" . "<br>" . "<br>";
	}

	?>

</body>

</html>