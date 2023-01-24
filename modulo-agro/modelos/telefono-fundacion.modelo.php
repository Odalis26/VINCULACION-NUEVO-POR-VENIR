<?php

require_once "conexion.php";

class ModeloTelefonoFundacion
{

	/*=============================================
	CREAR TELEFONO
	=============================================*/

	static public function mdlIngresarTelefono($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_informacion,telefono) VALUES (:id_informacion,:telefono)");

		$stmt->bindParam(":id_informacion", $datos["id_informacion"], PDO::PARAM_INT);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);

		if ($stmt->execute()) {

			return "ok";

		} else {

			return "error";

		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

	static public function mdlMostrarTelefonos($tabla, $item, $valor)
	{

		if ($item != null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt->fetch();

		} else {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt->execute();

			return $stmt->fetchAll();

		}

		$stmt->close();

		$stmt = null;

	}

	/*=============================================
	EDITAR TELEFONO
	=============================================*/

	static public function mdlEditarTelefono($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET telefono = :telefono WHERE id = :id");

		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if ($stmt->execute()) {

			return "ok";

		} else {

			return "error";

		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	BORRAR TELEFONO
	=============================================*/

	static public function mdlBorrarTelefono($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $datos, PDO::PARAM_INT);

		if ($stmt->execute()) {

			return "ok";

		} else {

			return "error";

		}

		$stmt->close();

		$stmt = null;

	}

}