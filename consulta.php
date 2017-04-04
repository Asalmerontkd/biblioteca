<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Consulta</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="estilo/style.css">
		
	</head>
	<body>
		<div class="container">
			<?php
				include "include/nav.php";
				if (isset($_SESSION["rol"])) {
					if ($_SESSION["rol"] != 1 && $_SESSION["rol"] != 2 && $_SESSION["rol"] != 3) {
						print '<script type="text/javascript">window.top.location.href = "inicio";</script>';
					}
				}
				else{
					print '<script type="text/javascript">window.top.location.href = "login";</script>';
				}
			?>
		</div>

		<div class="container">
			<div class="col-md-5">
			    <div class="form-area">  
			        <form role="form" method="post" action="consulta.php">
			        <br style="clear:both">
	                    <h3 id="tituloForm">Consulta de libros</h3>
						<div class="form-group">
							<input type="text" class="form-control" name="busqueda" placeholder="Busqueda" required>
						</div>
			        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Registrar</button>
			        </form>
			    </div>
			</div>
		</div>

		<br/>

		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading"></div>
				<div class="panel-body">
					<div class="row">
					  <div class="col-lg-6">
					    <div class="input-group">
					    	<div class="table-responsive">
						    	<table class="table .table-sm table-hover table-bordered">
						    		<tr>
						    			<th>ISBN</th>
						    			<th>Titulo</th>
						    			<th>Autor</th>
						    			<th>Clasificación</th>
						    			<th>Editorial</th>
						    			<th>Edición</th>
						    			<th>Descripación Física</th>
						    			<th>Notas generales</th>
						    			<th>Notas de contenido</th>
						    			<th>Temas generales</th>
						    		</tr>
						    		<?php
						    			require_once ("clase/Libro.php");
										$consulta = new Libro;
										if (isset($_POST['busqueda'])) {
											$result = $consulta->consultarLibrosTitulo($_POST['busqueda']);
											if ($result->rowCount() > 0) {
												foreach($result as $row)
												{
													echo "<tr>";
													echo "<td>".$row['ISBN']."</td>";
													echo "<td>".$row['titulo']."</td>";
													echo "<td>".$row['autor']."</td>";
													echo "<td>".$row['clasificacion']."</td>";
													echo "<td>".$row['editorial']."</td>";
													echo "<td>".$row['edicion']."</td>";
													echo "<td>".$row['descFisica']."</td>";
													echo "<td>".$row['notaGeneral']."</td>";
													echo "<td>".$row['notaContenido']."</td>";
													echo "<td>".$row['temasGenerales']."</td>";
													echo "</tr>";
												}
											}
										}
										else
										{
											$result = $consulta->consultarLibros();
											if ($result->rowCount() > 0) {
												foreach($result as $row)
												{
													echo "<tr>";
													echo "<td>".$row['ISBN']."</td>";
													echo "<td>".$row['titulo']."</td>";
													echo "<td>".$row['autor']."</td>";
													echo "<td>".$row['clasificacion']."</td>";
													echo "<td>".$row['editorial']."</td>";
													echo "<td>".$row['edicion']."</td>";
													echo "<td>".$row['descFisica']."</td>";
													echo "<td>".$row['notaGeneral']."</td>";
													echo "<td>".$row['notaContenido']."</td>";
													echo "<td>".$row['temasGenerales']."</td>";
													echo "</tr>";
												}
											}
										}
										
						    		?>
						    	</table>
						    </div>
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div>
			</div>
		</div>



		<!-- Latest compiled and minified JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>