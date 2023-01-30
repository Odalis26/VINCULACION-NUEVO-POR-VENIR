<?php

require_once "conexion.php";

class Terrenos{

	/*=============================================
	CREAR TERRENO
	=============================================*/

	static public function mdlIngresarTerreno($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_beneficiario,perimetro,area,adaptabilidad,tipo_terreno,tipo_suelo,porcentaje_agua,porcentaje_minerales) 
												VALUES (:id_beneficiario,:perimetro,:area,:adaptabilidad,:tipo_terreno,:tipo_suelo,:porcentaje_agua,:porcentaje_minerales)");

		$stmt->bindParam(":id_beneficiario", $datos["id_beneficiario"], PDO::PARAM_INT);
		$stmt->bindParam(":perimetro", $datos["perimetro"], PDO::PARAM_INT);
		$stmt->bindParam(":area", $datos["area"], PDO::PARAM_STR);
		$stmt->bindParam(":adaptabilidad", $datos["adaptabilidad"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_terreno", $datos["tipo_terreno"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_suelo", $datos["tipo_suelo"], PDO::PARAM_STR);
		$stmt->bindParam(":porcentaje_agua", $datos["porcentaje_agua"], PDO::PARAM_STR);
		$stmt->bindParam(":porcentaje_minerales", $datos["porcentaje_minerales"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";
 
		}else{

			return "error";
		
		}
		$stmt->close();
		$stmt = null;
		

	}

	/*=============================================
	MOSTRAR TERRENOS 
	=============================================*/

	static public function mdlMostrarTerrenos($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT clientes.nombre as beneficiario, terrenos.perimetro,terrenos.area,terrenos.adaptabilidad,terrenos.tipo_terreno,terrenos.tipo_suelo,terrenos.porcentaje_agua,
			terrenos.porcentaje_minerales  FROM terrenos JOIN clientes ON terrenos.id_beneficiario= clientes.id");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		
		$stmt = null;

	}

	/*==========================
	EDITAR TERRENO
	===========================*/

	static public function mdlEditarTerreno($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_beneficiario = :id_beneficiario,perimetro = :perimetro, area = :area, adaptabilidad = :adaptabilidad,tipo_terreno = :tipo_terreno,tipo_suelo = :tipo_suelo,porcentaje_agua = :porcentaje_agua,porcentaje_minerales = :porcentaje_minerales WHERE id = :id");

		$stmt->bindParam(":id_beneficiario", $datos["id_beneficiario"], PDO::PARAM_INT);
		$stmt->bindParam(":perimetro", $datos["perimetro"], PDO::PARAM_STR);
		$stmt->bindParam(":area", $datos["area"], PDO::PARAM_STR);
		$stmt->bindParam(":adaptabilidad", $datos["adaptabilidad"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_terreno", $datos["tipo_terreno"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_suelo", $datos["tipo_suelo"], PDO::PARAM_STR);
		$stmt->bindParam(":porcentaje_agua", $datos["porcentaje_agua"], PDO::PARAM_STR);
		$stmt->bindParam(":porcentaje_minerales", $datos["porcentaje_minerales"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;
		

	}

	

}

