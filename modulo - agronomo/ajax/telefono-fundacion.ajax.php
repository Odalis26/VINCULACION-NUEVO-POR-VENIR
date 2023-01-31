<?php

require_once "../controladores/telefono-fundacion.controlador.php";
require_once "../modelos/telefono-fundacion.modelo.php";

class AjaxTelefonosFundacion{

	/*=============================================
	EDITAR TELEFONO
	=============================================*/	

	public $idTelefono;

	public function ajaxEditarTelefono(){

		$item = "id";
		$valor = $this->idTelefono;

		$respuesta = ControladorTelefonoFundacion::ctrMostrarTelefonos($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR TELEFONO
=============================================*/	
if(isset($_POST["idTelefono"])){

	$telefono = new AjaxTelefonosFundacion();
	$telefono -> idTelefono = $_POST["idTelefono"];
	$telefono -> ajaxEditarTelefono();
}
