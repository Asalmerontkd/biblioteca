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
			      <li><a href="#">Usuarios</a></li>
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="autor">Autores</a></li>
			          <li><a href="editorial">Editoriales</a></li>
			          <li><a href="clasificacion">Clasificación Dewey</a></li>
			          <li><a href="libros">Libros</a></li>
			        </ul>
			      </li>
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultas <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="consulta">Libros</a></li>
			        </ul>
			      </li>
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