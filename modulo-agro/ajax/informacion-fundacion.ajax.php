<?php

require_once "../controladores/informacion-fundacion.controlador.php";
require_once "../modelos/informacion-fundacion.modelo.php";

class AjaxInformacion
{
	public $idInformacion;

	public function ajaxEditarInformacion()
	{
		$item = "id";
		$valor = $this->idInformacion;
		$respuesta = ControladorInformacion::ctrMostrarInformacion($item, $valor);
		echo json_encode($respuesta);
	}
}

/*=============================================
EDITAR INFORMACION
=============================================*/
if (isset($_POST["idInformacion"])) {
	$informacion = new AjaxInformacion();
	$informacion->idInformacion = $_POST["idInformacion"];
	$informacion->ajaxEditarInformacion();
}