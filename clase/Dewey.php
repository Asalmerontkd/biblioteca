<?php
	/**
	* 
	*/
	require_once "Database.php";
	class Dewey
	{
		function registrarDewey($clave, $clasificacion)
		{
			$con = Database::getInstance();
			$sql = "INSERT INTO clasificacion(clave, clasificacion) VALUES(:clave, :clasificacion)";
			$result = $con->db->prepare($sql);
			$params = array("clave" => $clave, "clasificacion" => $clasificacion);
			$result->execute($params);
			return ($result);
		}

		function consultarDewey()
		{
			$con = Database::getInstance();
			$sql = "SELECT * FROM clasificacion";
			$result = $con->db->prepare($sql);
			$result->execute();
			return ($result);
		}
	}
?>