<?php
	session_start();
	if (isset($_SESSION["id"])) {
		$flag = $_POST['flag'];
		if (isset($flag)) {
			require_once ("Editorial.php");
			$myEditorial = new Editorial;
			if ($flag == 1) //Agregar autor
			{
				$nombre = $_POST['editorial'];
				$result = $myEditorial->registrarEditorial($nombre);

				print '<script type="text/javascript">window.top.location.href = "editorial";</script>';
			}
		}
		else{
			print '<script type="text/javascript">window.top.location.href = "editorial";</script>';
		}
	}
	else{
		print '<script type="text/javascript">window.top.location.href = "login";</script>';
	}
?>