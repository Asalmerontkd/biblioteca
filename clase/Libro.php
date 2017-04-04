<?php
	/**
	* 
	*/
	require_once "Database.php";
	class Libro
	{
		function registrarLibro($ISBN, $titulo, $responsabilidad, $autor, $anio, $clasificacion, $editorial, $edicion, $lugar, $descFisica, $notaGeneral, $notaContenido, $temasGenerales)
		{
			$con = Database::getInstance();
			$sql = "INSERT INTO libro(ISBN, titulo, responsabilidad, autor, anio, clasificacion, editorial, edicion, lugar, descFisica, notaGeneral, notaContenido, temasGenerales) VALUES(:ISBN, :titulo, :responsabilidad, :autor, :anio, :clasificacion, :editorial, :edicion, :lugar, :descFisica, :notaGeneral, :notaContenido, :temasGenerales)";
			$result = $con->db->prepare($sql);
			$params = array("ISBN" => $ISBN, "titulo" => $titulo, "responsabilidad" => $responsabilidad, "autor" => $autor, "anio" => $anio, "clasificacion" => $clasificacion, "editorial" => $editorial, "edicion" => $edicion, "lugar" => $lugar, "descFisica" => $descFisica, "notaGeneral" => $notaGeneral, "notaContenido" => $notaContenido, "temasGenerales" => $temasGenerales);
			$result->execute($params);
			return ($result);
		}

		function consultarLibros()
		{
			$con = Database::getInstance();
			$sql = "SELECT * FROM libro";
			$result = $con->db->prepare($sql);
			$result->execute();
			return ($result);
		}
	}
?>