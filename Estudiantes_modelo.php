<?php

	require_once "BD.php";

	class Estudiantes_modelo extends BD {

		private $bd;
		public $nombre;
		public $paterno;
		public $materno;
		public $email;
		private $tabla = 'estudiantes';

		public function insertar($registro) {
			$conexion = parent::conectar();
			try {
				#INSERT INTO nombre_tabla (columna1, columna2, columna3,...) VALUES (valor1, valor2, valor3, ...);
				$query = "INSERT INTO estudiantes SET nombre=:nombre, paterno=:paterno, materno=:materno, email=:email";
				#prepare - Preparación de la ejecución
				#execute - Efectua la ejecución

				$insertar = $conexion->prepare($query)->execute($registro);

				#echo "He insertado el registro";
				return true;
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function consultar() {
			$conexion = parent::conectar();
			try {
				#SELECT * FROM nombre_tabla;
				$query = "SELECT * FROM estudiantes";
				#return $consulta = $conexion->query($query)->fetch();
				return $consulta = $conexion->query($query)->fetchAll();
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function actualizar($registro) {
			#UPDATE nombre_tabla SET col1 = valor1, col2 = valor2, col3 = valor3 WHERE condicion;
			$conexion = parent::conectar();
			try {
				$query = "UPDATE estudiantes SET nombre=:nombre, paterno=:paterno, materno=:materno WHERE email=:email;";
				$actualizar = $conexion->prepare($query)->execute($registro);
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function eliminar($accion, $eliminar) {
			#DELETE FROM nombre_tabla WHERE condicion;
			$conexion = parent::conectar();
			if ($accion == 'todos') {
				try {
					$query = "DELETE FROM estudiantes";
					$eliminar = $conexion->prepare($query)->execute();
				} catch (Exception $e) {
					exit("ERROR: ".$e->getMessage());
				}
			} else {
				try {
					$query = "DELETE FROM estudiantes WHERE email=:email";
					$eliminar = $conexion->prepare($query)->execute($eliminar);
					echo "He eliminado";
					#$query = "DELETE FROM estudiantes WHERE email=".$eliminar['email'];
				} catch (Exception $e) {
					exit("ERROR: ".$e->getMessage());
				}
			}
		}

	}


?>