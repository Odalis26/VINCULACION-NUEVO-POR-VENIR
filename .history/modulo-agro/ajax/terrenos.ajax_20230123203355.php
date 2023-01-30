<?php

require_once "../controladores/terrenosController.php";
require_once "../modelos/terrenos.php";

class AjaxTerrenos{

	/*=============================================
	EDITAR TERRENO
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
EDITAR TERRENO
=============================================*/	
if(isset($_POST["idTerreno"])){

	$terreno = new AjaxClientes();
	$terreno -> idCliente = $_POST["idTerreno"];
	$terreno -> ajaxEditarTerreno();

}
