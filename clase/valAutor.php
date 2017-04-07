<?php
	$dato = $_GET['term'];
	require_once ("Autor.php");
	$myAutor = new Autor;

	$result = $myAutor->consultarAutor($dato);
	if ($result->rowCount() > 0) {
		$ar = array();
		foreach($result as $row)
		{
			$ar = array('value' => $row['nombre']);
		}
		$json=json_encode($ar, JSON_FORCE_OBJECT);
		echo $json;
	}
?>
