<!DOCTYPE html>
<html class="landing-bg">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    
    <!-- Own CSS -->
    <link rel="stylesheet" href="PitzelCSS.css">

    <title>Gaming & Things</title>
</head>
<body class="img-background5">


		<img src="Imagenes/crash.png" class="img-responsive crash">
		<img src="Imagenes/aku.png" class="img-responsive aku">


		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand">A D M I N I S T R A C I Ó N</a>
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

		      </ul>

		      <ul class="nav navbar-nav navbar-right">
		        <li>
		          <img src="Imagenes/valor.png" class="img-responsive img-perfil2 img-rounded">	        
		        </li>
		      </ul>
		<br><br><br>	 
						   		   
		<!--MODAL DE AGREGAR VDJ-->
		<div id="agregarvdj" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Agregar Videojuego</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form>
                               <div class="form-group">
                               <label class="sr-only">Titulo</label><input type="text" class="form-control input-sm" placeholder="Nombre del videojuego" id="vdj" name="vdj">
                               </div> 
                               <div class="form-group">
                               <label class="sr-only">Plataforma</label><input type="text" class="form-control input-sm" placeholder="Plataforma" id="plat" name="plat">
                               </div> 
                               <div class="form-group">
                               <label class="sr-only">Productor(es)</label><input type="text" class="form-control input-sm" placeholder="Productor(es)" id="prod" name="prod">
                               </div>
                               <div class="form-group">
                               <label class="sr-only">Desarrollador(es)</label><input type="text" class="form-control input-sm" placeholder="Desarrollador(es)" id="desa" name="desa">
                               </div>
                               <div class="form-group">
                               <label class="sr-only">Genero(s)</label><input type="text" class="form-control input-sm" placeholder="Genero(s)" id="gen" name="gen">
                               </div>
                               <div class="form-group">
                               <label class="sr-only">Productor(es)</label><input type="text" class="form-control input-sm" placeholder="Productor(es)" id="prod" name="prod">
                               </div>
                               <div class="form-group">
                               <label class="sr-only">Distribiudora(s)</label><input type="text" class="form-control input-sm" placeholder="Distribiudora(s)" id="dis" name="dis">
                               </div>
                               <div class="form-group">
                               <label class="sr-only">Modo(s) de juego</label><input type="text" class="form-control input-sm" placeholder="Modo(s) de juego" id="modo" name="modo">
                               </div>
                               <div class="form-group">
                               <label class="sr-only">Descripcion</label><textarea class="textarea-agregar-vdj" placeholder="Descripcion del Videojuego"></textarea>
                               <div class="form-group">
                               <label class="sr-only">Imagen</label><input type="file" class="form-control input-sm" id="imag" name="imag">
                               </div>                             
                               <button type="button" class="btn btn-default btn-xs btn-login" data-dismiss="modal">Agregar</button> 
                            </form>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>

            <!--MODAL DE BORRAR VDJ-->
		<div id="borrarvdj" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Borrar Videojuego</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form>
                               <div class="form-group">
                               	      <label for="sel1">Selecciona el videojuego a borrar</label>
								      <select class="form-control" id="sel1">
								        <option>Titulo 1</option>
								        <option>Titulo 2</option>
								        <option>Titulo 3</option>
								        <option>Titulo 4</option>
								      </select> 
								  </div>  
								<div class="form-group">
                               <label class="sr-only">Contraseña</label><input type="password" class="form-control input-sm" placeholder="Password" id="pwd" name="pwd">
                               </div>        
                               <button type="button" class="btn btn-default btn-xs btn-login" data-dismiss="modal">Borrar</button> 
                            </form>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>

            <!--MODAL DE BORRAR CURIOSIDAD-->
		<div id="borrarcuriosidad" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Borrar Curiosidad</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form>
                               <div class="form-group">
                               	      <label for="sel1">Selecciona la curiosidad a borrar</label>
								      <select class="form-control" id="sel1">
								        <option>Cosa 1</option>
								        <option>Cosa 2</option>
								        <option>Cosa 3</option>
								        <option>Cosa 4</option>
								      </select> 
								  </div>  
								<div class="form-group">
                               <label class="sr-only">Contraseña</label><input type="password" class="form-control input-sm" placeholder="Password" id="pwd" name="pwd">
                               </div>        
                               <button type="button" class="btn btn-default btn-xs btn-login" data-dismiss="modal">Borrar</button> 
                            </form>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>

            <!--MODAL DE AGREGAR CURIOSIDAD-->
		<div id="agregarcuriosidad" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Agregar Curiosidad</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form>
                               <div class="form-group">
                               <label class="sr-only">Descripcion</label><textarea class="textarea-agregar-vdj" placeholder="¿Sabías Qué?..."></textarea>                                                     
                               <button type="button" class="btn btn-default btn-xs btn-login" data-dismiss="modal">Agregar</button> 
                            </form>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>

            <!--MODAL DE ALTA USUARIO-->
		<div id="altauser" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Alta Usuario</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form>
                               <div class="form-group">
                               	      <label for="sel1">Selecciona el usuario</label>
								      <select class="form-control" id="sel1">
								        <option>00001 User</option>
								        <option>00002 User</option>
								        <option>00003 User</option>
								        <option>00004 User</option>
								      </select> 
								  </div>  
								<div class="form-group">
                               <label class="sr-only">Contraseña</label><input type="password" class="form-control input-sm" placeholder="Password" id="pwd" name="pwd">
                               </div>        
                               <button type="button" class="btn btn-default btn-xs btn-login" data-dismiss="modal">Alta</button> 
                            </form>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>

            <!--MODAL DE BORRAR USUARIO-->
		<div id="bajauser" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Baja Usuario</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form>
                               <div class="form-group">
                               	      <label for="sel1">Selecciona el usuario</label>
								      <select class="form-control" id="sel1">
								        <option>00001 User</option>
								        <option>00002 User</option>
								        <option>00003 User</option>
								        <option>00004 User</option>
								      </select> 
								  </div>  
								<div class="form-group">
                               <label class="sr-only">Contraseña</label><input type="password" class="form-control input-sm" placeholder="Password" id="pwd" name="pwd">
                               </div>        
                               <button type="button" class="btn btn-default btn-xs btn-login" data-dismiss="modal">Baja</button> 
                            </form>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>

            <!--MODAL DE MODIFICAR VDJ-->
		<div id="modificarvdj" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Modificar Videojuego</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form>
                               <div class="form-group">
                               	      <label for="sel1">Selecciona el videojuego a modificar</label>
								      <select class="form-control" id="sel1">
								        <option>Titulo 1</option>
								        <option>Titulo 2</option>
								        <option>Titulo 3</option>
								        <option>Titulo 4</option>
								      </select> 
								  </div>  
								      
                               <a data-toggle="modal" data-target="#infovdj"><p class="modificar-vdj-button">Modificar</p></a>
                            </form>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>

            <!--MODAL CON TODA LA INFO DE VDJ-->
		<div id="infovdj" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Información Actual</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form>
                               <div class="form-group">
                               <label class="sr-only">Titulo</label><input type="text" class="form-control input-sm" placeholder="Nombre del videojuego" id="vdj" name="vdj">
                               </div> 
                               <div class="form-group">
                               <label class="sr-only">Plataforma</label><input type="text" class="form-control input-sm" placeholder="Plataforma" id="plat" name="plat">
                               </div> 
                               <div class="form-group">
                               <label class="sr-only">Productor(es)</label><input type="text" class="form-control input-sm" placeholder="Productor(es)" id="prod" name="prod">
                               </div>
                               <div class="form-group">
                               <label class="sr-only">Desarrollador(es)</label><input type="text" class="form-control input-sm" placeholder="Desarrollador(es)" id="desa" name="desa">
                               </div>
                               <div class="form-group">
                               <label class="sr-only">Genero(s)</label><input type="text" class="form-control input-sm" placeholder="Genero(s)" id="gen" name="gen">
                               </div>
                               <div class="form-group">
                               <label class="sr-only">Productor(es)</label><input type="text" class="form-control input-sm" placeholder="Productor(es)" id="prod" name="prod">
                               </div>
                               <div class="form-group">
                               <label class="sr-only">Distribiudora(s)</label><input type="text" class="form-control input-sm" placeholder="Distribiudora(s)" id="dis" name="dis">
                               </div>
                               <div class="form-group">
                               <label class="sr-only">Modo(s) de juego</label><input type="text" class="form-control input-sm" placeholder="Modo(s) de juego" id="modo" name="modo">
                               </div>
                               <div class="form-group">
                               <label class="sr-only">Descripcion</label><textarea class="textarea-agregar-vdj" placeholder="Descripcion del Videojuego"></textarea>
                               <div class="form-group">

                               </div>                             
                               <button type="button" class="btn btn-default btn-xs btn-login" data-dismiss="modal">Agregar</button> 
                            </form>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>

		</nav>	
		<br><br><br>
		
		<div class="container">
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<table class="table table-solicitud table-responsive">
						<caption>Solicitudes de videojuegos</caption>
						<thead>
						<th>Titulo</th>	
						<th>Descripción</th>	
						<th>Usuario que envía</th>	
						<th>Eliminar</th>		
						</thead>
						<tr>
							<td class="titulo-solicitud">Videojuego1</td>
							<td>Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción </td>
							<td>
								<center><p class="user-solicitud">Bob</p><img src="Imagenes/fondo.jpg" class="img-responsive img-solicitud"></center>
							</td>
							<td><center>
								<form>
									<label class="eliminar-check">
									  <input type="checkbox">
									  <span class="checkmark"></span>
									</label>
								</form></center>
							</td>
						</tr>		

						<tr>
							<td class="titulo-solicitud">Videojuego1</td>
							<td>Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción </td>
							<td>
								<center><p class="user-solicitud">Bob</p><img src="Imagenes/fondo.jpg" class="img-responsive img-solicitud"></center>
							</td>
							<td><center>
								<form>
									<label class="eliminar-check">
									  <input type="checkbox">
									  <span class="checkmark"></span>
									</label>
								</form></center>
							</td>
						</tr>		

						<tr>
							<td class="titulo-solicitud">Videojuego1</td>
							<td>Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción </td>
							<td>
								<center><p class="user-solicitud">Bob</p><img src="Imagenes/fondo.jpg" class="img-responsive img-solicitud"></center>
							</td>
							<td><center>
								<form>
									<label class="eliminar-check">
									  <input type="checkbox">
									  <span class="checkmark"></span>
									</label>
								</form></center>
							</td>
						</tr>		

						<tr>
							<td class="titulo-solicitud">Videojuego1</td>
							<td>Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción </td>
							<td>
								<center><p class="user-solicitud">Bob</p><img src="Imagenes/fondo.jpg" class="img-responsive img-solicitud"></center>
							</td>
							<td><center>
								<form>
									<label class="eliminar-check">
									  <input type="checkbox">
									  <span class="checkmark"></span>
									</label>
								</form></center>
							</td>
						</tr>		

						<tr>
							<td class="titulo-solicitud">Videojuego1</td>
							<td>Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción </td>
							<td>
								<center><p class="user-solicitud">Bob</p><img src="Imagenes/fondo.jpg" class="img-responsive img-solicitud"></center>
							</td>
							<td><center>
								<form>
									<label class="eliminar-check">
									  <input type="checkbox">
									  <span class="checkmark"></span>
									</label>
								</form></center>
							</td>
						</tr>		

						<tr>
							<td class="titulo-solicitud">Videojuego1</td>
							<td>Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción 
							Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción </td>
							<td>
								<center><p class="user-solicitud">Bob</p><img src="Imagenes/fondo.jpg" class="img-responsive img-solicitud"></center>
							</td>
							<td><center>
								<form>
									<label class="eliminar-check">
									  <input type="checkbox">
									  <span class="checkmark"></span>
									</label>
								</form></center>
							</td>
						</tr>				
					</table>
				</div>
			</div>
		</div>	  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>