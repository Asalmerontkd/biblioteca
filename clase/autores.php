<?php
	session_start();
	if (isset($_SESSION["id"])) {
		$flag = $_POST['flag'];
		if (isset($flag)) {
			require_once ("Autor.php");
			$myAutor = new Autor;
			if ($flag == 1) //Agregar autor
			{
				$nombre = $_POST['name'];
				$result = $myAutor->registrarAutor($nombre);

				print '<script type="text/javascript">window.top.location.href = "autor";</script>';
			}
		}
		else{
			print '<script type="text/javascript">window.top.location.href = "autor";</script>';
		}
	}
	else{
		print '<script type="text/javascript">window.top.location.href = "login";</script>';
	}
?>