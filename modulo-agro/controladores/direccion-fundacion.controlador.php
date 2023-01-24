<?php

class ControladorDireccionFundacion
{

	/*=============================================
	CREAR DIRECCION
	=============================================*/

	static public function ctrCrearDireccion()
	{

		if (isset($_POST["nuevaDireccion"])) {

			if (preg_match('/[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["nuevaDireccion"])) {

				$item = null;
				$valor = null;
				$informacion = ControladorInformacion::ctrMostrarInformacion($item, $valor);
				foreach ($informacion as $value) {
					$value["id"];
				}
				$idInformacion = $value["id"];
				$tabla = "direccion_fundacion";

				$datos = array(
					"direccion" => $_POST["nuevaDireccion"],
					"id_informacion" => $idInformacion
				);

				$respuesta = ModeloDireccionFundacion::mdlIngresarDireccion($tabla, $datos);

				if ($respuesta == "ok") {

					echo '<script>

					swal({
						  type: "success",
						  title: "La dirección ha sido creada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "informacion-fundacion";

									}
								})

					</script>';

				}


			} else {

				echo '<script>

					swal({
						  type: "error",
						  title: "¡La dirección no puede ir vacía!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "informacion-fundacion";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	MOSTRAR DIRECCIONES
	=============================================*/

	static public function ctrMostrarDirecciones($item, $valor)
	{

		$tabla = "direccion_fundacion";

		$respuesta = ModeloDireccionFundacion::mdlMostrarDirecciones($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR DIRECCION
	=============================================*/

	static public function ctrEditarDireccion()
	{

		if (isset($_POST["editarDireccion"])) {

			if (preg_match('/[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["editarDireccion"])) {

				$tabla = "direccion_fundacion";

				$datos = array(
					"direccion" => $_POST["editarDireccion"],
					"id" => $_POST["idDireccion"]
				);

				$respuesta = ModeloDireccionFundacion::mdlEditarDireccion($tabla, $datos);

				if ($respuesta == "ok") {

					echo '<script>

					swal({
						  type: "success",
						  title: "La dirección ha sido cambiada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "informacion-fundacion";

									}
								})

					</script>';

				}


			} else {

				echo '<script>

					swal({
						  type: "error",
						  title: "¡La dirección no puede ir vacía!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "informacion-fundacion";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR DIRECCION
	=============================================*/

	static public function ctrBorrarDireccion()
	{

		if (isset($_GET["idDireccion"])) {

			$tabla = "direccion_fundacion";
			$datos = $_GET["idDireccion"];

			$respuesta = ModeloDireccionFundacion::mdlBorrarDireccion($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

					swal({
						  type: "success",
						  title: "La dirección ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "informacion-fundacion";

									}
								})

					</script>';
			}
		}

	}
}