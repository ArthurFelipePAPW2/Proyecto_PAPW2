<!DOCTYPE html>
<html class="landing-bg">
<head>
   @include('Blades.General.general-css')
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
		      <a class="navbar-brand" href="#">P I T Z E L</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Link 1</a></li>	
		        <li><a href="#">Link 2</a></li>	
		        <li><a href="#">Link 3</a></li>	
		        <li><a href="#">Link 4</a></li>	        
		      </ul>
		      <form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control search-bar" placeholder="Buscar"><button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-search"></span></button>
		        </div>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		         @include('Blades.General.general-img-user') 
		          <ul class="dropdown-menu">
		            <li><a href="/perfil">Perfil</a></li>
		            <li><a href="#">Configurar Cuenta</a></li>
		            <li><a href="#">Alguna Cosa</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a data-toggle="modal" data-target="#sendvdj">Enviar Sugerencia</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>

		@include('Blades.General.general-peticion-vdj')
		<br>  			
		<div id="cambiarfoto" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Cambiar Foto De Perfil</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form> 
							<div class="form-group input-div">
                               <label class="sr-only">Foto</label>

                               <label for="file-upload" class="custom-file-upload"></label>
								<input id="file-upload" type="file">

                               </div>        
                               <button type="button" class="btn btn-default btn-xs btn-login" data-dismiss="modal">Cambiar</button> 
                            </form>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>




		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<center>
						<div class="img-perfil-pag">@yield('img')<button data-toggle="modal" data-target="#cambiarfoto"><span class="glyphicon glyphicon-pencil"></span></button></div>
						<br>
						<p class="nombre-perfil">@yield('nombre')</p>
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
							<td>Usuario:</td>
							<form>
							<td><input type="text" value=@yield('nombre') required></td>
							<td><button type="submit"><span class="glyphicon glyphicon-pencil"></span></button></td>
						</form>
						</tr>
						<tr>
							<td>Edad:</td>
							<form>
							<td><input type="text" value=@yield('edad') required></td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td>
							</form>
						</tr>
						<tr>
							<td>País:</td>
							<form>
							<td><input type="text" value=@yield('pais') required></td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td>
							</form>
						</tr>
						<tr>
							<td>Ciudad/Estado:</td>
							<form>
							<td><input type="text" value=@yield('ciudad') required></td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td>
							</form>
						</tr>					
					</table><br>
					<table class="table table-responsive table-usuario">
						<thead>
						<th colspan="3">Informacion de Contacto</th>	
						</thead>
						<tr>
							<td>Correo:</td>
							<form>
							<td><input type="email" value=@yield('correo') required></td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td></form>
						</tr>
						<tr>
							<td>Página Web:</td>
							<form>
							<td><input type="text" value=@yield('pagina') required></td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td></form>
						</tr>			
					</table>

					<table class="table table-responsive table-usuario">
						<thead>
						<th colspan="3">Seguridad</th>	
						</thead>
						<tr>
							<td>Respuesta:</td>
							<form>
							<td><input type="text" value=@yield('preg') required></td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td></form>
						</tr>	
						<tr>
							<td>Contraseña:
								<span class="input-group-addon look-pass-general look-pass-perfil">
								<input type="checkbox" onclick="MostrarPass()">
								</span>
							</td>
							<form>
							<td>			  
								<input type="password" value=@yield('pass') required id="pass">
							</td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td></form>
						</tr>						
					</table>

				</div>
			</div>
		</div>
		@include('Blades.General.general-js')
		<script type="text/javascript" src="{!! asset('funciones.js') !!}"></script>
  </body>
</html>