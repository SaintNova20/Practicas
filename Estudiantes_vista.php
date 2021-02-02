<?php
	require_once 'Estudiantes_modelo.php';
	$estudiante = new Estudiantes_modelo();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<h1>CRUD de Estudiantes</h1>

	<?php  #var_dump(PDO::getAvailableDrivers()); ?>

	<h3>C: Insertar</h3>
	<?php

		/*$alumno = [
			'nombre'  => 'Roberto',
			'paterno' => 'Hodgson',
			'materno' => 'C',
			'email'   => 'rb@gmail.com'
		];*/

		$respuesta = $estudiante->insertar($alumno);
		if ($respuesta == true) {
			echo "Se ha insertado";
		} else {
			echo "Hay un error";
		}

	?>

	<h3>R: Leer/Consultar</h3>
	<?php
		/*$resultados = $estudiante->consultar();
		foreach ($resultados as $estudiante) {
			echo $estudiante['nombre']." ".$estudiante['paterno']."<br />";
		}*/
	?>

	<h3>U: Actualizar</h3>

	<?php

		/*$alumno = [
			'nombre' => 'Yesi',
			'paterno' => 'Days.',
			'materno' => 'B.',
			'email' => 'silvercorp@gmail.com'
		];
		$estudiante->actualizar($alumno);*/

	?>

	<h3>D: Eliminar</h3>

	<?php

		$alumno = ['email' => 'silvercorp@gmail.com'];
		$estudiante->eliminar('todos', $alumno);

	?>




</body>
</html>