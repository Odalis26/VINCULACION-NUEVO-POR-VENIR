<?php

class TerrenosController{

	/*=============================================
	MOSTRAR TERRENOS
	=============================================*/

	static public function ctrMostrarTerrenos($item, $valor){

		$respuesta = Terrenos::mdlMostrarTerrenos($item, $valor);

		return $respuesta;
	
	}


	/*=============================================
	CREAR TERRENOS
	=============================================*/

	static public function ctrCrearTerrenos(){

		if(isset($_POST["perimetro"])){

			if(preg_match('/^[0-9.]+$/', $_POST["perimetro"]) &&
			preg_match('/^[0-9]+$/', $_POST["area"]) &&	
			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["adaptabilidad"]) &&
			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["tipo_terreno"]) &&
			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["tipo_suelo"]) &&
			preg_match('/^[0-9.]+$/', $_POST["porcentaje_agua"]) &&
			preg_match('/^[0-9.]+$/', $_POST["porcentaje_minerales"])){

				$tabla = "terrenos";

				$datos =  array(
								"id_beneficiario" => $_POST["id_beneficiario"],
								"perimetro" => $_POST["perimetro"],
								"area" => $_POST["area"],
								"adaptabilidad" => $_POST["adaptabilidad"],
								"tipo_terreno" => $_POST["tipo_terreno"],
								"tipo_suelo" => $_POST["tipo_suelo"],
								"porcentaje_agua" => $_POST["porcentaje_agua"],
								"porcentaje_minerales" => $_POST["porcentaje_minerales"],
			);
				$respuesta = Terrenos::mdlIngresarTerreno($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "el terreno  ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "terrenos";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡el terreno no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "terrenos";

							}
						})

			  	</script>';

			}

		}

	}

	

	/*=============================================
	EDITAR TERRENO
	=============================================*/

	static public function ctrEditarTerreno(){

		if(isset($_POST["perimetro"])){

				if(preg_match('/^[0-9.]+$/', $_POST["editarPerimetro"]) &&
				preg_match('/^[0-9]+$/', $_POST["editarArea"]) &&	
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarAdaptabilidad"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTipo_terreno"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTipo_suelo"]) &&
				preg_match('/^[0-9.]+$/', $_POST["editarPorcentaje_agua"]) &&
				preg_match('/^[0-9.]+$/', $_POST["editarPorcentaje_minerales"])){

			   	

				   $datos =  array(
								"id" => $_POST["editarId"],
								"id_beneficiario" => $_POST["editarBeneficiario"],
								"perimetro" => $_POST["editarPerimetro"],
								"area" => $_POST["editarArea"],
								"adaptabilidad" => $_POST["editarAdaptabilidad"],
								"tipo_terreno" => $_POST["editarTipo_terreno"],
								"tipo_suelo" => $_POST["editarTipo_suelo"],
								"porcentaje_agua" => $_POST["editarPorcentaje_agua"],
								"porcentaje_minerales" => $_POST["editarPorcentaje_minerales"],
				   );

			   	$respuesta = Terrenos::mdlEditarTerreno($datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Terreno ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "clientes";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El terreno no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "clientes";

							}
						})

			  	</script>';



			}

		}

	}

	
	}

