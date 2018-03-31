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
<body class="img-background3">


		<a href="#texto-comentar"><button class="down-page-comment"><span class="glyphicon glyphicon-comment"></span></button></a>

		<nav class="navbar navbar-inverse">
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
		<br>


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

		 <div class="container resena">
	      	<div class="row">
	        	<div class="col-md-12 article-info-resena">
	        		<div class="col-md-6">
	        			<a href="resena.php"><img src="Imagenes/titulo.jpg" class="img-responsive img-resena img-rounded"></a>
  					</div>
  					<div class="col-md-6">
  						<div class="table-responsive">
							<table class="table table-info">
							 <tr>
							 	<td>Titulo</td>
							 	<td>Halo 5: Guardians</td>
							 </tr>
							 <tr>
							 	<td>Plataforma:</td>
							 	<td>Xbox One</td>
							 </tr>
							 <tr>
							 	<td>Productor(es):</td>
							 	<td>Josh Holmes</td>
							 </tr>
							 <tr>
							 	<td>Desarrollador:</td>
							 	<td>343 Industries</td>
							 </tr>
							<tr>
							 	<td>Género(s):</td>
							 	<td>First Person Shooter</td>
							 </tr>
							 <tr>
							 	<td>Distribuidora(s):</td>
							 	<td>Microsoft Studios</td>
							 </tr>
							 <tr>
							 	<td>Modo de Juego:</td>
							 	<td>Multijugador y un Jugador</td>
							 </tr>
							 <tr>
							 	<td>Calificación:</td>
							 	<td>	
								 	<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Half_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart-resena">
  								</td>
							 </tr>
							</table>
						</div>
  					</div>	  					
  				</div>
            </div>  
        </div>
       	<!--Fin de reseña-->
		<div class="container resena">
		       	<div class="row">
				    <div class="col-md-12 article-info-sinopsis">
				        <p class="text-descripcion">Descripcion</p>
				        <p>Hablando de la campaña de publicidad previa al juego, nos hicieron creer que jugaríamos dos campañas diferentes con los anuncios de “Busca la verdad”, pero eso no tiene nada que ver con lo que vemos en el juego final. La única diferencia entre ambos personajes, son sus motivos para luchar, sus acompañantes y la habilidad que tiene Locke de escanear el ambiente para descubrir objetos útiles en el entorno. Fuera de ello, ambos son súper soldados que se controlan igual.

						Son 15 misiones en total que de acuerdo a la dificultad en la que juegues, los puedes pasar en 7-10 horas.</p>
			  		</div>
			  	</div>
		</div>
		<br>
		<!--ACA COMIENZA EL COMENTARIO-->
		<div class="container resena comentario">
			<div class="row">
				<div class="col-md-2">
					<center><img src="Imagenes/Anon.jpg" class="img-responsive img-rounded img-comentario"><p class="name-user-comentario">Usuario</p><br>
						<div class="btn-group btn-util">
				        	<button type="button" class="btn"><span class="glyphicon glyphicon-thumbs-up"></span></button>
							<button type="button" class="btn"><span class="glyphicon glyphicon-thumbs-down"></span></button>
						</div>
					</center>
				</div>
				<div class="col-md-10">
					<p class="fecha-comentario">Posteado el 2018-03-029 </p>
					<div class="row">
						<h3 class="titulo-comentario">Buen juego <img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Half_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart-resena">
	  					</h3>

						<p class="text-comentario">La verdad es un buen juego, de hecho jamas lo he jugado pero se ve bonito, ademas me recuerda a la infancia, donde jugaba en la clase de tic a el Halo y por eso ahora no se programar, es muy triste pero es la verdad. <br><br>
						Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno </p>
					</div>
				</div>
			</div>
		</div><br>
		<!--ACA TERMINA EL COMENTARIO-->
		<!--ACA COMIENZA EL COMENTARIO-->
		<div class="container resena comentario">
			<div class="row">
				<div class="col-md-2">
					<center><img src="Imagenes/Anon.jpg" class="img-responsive img-rounded img-comentario"><p class="name-user-comentario">Usuario</p><br>
						<div class="btn-group btn-util">
				        	<button type="button" class="btn"><span class="glyphicon glyphicon-thumbs-up"></span></button>
							<button type="button" class="btn"><span class="glyphicon glyphicon-thumbs-down"></span></button>
						</div>
					</center>
				</div>
				<div class="col-md-10">
					<p class="fecha-comentario">Posteado el 2018-03-029 </p>
					<div class="row">
						<h3 class="titulo-comentario">Buen juego <img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Half_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart-resena">
	  					</h3>

						<p class="text-comentario">La verdad es un buen juego, de hecho jamas lo he jugado pero se ve bonito, ademas me recuerda a la infancia, donde jugaba en la clase de tic a el Halo y por eso ahora no se programar, es muy triste pero es la verdad. <br><br>
						Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno </p>
					</div>
				</div>
			</div>
		</div><br>
		<!--ACA TERMINA EL COMENTARIO-->
		<!--ACA COMIENZA EL COMENTARIO-->
		<div class="container resena comentario">
			<div class="row">
				<div class="col-md-2">
					<center><img src="Imagenes/Anon.jpg" class="img-responsive img-rounded img-comentario"><p class="name-user-comentario">Usuario</p><br>
						<div class="btn-group btn-util">
				        	<button type="button" class="btn"><span class="glyphicon glyphicon-thumbs-up"></span></button>
							<button type="button" class="btn"><span class="glyphicon glyphicon-thumbs-down"></span></button>
						</div>
					</center>
				</div>
				<div class="col-md-10">
					<p class="fecha-comentario">Posteado el 2018-03-029 </p>
					<div class="row">
						<h3 class="titulo-comentario">Buen juego <img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Half_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart-resena">
	  					</h3>

						<p class="text-comentario">La verdad es un buen juego, de hecho jamas lo he jugado pero se ve bonito, ademas me recuerda a la infancia, donde jugaba en la clase de tic a el Halo y por eso ahora no se programar, es muy triste pero es la verdad. <br><br>
						Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno </p>
					</div>
				</div>
			</div>
		</div><br>
		<!--ACA TERMINA EL COMENTARIO-->
		<!--ACA COMIENZA EL COMENTARIO-->
		<div class="container resena comentario">
			<div class="row">
				<div class="col-md-2">
					<center><img src="Imagenes/Anon.jpg" class="img-responsive img-rounded img-comentario"><p class="name-user-comentario">Usuario</p><br>
						<div class="btn-group btn-util">
				        	<button type="button" class="btn"><span class="glyphicon glyphicon-thumbs-up"></span></button>
							<button type="button" class="btn"><span class="glyphicon glyphicon-thumbs-down"></span></button>
						</div>
					</center>
				</div>
				<div class="col-md-10">
					<p class="fecha-comentario">Posteado el 2018-03-029 </p>
					<div class="row">
						<h3 class="titulo-comentario">Buen juego <img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Half_Heart.png" class="img-responsive img-heart-resena">
	  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart-resena">
	  					</h3>

						<p class="text-comentario">La verdad es un buen juego, de hecho jamas lo he jugado pero se ve bonito, ademas me recuerda a la infancia, donde jugaba en la clase de tic a el Halo y por eso ahora no se programar, es muy triste pero es la verdad. <br><br>
						Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno </p>
					</div>
				</div>
			</div>
		</div><br>
		<!--ACA TERMINA EL COMENTARIO-->
		<!--ACA COMIENZA COMENTAR-->
		<div class="container resena comentar">
			<div class="row">
				<div class="col-md-2">
					<center><img src="Imagenes/Anon.jpg" class="img-responsive img-rounded img-comentario"><p class="name-user-comentario">Usuario</p><br>
						
					</center>
				</div>
				<div class="col-md-10">
					<p class="fecha-comentario">Hoy es 2018-03-029 </p>
					<div class="row"><form>
						<input type="text" name="titulo-comentario" placeholder="Titulo de tu comentario" id="texto-comentar" required><br>
						<textarea placeholder="¿Qué te pareció este juego?" required></textarea><br>
						<div class="sin-rating"><input type="radio" name="ratio" required></div>
						<div class="sin-rating"><input type="radio" name="ratio" required></div>
						<div class="sin-rating"><input type="radio" name="ratio" required></div>
						<div class="sin-rating"><input type="radio" name="ratio" required></div>
						<div class="sin-rating"><input type="radio" name="ratio" required></div>
						<input type="submit" value="Comentar"></form>
					</div>
				</div>
			</div>
		</div><br>
 							
						 
						   		   
						   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>