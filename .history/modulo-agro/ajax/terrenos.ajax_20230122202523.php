<?php

require_once "../controladores/terrenosController.php";
require_once "../modelos/terrenos.php";

class AjaxTerrenos{

	/*=============================================
	EDITAR CATEGORÍA
	=============================================*/	

	public $id;

	public function ajaxEditarTerreno(){

		$item = "id";
		$valor = $this->id;

		$respuesta = TerrenosController::ctrMostrarTerrenos($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/	
if(isset($_POST["id"])){

	$terreno = new AjaxTerrenos();
	$terreno -> id = $_POST["id"];
	$terreno -> ajaxEditarTerreno();
}
