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
 <body class="img-background2">

 		<img src="Imagenes/celebi.png" class="img-responsive img-celebi visible-sm-inline visible-md-inline visible-lg-inline">
    <div class="sabias">
      <h3>¿Sabías Qué?</h3>
      <p>Satoshi Tajiri, uno de los creadores de Pokémon, contó que se inspiró en su infancia, cuando iba a los ríos a tratar de capturar insectos.</p>
    </div>

		<nav class="navbar navbar-inverse my-bar my-def-bar">
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
		

		<!--Esto es de una reseña sola-->
         <div class="container-fluid resena">
	      	<div class="row">
	        	<div class="col-md-9 article-info">
	        		<div class="col-md-5">
	        			<a href="resena.php"><img src="Imagenes/titulo.jpg" class="img-responsive img-info-vdj img-rounded"></a>
  					</div>
  					<div class="col-md-7">
  						<div class="row">
  							<div class="col-md-6">
  								<h2 class="title-vdj">Halo 5: Guardians</h2>
  							</div>	
  							<div class="col-md-6">
  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Half_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">
  							</div>	
  						</div>	
  						<div class="row">
  						<p class="text-vdj">Hablando de la campaña de publicidad previa al juego, nos hicieron creer que jugaríamos dos campañas diferentes con los anuncios de “Busca la verdad”, pero eso no tiene nada que ver con lo que vemos en el juego final. La única diferencia entre ambos personajes, son sus motivos para luchar, sus acompañantes y la habilidad que tiene Locke de escanear el ambiente para descubrir objetos útiles en el entorno. Fuera de ello, ambos son súper soldados que se controlan igual.

						Son 15 misiones en total que de acuerdo a la dificultad en la que juegues, los puedes pasar en 7-10 horas.</p></div>
  					</div>
  				</div>
            </div>  
        </div>
       	<!--Fin de reseña-->
		<br>
       		<!--Esto es de una reseña sola-->
        <div class="container-fluid resena">
	      	<div class="row">
	        	<div class="col-md-9 article-info">
	        		<div class="col-md-5">
	        			<img src="Imagenes/titulo2.jpg" class="img-responsive img-info-vdj img-rounded">
  					</div>
  					<div class="col-md-7">
  						<div class="row">
  							<div class="col-md-6">
  								<h2 class="title-vdj">Mighty Number 9</h2>
  							</div>	
  							<div class="col-md-6">
  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">
  							</div>	
  						</div>	
  						<div class="row">
  						<p class="text-vdj">Un juego de acción japonés de desplazamiento lateral que toma los mejores aspectos de la era clásica de los 8 y 16 bits y los transforma en una tecnología moderna con mecánicas frescas. En él jugamos como Beck, el noveno en una línea de robots de gran alcance, y el único que no está infectado por un virus misterioso que ha causado la locura entre las criaturas mecanizadas de todo el mundo.</p>
  						</div>
  					</div>
  				</div>
            </div>  
        </div>
       	<!--Fin de reseña-->
       	<br>
       	<!--Esto es de una reseña sola-->
         <div class="container-fluid resena">
	      	<div class="row">
	        	<div class="col-md-9 article-info">
	        		<div class="col-md-5">
	        			<img src="Imagenes/titulo.jpg" class="img-responsive img-info-vdj img-rounded">
  					</div>
  					<div class="col-md-7">
  						<div class="row">
  							<div class="col-md-6">
  								<h2 class="title-vdj">Halo 5: Guardians</h2>
  							</div>	
  							<div class="col-md-6">
  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Half_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">
  							</div>	
  						</div>	
  						<div class="row">
  						<p class="text-vdj">Hablando de la campaña de publicidad previa al juego, nos hicieron creer que jugaríamos dos campañas diferentes con los anuncios de “Busca la verdad”, pero eso no tiene nada que ver con lo que vemos en el juego final. La única diferencia entre ambos personajes, son sus motivos para luchar, sus acompañantes y la habilidad que tiene Locke de escanear el ambiente para descubrir objetos útiles en el entorno. Fuera de ello, ambos son súper soldados que se controlan igual.

						Son 15 misiones en total que de acuerdo a la dificultad en la que juegues, los puedes pasar en 7-10 horas.</p></div>
  					</div>
  				</div>
            </div>  
        </div>
       	<!--Fin de reseña-->
		<br>
       		<!--Esto es de una reseña sola-->
        <div class="container-fluid resena">
	      	<div class="row">
	        	<div class="col-md-9 article-info">
	        		<div class="col-md-5">
	        			<img src="Imagenes/titulo2.jpg" class="img-responsive img-info-vdj img-rounded">
  					</div>
  					<div class="col-md-7">
  						<div class="row">
  							<div class="col-md-6">
  								<h2 class="title-vdj">Mighty Number 9</h2>
  							</div>	
  							<div class="col-md-6">
  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">
  								<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">
  							</div>	
  						</div>	
  						<div class="row">
  						<p class="text-vdj">Un juego de acción japonés de desplazamiento lateral que toma los mejores aspectos de la era clásica de los 8 y 16 bits y los transforma en una tecnología moderna con mecánicas frescas. En él jugamos como Beck, el noveno en una línea de robots de gran alcance, y el único que no está infectado por un virus misterioso que ha causado la locura entre las criaturas mecanizadas de todo el mundo.</p>
  						</div>
  					</div>
  				</div>
            </div>  
        </div>
       	<!--Fin de reseña-->
		<br><br>
		<div class="container">
	      	<div class="row">
	        	<div class="col-md-8 col-md-offset-1 visible-sm-inline visible-md-inline visible-lg-inline">
			        <div class="btn-group nav-button">
			          <button type="button" class="btn"><span class="glyphicon glyphicon-menu-left"></span></button>
					  <button type="button" class="btn">1</button>
					  <button type="button" class="btn">2</button>
					  <button type="button" class="btn">3</button>
					  <button type="button" class="btn">4</button>
					  <button type="button" class="btn">5</button>
					  <button type="button" class="btn"><span class="glyphicon glyphicon-menu-right"></span></button>
					</div>
				</div>
			</div>

      <div class="row">
            <div class="col-md-8 col-md-offset-1 visible-xs-inline">
              <div class="btn-group nav-button">
                <button type="button" class="btn"><span class="glyphicon glyphicon-menu-left"></span></button>
            <button type="button" class="btn">1</button>
            <button type="button" class="btn">2</button>
            <button type="button" class="btn">3</button>
            <button type="button" class="btn">4</button>
            <button type="button" class="btn">5</button>
            <button type="button" class="btn"><span class="glyphicon glyphicon-menu-right"></span></button>
          </div>
        </div>
      </div>
		</div>
		<br><br><br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>
