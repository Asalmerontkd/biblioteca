<?php
	session_start();
	if (isset($_SESSION["id"])) {
		$flag = $_POST['flag'];
		if (isset($flag)) {
			require_once ("Dewey.php");
			$myDewey = new Dewey;
			if ($flag == 1) //Agregar autor
			{
				$clave = $_POST['clave'];
				$nombre = $_POST['clasificacion'];
				$result = $myDewey->registrarDewey($clave ,$nombre);

				print '<script type="text/javascript">window.top.location.href = "clasificacion";</script>';
			}
		}
		else{
			print '<script type="text/javascript">window.top.location.href = "clasificacion";</script>';
		}
	}
	else{
		print '<script type="text/javascript">window.top.location.href = "login";</script>';
	}
?>