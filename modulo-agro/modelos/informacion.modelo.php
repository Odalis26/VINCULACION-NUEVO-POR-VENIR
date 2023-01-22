<?php

require_once "conexion.php";

class ModeloInformacion
{
	static public function mdlMostrarInformacion($tabla, $item, $valor)
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

	static public function mdlEditarInformacion($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  nombre = :nombre, mision = :mision, vision = :vision, quienes_somos = :quienes_somos, numero = :numero, correo= :correo WHERE id = :id");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":mision", $datos["mision"], PDO::PARAM_STR);
		$stmt->bindParam(":vision", $datos["vision"], PDO::PARAM_STR);
		$stmt->bindParam(":quienes_somos", $datos["quienes_somos"], PDO::PARAM_STR);
		$stmt->bindParam(":numero", $datos["numero"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if ($stmt->execute()) {

			return "ok";

		} else {

			return "error";

		}

		$stmt->close();
		$stmt = null;

	}

	static public function mdlEditarInformacionImg($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  nombre = :nombre, mision = :mision, vision = :vision, quienes_somos = :quienes_somos, numero = :numero, correo= :correo, logo= :logo WHERE id = :id");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":mision", $datos["mision"], PDO::PARAM_STR);
		$stmt->bindParam(":vision", $datos["vision"], PDO::PARAM_STR);
		$stmt->bindParam(":quienes_somos", $datos["quienes_somos"], PDO::PARAM_STR);
		$stmt->bindParam(":numero", $datos["numero"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":logo", $datos["logo"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if ($stmt->execute()) {

			return "ok";

		} else {

			return "error";

		}

		$stmt->close();
		$stmt = null;

	}

}