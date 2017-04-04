<?php
	/**
	* 
	*/
	require_once "Database.php";
	class Autor
	{
		function registrarAutor($nombre, $apellido)
		{
			$con = Database::getInstance();
			$sql = "INSERT INTO autor(nombre, apellido) VALUES(:nombre, :apellido)";
			$result = $con->db->prepare($sql);
			$params = array("nombre" => $nombre, "apellido" => $apellido);
			$result->execute($params);
			return ($result);
		}

		function consultarAutores()
		{
			$con = Database::getInstance();
			$sql = "SELECT * FROM autor";
			$result = $con->db->prepare($sql);
			$result->execute();
			return ($result);
		}
	}
?>