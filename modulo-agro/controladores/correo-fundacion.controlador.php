<?php

class ControladorCorreoFundacion
{

	/*=============================================
	CREAR CORREO 
	=============================================*/

	static public function ctrCrearCorreo()
	{

		if (isset($_POST["nuevoCorreo"])) {

			if (preg_match('/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i', $_POST["nuevoCorreo"])) {

				$item = null;
				$valor = null;
				$informacion = ControladorInformacion::ctrMostrarInformacion($item, $valor);
				foreach ($informacion as $value) {
					$value["id"];
				}
				$idInformacion = $value["id"];
				$tabla = "correo_fundacion";

				$datos = array(
					"correo" => $_POST["nuevoCorreo"],
					"id_informacion" => $idInformacion 
				);

				$respuesta = ModeloCorreoFundacion::mdlIngresarCorreo($tabla, $datos);

				if ($respuesta == "ok") {

					echo '<script>

					swal({
						  type: "success",
						  title: "El correo ha sido creado correctamente",
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
						  title: "¡El correo no puede no válido!",
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
	MOSTRAR CORREOS
	=============================================*/

	static public function ctrMostrarCorreos($item, $valor)
	{

		$tabla = "correo_fundacion";

		$respuesta = ModeloCorreoFundacion::mdlMostrarCorreos($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR CORREO
	=============================================*/

	static public function ctrEditarCorreo()
	{

		if (isset($_POST["editarCorreo"])) {

			if (preg_match('/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i', $_POST["editarCorreo"])) {

				$tabla = "correo_fundacion";

				$datos = array(
					"correo" => $_POST["editarCorreo"],
					"id" => $_POST["idCorreo"]
				);

				$respuesta = ModeloCorreoFundacion::mdlEditarCorreo($tabla, $datos);

				if ($respuesta == "ok") {

					echo '<script>

					swal({
						  type: "success",
						  title: "El correo ha sido cambiado correctamente",
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
						  title: "¡El correo no puede ir vacío!",
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
	BORRAR CORREO
	=============================================*/

	static public function ctrBorrarCorreo()
	{

		if (isset($_GET["idCorreo"])) {

			$tabla = "correo_fundacion";
			$datos = $_GET["idCorreo"];

			$respuesta = ModeloCorreoFundacion::mdlBorrarCorreo($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

					swal({
						  type: "success",
						  title: "El correo ha sido borrado correctamente",
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