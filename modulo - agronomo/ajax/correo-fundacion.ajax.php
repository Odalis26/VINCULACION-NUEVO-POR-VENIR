<?php

require_once "../controladores/correo-fundacion.controlador.php";
require_once "../modelos/correo-fundacion.modelo.php";

class AjaxCorreosFundacion{

	/*=============================================
	EDITAR CORREO
	=============================================*/	

	public $idCorreo;

	public function ajaxEditarCorreo(){

		$item = "id";
		$valor = $this->idCorreo;

		$respuesta = ControladorCorreoFundacion::ctrMostrarCorreos($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CORREO
=============================================*/	
if(isset($_POST["idCorreo"])){

	$correo = new AjaxCorreosFundacion();
	$correo -> idCorreo = $_POST["idCorreo"];
	$correo -> ajaxEditarCorreo();
}
