<?php
	
?>
<!-- Static navbar -->
<nav class="navbar navbar-default">
	<div class="container-fluid">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="inicio">
	    	<img id="navLogo" src="img/librerias.png">
	    </a>
	  </div>
	  <div id="navbar" class="navbar-collapse collapse">
	    <ul class="nav navbar-nav">
	      <li><a href="inicio">Inicio</a></li>
	      <?php
	      	if (isset($_SESSION["rol"])) {
	      		if ($_SESSION["rol"]==1) //Administrador
	      		{
	      ?>
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catalogación <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="autor">Autores</a></li>
			          <li><a href="editorial">Editoriales</a></li>
			          <li><a href="clasificacion">Clasificación Dewey</a></li>
			          <li><a href="libros">Nueva ficha</a></li>
			        </ul>
			      </li>
			      <li><a href="consulta">Búsqueda</a></li>
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estadísticas <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">trabajo de los catalogadores</a></li>
			          <li><a href="#">libro mas prestado</a></li>
			          <li><a href="#">usuario con más préstamos</a></li>
			          <li><a href="#">hombres</a></li>
			          <li><a href="#">mujeres</a></li>
			          <li><a href="#">edades</a></li>
			        </ul>
			      </li>
			      <li><a href="consulta">Administración</a></li>
			      <li><a href="consulta">Impresión de Etiquetas</a></li>
			      <li><a href="consulta">Inventario</a></li>
	      <?php
	      		}

	      		//TODO programar otros usuarios
	      	}
	      ?>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <?php
	      	if (isset($_SESSION["user"])) 
	      	{
	      		echo "<li><a href='#'>".$_SESSION["user"]."</a></li>";
	      		echo "<li><a href='cerrar'>Cerrar sesión</a></li>";
	      	}
	      	else
	      	{
	      		echo "<li><a href='login'>Iniciar sesión</a></li>";
	      	}
	      ?>
	    </ul>
	  </div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>