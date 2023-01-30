<?php

require_once "../controladores/terrenosController.php";
require_once "../modelos/terrenos.php";

class AjaxTerrenos{

	/*=============================================
	EDITAR CATEGORÍA
	=============================================*/	

	public $idTerreno;

	public function ajaxEditarTerreno(){

		$item = "id";
		$valor = $this->idTerreno;

		$respuesta = TerrenosController::ctrMostrarTerrenos($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/	
if(isset($_POST["idTerreno"])){

	$terreno = new AjaxTerrenos();
	$terreno -> idTerreno = $_POST["idTerreno"];
	$terreno -> ajaxEditarTerreno();
}
