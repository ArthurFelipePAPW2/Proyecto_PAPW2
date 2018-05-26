<!DOCTYPE html>
<html class="landing-bg">
<head>
	@include('Blades.General.general-css')
</head>
<body class="img-background5">


		<img src="Imagenes/crash.png" class="img-responsive crash visible-sm-inline visible-md-inline visible-lg-inline">
		<img src="Imagenes/aku.png" class="img-responsive aku visible-sm-inline visible-md-inline visible-lg-inline">


		<nav class="navbar navbar-inverse my-bar4 my-def-bar">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand">P I T Z E L</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">

		       <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		          Curiosidades
		          <ul class="dropdown-menu">
		          	<li role="separator" class="divider"></li>
		            <li><a data-toggle="modal" data-target="#agregarcuriosidad">Agregar Curiosidad</a></li>
		            <li><a data-toggle="modal" data-target="#borrarcuriosidad">Borrar Curiosidad</a></li>        
		          </ul>
		        </li>

		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		          Videojuegos
		          <ul class="dropdown-menu">
		          	<li role="separator" class="divider"></li>
		            <li><a data-toggle="modal" data-target="#agregarvdj">Agregar Videojuego</a></li>
		            <li><a data-toggle="modal" data-target="#borrarvdj">Borrar Videojuego</a></li>
		            <li><a data-toggle="modal" data-target="#altavdj">Retornar Videojuego</a></li>
		            <li><a data-toggle="modal" data-target="#modificarvdj">Modificar Videojuego</a></li>	         
		          </ul>
		        </li>

		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		          Usuarios
		          <ul class="dropdown-menu">
		          	<li role="separator" class="divider"></li>
		            <li><a data-toggle="modal" data-target="#altauser">Alta Usuario</a></li>
		            <li><a data-toggle="modal" data-target="#bajauser">Baja Usuario</a></li>         
		          </ul>
		        </li>

		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		          Distribuidoras
		          <ul class="dropdown-menu">
		          	<li role="separator" class="divider"></li>
		            <li><a data-toggle="modal" data-target="#AgregarCuriosidad">Agregar Distribuidora</a></li>
         
		          </ul>
		        </li>

		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		          Salir
		          <ul class="dropdown-menu">
		          	<li role="separator" class="divider"></li>
		            <li><a href="/salir">Salir</a></li>
		          </ul>
		        </li>

		      </ul>

		      <ul class="nav navbar-nav navbar-right">
		        <li>
		          <img src="Imagenes/controller.png" class="img-responsive img-perfil2 img-rounded">	        
		        </li>
		      </ul>
		<br><br><br>	 
						   		   
		@yield('agregar-vdj')
	    @yield('borrar-vdj')
	    @yield('alta-vdj')
	    @yield('borrar-curiosidad')
	    @yield('agregar-curiosidad')
	    @yield('alta-usuario')
	    @yield('baja-usuario')
	    @yield('modificar-vdj')
	    @yield('info-vdj')
	    @yield('agregar-distribuidora')

    

		</nav>	
		<br><br><br>
		
		<div class="container ">
			<div class="row">
				<div class="col-md-11 col-md-offset-1 table-solicitud">
						@yield('peticion')
				</div>
			</div>
		</div>	  

    @include('Blades.General.general-js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
    </script>
	<script>
		$(document).ready(function(){
	
		    $(document).on('click', '#boton1', function(e){
	
		        e.preventDefault();
	
		        var url = '/ModJuego';
		        //var idGame = document.getElementById('idGame');
		        var idGame = $('#idGame').val();
	
		        //$('#info_game').html(idGame); // leave it blank before ajax call

		        $.ajax({
            		url			: url,
            		type 		: 'post',
 					data		: {
 									"idGame":idGame,
									"_token":"{{ csrf_token() }}"
								  },
 					async		: true,
 					cache		: false,
 					success		: function(resp){
 						var data = JSON.parse(resp);
 						//$('#info_game').html(data['mode']);
 						$('#gHidden').val(idGame);
 						$('#gName').val(data['name-videogame']);
 						$('#gNProductor').val(data['productor']);
 						$('#gDesarrolladora').val(data['id-developer']);
 						$('#gDistribuidora').val(data['id-distributor']);
 						$('#gMode').val(data['mode']);
 						$('#gDescription').val(data['description']);
 					},
        			error		: function() {
          				alert("No jala");
        			}
        		});

		    });
	
		});
	
	</script>
  </body>
</html>