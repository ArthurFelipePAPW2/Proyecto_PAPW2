<!DOCTYPE html>
<html class="landing-bg">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../PitzelCSS.css">
	<script src="../funciones.js"></script>
  </head>
<body class="img-background4">

		<nav class="navbar navbar-inverse my-bar3 my-def-bar">
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

		@include('Blades.General.general-peticion-vdj')

		<br>  			
		
                           @yield('form-img')

		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<center>

						@yield('fotito')

						<br>
						<p class="nombre-perfil">@yield('nombre-perfil')</p>
						<p class="acerca-de-mi">Acerca de mi</p>
						<p class="descripcion-perfil">@yield('acerca-de-mi')</p>
					</center>
				</div>
				<div class="col-md-9">
					<table class="table responsive-table table-usuario">
						<thead>
						<th colspan="3">Informacion Básica</th>		
						</thead>		
						<tr>
							<td>Nombre:</td>
							@yield('form-nombre')
						</tr>
						<tr>
							<td>Apellido:</td>
							@yield('form-apellido')
						</tr>
						<tr>
							<td>Fecha de Nacimiento:</td>
							<form>
							<td>@yield('fecha')</td>
							<td></td>
							</form>
						</tr>
						<tr>
							<td>Ciudad/Estado:</td>
							@yield('form-ciudad')
						</tr>					
					</table>
					<br>
					<table class="table table-responsive table-usuario">
						<thead>
						<th colspan="3">Informacion de Contacto</th>	
						</thead>
						<tr>
							<td>Correo:</td>
							@yield('form-correo')
						</tr>
						<tr>
							<td>Página Web:</td>
							@yield('form-pagina')
						</tr>			
					</table>
					@yield('form-pass')
					<br>
					<table class="table table-responsive table-favorite">
						<thead>
						<th colspan="10">Mis Titulos Favoritos</th>	
						</thead>
					
							@yield('favoritos-user')
									
					</table>

				</div>
			</div>
		</div>
		@include('Blades.General.general-js')
		<script type="text/javascript" src="{!! asset('funciones.js') !!}"></script>
  </body>
</html>