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
		          <img src="Imagenes/anon.jpg" class="img-responsive img-perfil img-rounded">
		          <ul class="dropdown-menu">
		            <li><a href="perfil.php">Perfil</a></li>
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
		<br><br><br>	 
						   		   
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<center>
						<div class="img-perfil-pag"><img src="Imagenes/anon.jpg" class="img-rounded img-responsive"><button><span class="glyphicon glyphicon-pencil"></span></button></div>
						<br>
						<p class="nombre-perfil">Nombre del Usuario</p>
						<p class="acerca-de-mi">Acerca de mi</p>
						<p class="descripcion-perfil">Hola, mi nombre es hola, me gustan mucho los videojuegos y voy a hacer el nuevo zelda.</p>
					</center>
				</div>
				<div class="col-md-9">
					<table class="table responsive-table table-usuario">
						<thead>
						<th colspan="3">Informacion Básica</th>		
						</thead>		
						<tr>
							<td>Usuario:</td>
							<td>Nombre del usuario</td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td>
						</tr>
						<tr>
							<td>Edad:</td>
							<td>Edad del usuario</td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td>
						</tr>
						<tr>
							<td>País:</td>
							<td>País del usuario</td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td>
						</tr>
						<tr>
							<td>Ciudad/Estado:</td>
							<td>Ciudad/Estado del usuario</td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td>
						</tr>					
					</table><br>
					<table class="table table-responsive table-usuario">
						<thead>
						<th colspan="3">Informacion de Contacto</th>	
						</thead>
						<tr>
							<td>Correo:</td>
							<td>Correo del usuario</td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td>
						</tr>
						<tr>
							<td>Página Web:</td>
							<td>Página Web del usuario</td>
							<td><button><span class="glyphicon glyphicon-pencil"></span></button></td>
						</tr>			
					</table>
				</div>
			</div>
		</div>

		<div id="sendvdj" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Petición para videojuego</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form>
                               <div class="form-group">
                               <label class="sr-only">Titulo</label><input type="text" class="form-control input-sm" placeholder="Nombre del videojuego" id="vdj" name="vdj">
                               </div>
                                <div class="form-group send-data">
                                <label class="sr-only" for="password">Datos extra</label>
                                <textarea class="form-control input-sm" placeholder="Por favor rellene la mayor cantidad de datos posibles.

Plataforma:
Productor(es):
Desarrollador:
Género(s):
Distribuidora(s):
Modo de Juego:" id="password" name="password"></textarea>
								
                                </div><div class="form-group">
                               <label class="sr-only">Titulo</label><input type="text" class="form-control input-sm" placeholder="Link de Trailer/informacion" id="vdj" name="vdj">
                               </div> 
                               <button type="button" class="btn btn-default btn-xs btn-login" data-dismiss="modal">Enviar</button> 
                            </form>
                      </center>
                    </div>                  
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