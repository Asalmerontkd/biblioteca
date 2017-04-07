<?php
	/**
	* 
	*/
	require_once "Database.php";
	class Autor
	{
		function registrarAutor($nombre)
		{
			$con = Database::getInstance();
			$sql = "INSERT INTO autor(nombre) VALUES(:nombre)";
			$result = $con->db->prepare($sql);
			$params = array("nombre" => $nombre);
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

		function consultarAutor($nombre)
		{
			$con = Database::getInstance();
			$sql = "SELECT * FROM autor WHERE nombre LIKE :nombre";
			$result = $con->db->prepare($sql);
			$params = array("nombre" => "%".$nombre."%");
			$result->execute($params);
			return ($result);
		}

		function validaAutor($nombre)
		{
			$con = Database::getInstance();
			$sql = "SELECT id FROM autor WHERE nombre = :nombre";
			$result = $con->db->prepare($sql);
			$params = array("nombre" => $nombre);
			$result->execute($params);
			return ($result);
		}

	}
?>