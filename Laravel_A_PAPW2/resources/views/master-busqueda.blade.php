<!DOCTYPE html>
<html class="landing-bg">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../PitzelCSS.css">
	<script src="../funciones.js"></script>
	<link rel="Shortcut Icon" href="../Imagenes/Pitzel.ico" type="image/x-icon" />
  </head>
<body class="img-background7">

		<nav class="navbar navbar-inverse my-bar5 my-def-bar">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/articles">P I T Z E L</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			@include('Blades.General.general-search') 
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		         <img src="data:;base64,{{ Session::get('User')->{'avatar'} }}" class="img-responsive img-perfil img-rounded">
		          <ul class="dropdown-menu">
		            <li><a href="/perfil/{{ Session::get('User')->{'id-user'} }}">Perfil</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a data-toggle="modal" data-target="#sendvdj">Enviar Sugerencia</a></li>
		            <li><a href="/salir">Salir</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
		<br>

		<img src="Imagenes/hollow.png" class="img-responsive img-hollow visible-sm-inline visible-md-inline visible-lg-inline">

		<img src="Imagenes/hollow2.png" class="img-responsive img-hollow2 visible-sm-inline visible-md-inline visible-lg-inline">

		<img src="Imagenes/hollow2.png" class="img-responsive img-hollow3 visible-sm-inline visible-md-inline visible-lg-inline">

		<img src="Imagenes/hollow2.png" class="img-responsive img-hollow4 visible-sm-inline visible-md-inline visible-lg-inline">
				
		@yield('warning')
		@yield('busqueda-users')
		<br><br>

		@yield('busqueda-videogames')
		<br><br>
		@include('Blades.General.general-peticion-vdj')					   		   
		@include('Blades.General.general-js')	
					 	  
   
  </body>
</html>