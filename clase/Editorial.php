<?php
	/**
	* 
	*/
	require_once "Database.php";
	class Editorial
	{
		function registrarEditorial($editorial)
		{
			$con = Database::getInstance();
			$sql = "INSERT INTO editorial(editorial) VALUES(:editorial)";
			$result = $con->db->prepare($sql);
			$params = array("editorial" => $editorial);
			$result->execute($params);
			return ($result);
		}

		function consultarEditoriales()
		{
			$con = Database::getInstance();
			$sql = "SELECT * FROM editorial";
			$result = $con->db->prepare($sql);
			$result->execute();
			return ($result);
		}
	}
?>