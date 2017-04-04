<?php
	/**
	* 
	*/
	require_once "Database.php";
	class Usuario
	{
		
		public function LogIn($usuario, $pass)
		{
			$con = Database::getInstance();
			$sql = "SELECT id, rol FROM usuario WHERE usuario = :usuario AND pass = :pass";
			$result = $con->db->prepare($sql);
			$params = array("usuario" =>$usuario, "pass" => $pass);
			$result->execute($params);
			return ($result);
		}

		public function FunctionName($value='')
		{
			# code...
		}
	}
?>