<?php

class ControladorInformacion
{
	static public function ctrMostrarInformacion($item, $valor)
	{

		$tabla = "informacion";

		$respuesta = ModeloInformacion::mdlMostrarInformacion($tabla, $item, $valor);

		return $respuesta;

	}
	static public function ctrEditarInformacion()
	{

		if (isset($_POST["editarNombre"])) {

			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])) {

				if (!$_FILES['nuevoLogo']['error'] == 0) {
					$tabla = "informacion";

					$datos = array(
						"id" => $_POST["idInformacion"],
						"nombre" => $_POST["editarNombre"],
						"mision" => $_POST["editarMision"],
						"vision" => $_POST["editarVision"],
						"quienes_somos" => $_POST["editarQuienesSomos"],
						"numero" => $_POST["editarTelefono"],
						"correo" => $_POST["editarCorreo"],
					);

					$respuesta = ModeloInformacion::mdlEditarInformacion($tabla, $datos);

					if ($respuesta == "ok") {

						echo '<script>
	
					 swal({
						   type: "success",
						   title: "Cambiado correctamente",
						   showConfirmButton: true,
						   confirmButtonText: "Cerrar"
						   }).then(function(result){
									 if (result.value) {
	
									 window.location = "informacion";
	
									 }
								 })
	
					 </script>';

					}

				} else {
					$newCode = mt_rand(0001,9999);
					$logo = $_FILES["nuevoLogo"]["name"];
					$path = $_FILES["nuevoLogo"]["tmp_name"];
					$directorio = "vistas/img/logo/" . $newCode . "/";
					mkdir($directorio, 0755);
					$nuevoLogo = $directorio . $logo;
					copy($path, $nuevoLogo);

					$tabla = "informacion";

					$datos = array(
						"id" => $_POST["idInformacion"],
						"nombre" => $_POST["editarNombre"],
						"mision" => $_POST["editarMision"],
						"vision" => $_POST["editarVision"],
						"quienes_somos" => $_POST["editarQuienesSomos"],
						"numero" => $_POST["editarTelefono"],
						"correo" => $_POST["editarCorreo"],
						"logo" => $nuevoLogo
					);

					$respuesta = ModeloInformacion::mdlEditarInformacionImg($tabla, $datos);

					if ($respuesta == "ok") {

						echo '<script>
	
					 swal({
						   type: "success",
						   title: "Cambiado correctamente",
						   showConfirmButton: true,
						   confirmButtonText: "Cerrar"
						   }).then(function(result){
									 if (result.value) {
	
									 window.location = "informacion";
	
									 }
								 })
	
					 </script>';

					}

				}
			} else {

				echo '<script>

					swal({
						  type: "error",
						  title: "¡Los campos no pueden ir vacíos!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "informacion";

							}
						})

			  	</script>';

			}

		}

	}
}