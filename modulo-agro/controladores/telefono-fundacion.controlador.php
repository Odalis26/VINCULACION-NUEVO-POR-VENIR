<?php

class ControladorTelefonoFundacion
{

	/*=============================================
	CREAR TELEFONOS FUNDACION
	=============================================*/

	static public function ctrCrearTelefono()
	{

		if (isset($_POST["nuevoTelefono"])) {

			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ+() ]+$/', $_POST["nuevoTelefono"])) {

				$item = null;
				$valor = null;
				$informacion = ControladorInformacion::ctrMostrarInformacion($item, $valor);
				foreach ($informacion as $value) {
					$value["id"];
				}
				$idInformacion = $value["id"];
				$tabla = "telefono_fundacion";

				$datos = array(
					"telefono" => $_POST["nuevoTelefono"],
					"id_informacion" => $idInformacion
				);

				$respuesta = ModeloTelefonoFundacion::mdlIngresarTelefono($tabla, $datos);

				if ($respuesta == "ok") {

					echo '<script>

					swal({
						  type: "success",
						  title: "El teléfono ha sido creado correctamente",
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
						  title: "¡El teléfono no puede ir vacío!",
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
	MOSTRAR CATEGORIAS
	=============================================*/

	static public function ctrMostrarTelefonos($item, $valor)
	{

		$tabla = "telefono_fundacion";

		$respuesta = ModeloTelefonoFundacion::mdlMostrarTelefonos($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR TELEFONO
	=============================================*/

	static public function ctrEditarTelefono()
	{

		if (isset($_POST["editarTelefono"])) {

			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ+() ]+$/', $_POST["editarTelefono"])) {

				$tabla = "telefono_fundacion";

				$datos = array(
					"telefono" => $_POST["editarTelefono"],
					"id" => $_POST["idTelefono"]
				);

				$respuesta = ModeloTelefonoFundacion::mdlEditarTelefono($tabla, $datos);

				if ($respuesta == "ok") {

					echo '<script>

					swal({
						  type: "success",
						  title: "El teléfono ha sido cambiado correctamente",
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
						  title: "¡El teléfono no puede ir vacío!",
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
	BORRAR TELEFONO
	=============================================*/

	static public function ctrBorrarTelefono()
	{

		if (isset($_GET["idTelefono"])) {

			$tabla = "telefono_fundacion";
			$datos = $_GET["idTelefono"];

			$respuesta = ModeloTelefonoFundacion::mdlBorrarTelefono($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

					swal({
						  type: "success",
						  title: "El teléfono ha sido borrado correctamente",
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