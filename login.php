<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inicio de sesión</title>
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

				if (isset($_GET['flag'])) {
					if ($_GET['flag'] == 1) {
						echo "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a> <strong>Error!</strong> Usuario o contraseña incorrectos.</div>";					}
				}
			?>

			<div class="row">
		        <div class="col-md-4 col-md-offset-7">
		            <div id="panelLogin" class="panel panel-default">
		                <div class="panel-heading">
		                    <span class="glyphicon glyphicon-lock"></span> Inicio de sesión</div>
			                <div class="panel-body">
			                    <form class="form-horizontal" role="form" method="post" action="initLogin">
				                    <div class="form-group">
				                        <label for="inputEmail3" class="col-sm-3 control-label">
				                            Usuario</label>
				                        <div class="col-sm-9">
				                            <input type="text" class="form-control" name="user" placeholder="Usuario" required>
				                        </div>
				                    </div>
				                    <div class="form-group">
				                        <label for="inputPassword3" class="col-sm-3 control-label">
				                            Contraseña</label>
				                        <div class="col-sm-9">
				                            <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
				                            <input type="text" hidden="true" name="flag" value="1">
				                        </div>
				                    </div>
				                    <div id="panelLoginLast" class="form-group last">
				                        <div class="col-sm-offset-3 col-sm-9">
				                            <button type="submit" class="btn btn-success btn-sm">
				                                Sign in</button>
				                                 <button type="reset" class="btn btn-default btn-sm">
				                                Reset</button>
				                        </div>
				                    </div>
			                    </form>
			                </div>
			                <div class="panel-footer">
			                    Olvidaste tu contraseña? <a href="#">Cambiar contraseña</a>
		                    </div>
		            </div>
		        </div>
		    </div>



		</div>



		<!-- Latest compiled and minified JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>