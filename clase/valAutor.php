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
				$apellidos = $_POST['apellidos'];
				$result = $myAutor->registrarAutor($nombre, $apellidos);

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


$matricula = $_GET['term'];
 
$conexion = new mysqli('servidor','usuario','password','basedatos',3306);
 
$consulta = "SELECT matricula FROM tblalumno WHERE matricula LIKE '%$matricula%'";
 
$result = $conexion->query($consulta);
 
if($result->num_rows > 0){
    while($fila = $result->fetch_array()){
        $matriculas[] = $fila['matricula'];
    }
echo json_encode($matriculas);
}
