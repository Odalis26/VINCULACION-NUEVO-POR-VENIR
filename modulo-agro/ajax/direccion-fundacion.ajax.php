<?php

require_once "../controladores/direccion-fundacion.controlador.php";
require_once "../modelos/direccion-fundacion.modelo.php";

class AjaxTelefonosFundacion{

	/*=============================================
	EDITAR DIRECCIOON
	=============================================*/	

	public $idDireccion;

	public function ajaxEditarDireccion(){

		$item = "id";
		$valor = $this->idDireccion;

		$respuesta = ControladorDireccionFundacion::ctrMostrarDirecciones($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR DIRECCIOON
=============================================*/	
if(isset($_POST["idDireccion"])){

	$direccion = new AjaxTelefonosFundacion();
	$direccion -> idDireccion = $_POST["idDireccion"];
	$direccion -> ajaxEditarDireccion();
}
