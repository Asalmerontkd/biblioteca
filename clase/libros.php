<?php
	session_start();
	if (isset($_SESSION["id"])) {
		$flag = $_POST['flag'];
		if (isset($flag)) {
			require_once ("Libro.php");
			$myLibro = new Libro;
			require_once ("Autor.php");
			$myAutor = new Autor;
			if ($flag == 1) //Agregar autor
			{
				$ISBN = $_POST['isbn'];
				$titulo = $_POST['titulo'];
				$responsabilidad = $_POST['responsabilidad'];
				$autor = $_POST['autor'];
				$anio = $_POST['anio'];
				$clasificacion = $_POST['dewey'];
				$editorial = $_POST['editorial'];
				$edicion = $_POST['edicion'];
				$lugar = $_POST['lugar'];
				$descFisica = $_POST['desFisica'];
				$notaGeneral = $_POST['notaGeneral'];
				$notaContenido = $_POST['notaContenido'];
				$temasGenerales = $_POST['temas'];

				$innerResult = $myAutor->validaAutor($autor);
				if ($innerResult->rowCount() > 0) {
					foreach($innerResult as $inrow){
						$autor = $inrow['id'];
					}
				}
				else{
					$data->registrarAutor($autor);
					
					$innerPost = $data->validaAutor($autor);
					if ($innerPost->rowCount() > 0) {
						foreach($innerPost as $inPost){
							$autor = $inPost['id'];
						}
					}
				}



				$result = $myLibro->registrarLibro($ISBN, $titulo, $responsabilidad, $autor, $anio, $clasificacion, $editorial, $edicion, $lugar, $descFisica, $notaGeneral, $notaContenido, $temasGenerales);

				print '<script type="text/javascript">window.top.location.href = "libros";</script>';
			}
		}
		else{
			print '<script type="text/javascript">window.top.location.href = "libros";</script>';
		}
	}
	else{
		print '<script type="text/javascript">window.top.location.href = "login";</script>';
	}
?>